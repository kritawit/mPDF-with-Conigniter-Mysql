<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>mPDF With Conigniter Framework</title>
	<link rel="stylesheet" href="<?php echo CSS ?>bootstrap.min.css">
	<style type="text/css">
		table, th, td {
    		border: 1px solid red;
    		text-align: center;
		}
	</style>
</head>
<body>
<br>
<div class="container">
	<div class="table-responsive">
		<table class="table table-hover" style="background-color:#00FF00;">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Create Date</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			<?php	if (!empty($data)):?>
			<?php for ($i = 0; $i < count($data); $i++): ?>
    		<tr class="success">
        		<td><span class="glyphicon glyphicon-asterisk"></span> <?php echo $data[$i]["id"];?></td>
        		<td><?php echo $data[$i]["name"];?></td>
        		<td><?php echo $data[$i]["email"];?></td>
        		<td><?php echo $data[$i]["create_at"];?></td>
        		<td><span class="label label-success"><?php echo $data[$i]["status"];?></span></td>
    		</tr>
    		<?php endfor; ?>
			<?php endif;?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="<?php echo JS ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS ?>bootstrap.min.js"></script>
</body>
</html>