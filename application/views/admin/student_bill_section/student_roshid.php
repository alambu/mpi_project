<html>
	<head>
		<base href="<?php echo base_url();?>"/>
		<meta charset="utf-8">
		 <link rel="shortcut icon" href="assets/images/mpilogo.png">

		<title>Student Money Receipt </title>
		<style>
			body{
				font-family:SolaimanLipi;
			}
			input[type="text"]{font-family:SolaimanLipi;}
			   h3,h5{ margin:0px;padding:0px;}
			   * {
				box-sizing: border-box;
				-moz-box-sizing: border-box;
			}
			.wrapper{
				width: 21cm;
				height: 26.7cm;
				padding:1em;
				margin: 0 auto;
				border: 1px #D3D3D3 solid;
				border-radius: 5px;
				background: white;
			}
			table.tbl_style{
				width:100%;
				border-collapse: collapse;
				
			}
			table.tbl_style tr td{
				border:1px solid black;
			}


			@wrapper{
				size: A4;
				margin: 0;
			}
			@media print {
				body{
					font-family:SolaimanLipi;
				}
				.wrapper{
					margin:0em;
					border: initial;
					border-radius: initial;
					width: initial;
					height: initial;
					box-shadow: initial;
					background: initial;
					page-break-after: none;
					-webkit-print-color-adjust: exact;
					marks:bleed;
				}
			}

			@media screen and projection {
				a {
					display:inline;
				}
			img.logo{
			height:20px;
			}	
			}

			@media print {
				a{display: none;}
				head{display: none;}
				footer{display: none;}
			#bar{display:none;}
			table{ margin:1px; padding:0px; line-height:13px;height: 40%;}
			img#hide{display:none;}

			}
			td img.logo{
			height:90px;
			width:100px;
			position:relative;
			margin-left:50px;
			}
			td h3{
			font-size:13px;
			}
			 .input_style4{
				 border:none;
				 background:none;
				 
			 }
			 @media print
			{    
				.no-print, .no-print *
				{
					visibility:hidden;
				}				
			}
		</style>
	</head>
 <body>
<?php
$voucherno=$this->uri->segment(3);

