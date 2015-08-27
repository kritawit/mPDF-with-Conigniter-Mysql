<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pdf
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        log_message('Debug', 'mPDF class is loaded.');
	}
	function load($param=NULL)
    {
        include_once APPPATH.'/third_party/mpdf/mpdf.php';

        if ($params == NULL)
        {
            $param = '"en-GB-x","A4","","",10,10,10,10,6,3';
        }

        return new mPDF($param);
    }
}

/* End of file m_pdf.php */
/* Location: ./application/libraries/m_pdf.php */
