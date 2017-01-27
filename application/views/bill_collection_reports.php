<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<base href="<?php echo base_url();?>"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Student Payment Reports</title>
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

$roll=$this->uri->segment(3);
$fee=$this->lib->getTutionfee($roll);
$mot=0;
$query=$this->db->query("select l.voucher_no,semester_fee,admission_fee,others_fee,re_exam_fee,total_received,payment_date,remarks,s.semester_name
 from student_ledger l left join semester s on l.semester_id=s.id where l.roll_no=$roll")->result();


// echo $this->db->last_query();
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
<span></span>
<input type="hidden" class="date" id="fromdate" name='fdate'>
<span>&nbsp; </span>
<input type="hidden" class="date" id="todate" name='tdate'>

<input type="hidden" class="submit">
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
<h3>Student Payment Report</h3>
<h4><b>Name:</b> &nbsp;<?php echo urldecode($this->uri->segment(4))?> <b> &nbsp;&nbsp;Roll No:</b> <?php echo $roll?></h4>
<table cellspacing="0">
<thead>
<tr>
<th width="20">Nr.</th>
<th width="30">Date</th>
<th width="10">Voucher</th>
<th width="25">Semester</th>
<th width="25">Semester Fee</th>
<th width="100">Description</th>
<th width="50">Amount</th>
</tr>
</thead>
<tbody>
<?php $nr=1;foreach ($query as $row): 
?>
<tr>
<td><?php echo $nr?></td>
<td class="first"><?php echo date('d/m/y', strtotime($row->payment_date))?></td>
<td><?php echo $row->voucher_no?></td>
<td><?php echo $row->semester_name?></td>
<td><?php echo $row->semester_fee;$totalpaid+=$row->semester_fee;?></td>
<td><?php echo $row->remarks?></td>
<td><?php echo $row->total_received;$mot+=$row->total_received;?></td>
<?php $nr++;endforeach;?>
</tr>

</tbody>
<tfoot>
<tr>
<th colspan='5'>&nbsp;</th>
<th style="text-align:right">Total:</th>
<th style="text-align:left"><?php echo number_format($mot,2)?></th>
</tr>
<tr>

<tr>
<th colspan='5'>&nbsp;</th>
<th style="text-align:right;font-size:14px;">Total Semester Fee paid:</th>
<th style="text-align:left"><?php echo number_format($totalpaid,2)?></th>
</tr>

<tr>
<th colspan='5'>&nbsp;</th>
<th style="text-align:right;font-size:14px;">Total Payable:</th>
<th style="text-align:left"><?php echo number_format($fee->total_payable_fee,2)?></th>
</tr>
<tr>
<th colspan='5'>&nbsp;</th>
<th style="text-align:right;font-size:14px;">Total Semester Due:</th>
<th style="text-align:left"><?php echo number_format($fee->total_payable_fee-$totalpaid,2)?></th>

</tr>
<tr>
<th colspan='5'>&nbsp;</th>
<th style="text-align:right;font-size:14px;">Total Admission Due:</th>
<th style="text-align:left"><?php echo number_format($row->admission_due,2)?></th>

</tr>


</tfoot>
</table>
</div>
</body>
</html>