$row=$this->db->query("select l.voucher_no,l.roll_no,l.session,l.dept_id,l.total_bill,l.admission_fee,l.semester_fee,semester_due,others_fee,re_exam_fee,total_received,payment_date,service_charge,model_test,special_sacrifice,remarks,s.semester_name,sd.name
 from student_ledger l inner join semester s on l.semester_id=s.id inner join studentinfo sd on l.roll_no=sd.roll_no   where l.voucher_no=$voucherno")->row();
$this->db->query("select * from student_ledger where session='$row->session' and dept_id='$row->dept_id' and roll_no='$row->roll_no'")->row();
$record=$this->db->affected_rows();
?>	
<div class="wrapper" attr="none">
<table  style="font-size:13px;" width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td colspan="4">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td  width="25%" height='90px'><img src='assets/images/mpilogo.png' class='logo'/></td>
					<td width="50%"  height='90px'>
						<table width="100%;" border="0" cellpadding="0" cellpadding="0" style="border-collapse:collapse;"> 
							<tr> 
								<td width="100%" align="center"> <h2 style="font-size:16px;font-weight:bold; text-align:center;"> Mirpur Polytechnic Institute (Student Copy)</h2> </td>
							</tr>
							<tr> 
									<td width="100%" align="center"> <font style="font-size:14px; font-weight:normal;text-align:center;">Code: 50455</font> </td>
								</tr>
								<tr> 
									<td width="100%" align="center"> <font style="font-size:14px; font-weight:normal;text-align:center;">Muktobangla Complex,Mirpur-01,Dhaka-1216 </font></td>
								</tr>
								<tr> 
									<td width="100%" align="center"> <font style="font-size:14px; font-weight:normal;text-align:center;">Mobile: 01766457539</font></td>
								</tr>
						</table>
					</td>
					<td width="25%"  height='90px' style="padding-top:50px;"><b style="font-weight:normal;">date</b> :  <?php echo date('d/m/Y',strtotime($row->payment_date))?>&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/print.png" onclick="window.print()" id="hide" height="30" width="30"></td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td height='15' colspan="4"></td>
	</tr>
	
	<tr>
		<td ><b>Student Name</b></td>
		<td>
			<font style="font-size:14px;">&nbsp;:&nbsp;<?php echo $row->name?> </font>  
		</td>
		<td align='right'><b>Department</b> <font style="font-size:14px;">&nbsp;:&nbsp;<?php echo $this->lib->detpName($row->dept_id)->dept_name;?> </font> &nbsp;&nbsp;&nbsp;<b>Roll No</b></td>
		<td>
			<font style="font-size:14px;">&nbsp;:&nbsp;<?php echo $row->roll_no?></font>
		</td>
	</tr>
	<tr>
		<td><b>Voucher No </b> </td>
		<td>
			<font style="font-size:14px;">&nbsp;:&nbsp;<?php echo $row->voucher_no?></font>
		</td>
		<td align='right'><b>Payment Date </b> </td>
		<td>
			<font>&nbsp;:&nbsp;<?php echo date('d/m/Y',strtotime($row->payment_date))?></font>
		</td>
	</tr>

	<tr>
		<td height='4' colspan="4"></td>
	</tr>

	<tr> 
		<td colspan="4">
			<table class="tbl_style" width="100%" cellpadding="0" cellspacing="0"> 
				<tr>
					<td height='22'style="width:70%;text-align:center;font-size:16px;"><font>  Particulars </font></td>
					<td height='22' style="width:22%;text-align:center;font-size:16px;"> Amount(Taka) </td>
				</tr>

               <?php if($row->admission_fee > 0):?>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'><?php //echo $sub_total;?>Admission Fee</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->admission_fee,2);?></td>
				</tr>
				<?php endif;?>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'><?php //echo $sub_total;?>Semester Fee (<?php echo $row->semester_name?>)</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo ($row->semester_fee!=='0') ? number_format($row->semester_fee,2): number_format($row->semester_fee,2);?></td>
				</tr>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'><?php //echo $sub_total;?>Re-Exam Fee</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->re_exam_fee,2);?></td>
				</tr>
				
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Id Card/Sylabus/Library/Others Fee</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->others_fee,2);?></td>
				</tr>
				<?php if($row->model_test>0):?>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Model Test</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->model_test,2);?></td>
				</tr>
				<?php endif;?>
				<?php if($row->service_charge>0):?>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Service Charge</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->service_charge,2);?></td>
				</tr>
				<?php endif;?>
				<?php if($row->special_sacrifice>0):?>
                 <tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Spacial Sacrifice</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->special_sacrifice,2);?></td>
				</tr>
				<?php endif;?>
                <tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Total Bill</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->total_bill,2);?></td>
				</tr>
				<tr> 
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;" valign='top'> Received Amount &nbsp;&nbsp;</td>
					<td height='23' style="font-size:14px;text-align:center;"> <?php echo number_format($row->total_received,2);?>&nbsp;  </td>
				</tr>
			</table>
		</td>
	</tr>
	<tr style="height:40px;"> 
		<td colspan="4"><font style="font-size:16px;">  In Words : &nbsp; &nbsp;  <input type="text" readonly  style="border-bottom:1px dotted black; border-top:none; border-left:none; border-right:none; background:none; width:360px; font-size:14px; text-align:left;" value="<?php echo strtoupper($this->bnc->convertToWord($row->total_received));?>&nbsp;Taka Only" id="ftaka"/></font></td>
	</tr>

	<tr height='5'>
	  <td></td>
	</tr>
	<tr>
		<td colspan="4"><font style="font-size:16px;"> <?php echo $row->semester_name?> Semester Due </font><strong><?php echo number_format($row->semester_due,2)?> Taka</strong></td>  
	</tr>
	<tr style="height:40px;">
	  <td colspan='4'></td>
	</tr>
	
	<tr> 
		<td colspan="4"> 
			<table border="0" width="100%" cellpadding="0" cellspacing="0"> 
				<tr>
					<td width="295px" style="text-align:center; font-weight:normal; font-size:14px; color:black;"><hr style="width:150px; align:center; font-weight:normal;">Signature <br />(Received By)</td>
					<td width="295px" style="text-align:center; font-weight:normal; font-size:12px; color:black;"></td>
					<td width="295px" style="text-align:center; font-weight:normal; font-size:14px; color:black;"><hr style="width:150px; align:center; font-weight:normal;">Signature <br />(Authorized By)</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<br/>
	<table width="100%" border='0' style="height:2px; border-collapse:collapse;" cellspacing="0" cellpadding="0"> 
		<tr> 
			<td> <div  style="width:100%;height:1px;border-top:1px dashed black; "> </div></td>
		</tr>
	</table>
<br/>

