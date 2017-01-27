<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<base href="<?php echo base_url();?>"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Daily Expense Reports</title>
	<meta name="robots" content="index, nofollow" />
	<link rel="shortcut icon" href="reports/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="reports/reports.css"/>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url();?>reports/jquery-ui.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function(){
		var pickerOpts = {
				dateFormat: $.datepicker.ATOM
			};
		
		var pickerOpts1 = {
			dateFormat: $.datepicker.ATOM
			};	
			
			$("#fromdate").datepicker(pickerOpts);
			$("#todate").datepicker(pickerOpts1);
		});
	</script>
<style type="text/css">
@media print {
#bar{display:none;}
#container th{border:1px solid #f1f1f1;}
}
</style>

</head>
<?php
$mot=0;

$fdate=$this->input->get('fdate',TRUE);if (empty($fdate)) $fdate=date('Y-m-d');
$tdate=$this->input->get('tdate',TRUE);if (empty($tdate)) $tdate=date('Y-m-d');

$query=$this->db->query("select voucher_date, narration, voucher_no, expense_id, amount, entry_date from expense_ledger where date(voucher_date) between '$fdate' and '$tdate'")->result();


?>

<style>
.date{
width:90px;
}
</style>
<body>
<div id="bar">
<div class="barcon">
<form action="" method="get">
<p align="left"  style="width:100%">
<span>From:</span>
<input type="text" class="date" id="fromdate" name='fdate' value="<?php echo $fdate?>">
<span>&nbsp; To:</span>
<input type="text" class="date" id="todate" name='tdate' value="<?php echo $tdate?>">

<input type="submit" value="Submit" class="submit">
</p>
</form>
<p align="right" style="float:right;width:10%;position:relative;top:-20px;">
<a href="javaScript:window.print();" title="Print"><img src="reports/print.png"></a>
</p>
</div>
</div>
<div id="container">
<h2></h2>
<h2>Mirpur Polytechnic Institute</h2>
<h3>Daily Expense Report</h3>
<h4>From <?php echo $fdate?> till <?php echo $tdate?></h4>
<table cellspacing="0">
<thead>
<tr>
<th width="20">Nr.</th>
<th width="30">Voucher Date</th>
<th width="15">Voucher No</th>
<th width="20">Purpose</th>
<th width="100">Narration</th>
<th width="20">Amount</th>
</tr>
</thead>
<tbody>
<?php $nr=1;foreach ($query as $row): 
?>
<tr>
<td><?php echo $nr?></td>
<td class="first"><?php echo date('d/m/y', strtotime($row->voucher_date))?></td>
<td><?php echo $row->voucher_no?></td>
<td><?php echo $this->lib->expName($row->expense_id);?></td>
<td><?php echo $row->narration?></td>
<td><?php echo $row->amount;$mot+=$row->amount;?></td>
<?php $nr++;endforeach;?>
</tr>

</tbody>
<tfoot>
<tr>
<th colspan='4'>&nbsp;</th>
<th style="text-align:right">Total:</th>
<th style="text-align:left"><?php echo number_format($mot,2)?></th>
</tr>
</tfoot>
</table>
</div>
</body>
</html>