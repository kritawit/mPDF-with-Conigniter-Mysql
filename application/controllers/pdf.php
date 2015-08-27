<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('register');
		$this->load->library('m_pdf');
	}

	public function index()
	{
		$this->load->view('pdf/index');
	}

	public function to_pdf(){
		//this data will be passed on to the view
		$data['data']= $this->register->getallprofile();

		//load the view, pass the variable and do not show it but "save" the output into $html variable
		$html=$this->load->view('pdf/pdf_output', $data,TRUE);

		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();

		// $stylesheet = file_get_contents(CSS.'bootstrap.min.css');

		// $pdf->WriteHTML($stylesheet,1);
		//generate the PDF!
		$pdf->WriteHTML($html);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$pdf->Output();
	}



}

/* End of file pdf.php */
/* Location: ./application/controllers/pdf.php */