<!----------------second part----------------->
<table  style="font-size:13px;margin-top:20px;" width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td colspan="4">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td  width="25%" height='90px'><img src='assets/images/mpilogo.png' class='logo'/></td>
					<td width="50%"  height='90px'>
						<table width="100%;" border="0" cellpadding="0" cellpadding="0" style="border-collapse:collapse;"> 
							<tr> 
								<td width="100%" align="center"> <h2 style="font-size:16px;font-weight:bold; text-align:center;"> Mirpur Polytechnic Institute (Office Copy)</h2> </td>
							</tr>
							<tr> 
									<td width="100%" align="center"> <font style="font-size:14px; font-weight:normal;text-align:center;">Code: 50455</font> </td>
								</tr>
								<tr> 
									<td width="100%" align="center"> <font style="font-size:14px; font-weight:normal;text-align:center;">Muktobangla Complex,Mirpur-01,Dhaka-1216 </font></td>
								</tr>
								<tr> 
									<td width="100%" align="center"> <font style="font-size:14px; font-weight:normal;text-align:center;">Mobile: 01766457539</font></td>
								</tr>
						</table>
					</td>
					<td width="25%"  height='90px' style="padding-top:50px;"><b style="font-weight:normal;">date</b> :  <?php echo date('d/m/Y',strtotime($row->payment_date))?>&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/print.png" onclick="window.print()" id="hide" height="30" width="30"></td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td height='15' colspan="4"></td>
	</tr>
	
	<tr>
		<td ><b>Student Name</b></td>
		<td>
			<font style="font-size:14px;">&nbsp;:&nbsp;<?php echo $row->name?></font>
		</td>
	
		<td align='right'><b>Department</b> <font style="font-size:14px;">&nbsp;:&nbsp;<?php echo $this->lib->detpName($row->dept_id)->dept_name;?> </font> &nbsp;&nbsp;&nbsp;<b>Roll No</b></td>
		<td>
			<font style="font-size:14px;">&nbsp;:&nbsp;<?php echo $row->roll_no?></font>
		</td>
	</tr>
	<tr>
		<td><b>Voucher No </b> </td>
		<td>
			<font style="font-size:14px;">&nbsp;:&nbsp;<?php echo $row->voucher_no?></font>
		</td>
		<td align='right'><b>Payment Date </b> </td>
		<td>
			<font style="font-size:14px;">&nbsp;:&nbsp;<?php echo date('d/m/Y',strtotime($row->payment_date))?></font>
		</td>
	</tr>

	<tr>
		<td height='4' colspan="4"></td>
	</tr>
<tr> 
		<td colspan="4">
			<table class="tbl_style" width="100%" cellpadding="0" cellspacing="0"> 
				<tr>
					<td height='22'style="width:70%;text-align:center;font-size:16px;"><font>  Particulars </font></td>
					<td height='22' style="width:22%;text-align:center;font-size:16px;"> Amount(Taka) </td>
				</tr>

               <?php if($row->admission_fee > 0):?>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'><?php //echo $sub_total;?>Admission Fee</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->admission_fee,2);?></td>
				</tr>
				<?php endif;?>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'><?php //echo $sub_total;?>Semester Fee (<?php echo $row->semester_name?>)</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo ($row->semester_fee!=='0') ? number_format($row->semester_fee,2): number_format($row->semester_fee,2);?></td>
				</tr>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'><?php //echo $sub_total;?>Re-Exam Fee</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->re_exam_fee,2);?></td>
				</tr>
				
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Id Card/Sylabus/Library/Others Fee</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->others_fee,2);?></td>
				</tr>
				<?php if($row->model_test>0):?>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Model Test</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->model_test,2);?></td>
				</tr>
				<?php endif;?>
				<?php if($row->service_charge>0):?>
				<tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Service Charge</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->service_charge,2);?></td>
				</tr>
				<?php endif;?>
				<?php if($row->special_sacrifice>0):?>
                 <tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Spacial Sacrifice</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->special_sacrifice,2);?></td>
				</tr>
				<?php endif;?>
                <tr>
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;border-bottom:1px solid #ddd;" valign='top'>Total Bill</td>
					<td valign='top' style="font-size:14px;text-align:center;border-bottom:1px solid #ddd;"><?php echo number_format($row->total_bill,2);?></td>
				</tr>
				<tr> 
					<td style="<?php echo $custom_height;?>text-align:left;text-indent:20px;padding-top:1px;" valign='top'> Received Amount &nbsp;&nbsp;</td>
					<td height='23' style="font-size:14px;text-align:center;"> <?php echo number_format($row->total_received,2);?>&nbsp;  </td>
				</tr>
			</table>
		</td>
	</tr>
	<tr style="height:40px;"> 
		<td colspan="4"><font style="font-size:16px;">  In Words : &nbsp; &nbsp;  <input type="text" readonly  style="border-bottom:1px dotted black; border-top:none; border-left:none; border-right:none; background:none; width:360px; font-size:14px; text-align:left;" value="<?php ?>&nbsp;Taka Only" id="btaka"/></font></td>
	</tr>

	<tr height='5'>
	  <td></td>
	</tr>
	<tr>
		<td colspan="4"><font style="font-size:16px;"><?php echo $row->semester_name?> Semester Due </font><strong><?php echo number_format($row->semester_due,2)?> Taka</strong></td>  
	</tr>
	<tr style="height:40px;">
	  <td colspan='4'></td>
	</tr>
	
	<tr> 
		<td colspan="4"> 
			<table border="0" width="100%" cellpadding="0" cellspacing="0"> 
				<tr>
					<td width="295px" style="text-align:center; font-weight:normal; font-size:14px; color:black;"><hr style="width:150px; align:center; font-weight:normal;">Signature <br />(Received By)</td>
					<td width="295px" style="text-align:center; font-weight:normal; font-size:12px; color:black;"></td>
					<td width="295px" style="text-align:center; font-weight:normal; font-size:14px; color:black;"><hr style="width:150px; align:center; font-weight:normal;">Signature <br />(Authorized By)</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</div>
<script>
function taka(){
var x=document.getElementById("ftaka").value;
document.getElementById("btaka").value=x;
}
taka();
</script>
</body>
