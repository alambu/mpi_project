<html>
<head>
<meta charset="utf-8">
<title>Student Money Receipt</title>
<link href='' rel='stylesheet' type='text/css'>
<style>
	body{
		font:80% Arial,Times,vardana;
		font-family:Georgia;
	}
	input[type="text"]{font:80% Arial,Times,vardana;
		font-family:Georgia;}
	   h3,h5{ margin:0px;padding:0px;}
	   * {
		box-sizing: border-box;
		-moz-box-sizing: border-box;
	}
	table tr td{font-size:12px;}
	.wrapper{
		width: 21cm;
		height: 26.7cm;
		padding:1em;
		margin: 0 auto;
		border: 1px #D3D3D3 solid;
		border-radius: 5px;
		background: white;
		font-family:'Lato',arial;
	}
	table.tbl_style{
		width:100%;
		border-collapse: collapse;
		
	}
	table.tbl_style tr td{
		border:1px solid gray;
		
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
 .sub-heading{
	text-align:center;
	background: #1C155B;
	width: 170px;
	margin: 0px auto;
	padding: 3px;
	box-sizing: border-box;
	color: white;
	font-size: 15px;
	height: 25px;
	line-height: 17px; 
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
 }
 hr{
	height:1px;
	border-top: 1px solid #000000;
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

<div class="wrapper" attr="none">
	<table style="font-size:14px;border-collapse:collapse;table-layout:fixed;" width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td colspan="4">
				<table height="95" style="border-collapse:collapse;" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td class="" width="25%" height='90px' valign='top' style="padding-top: 15px;text-indent: 20px;"></td>
						<td class="" width="50%"  height='90px'>
							<table width="100%;" border="0" cellpadding="0" cellpadding="0" style="border-collapse:collapse;"> 
								<tr> 
									<td width="100%" align="center"><h2 style="font-size:16px;font-weight:bolder; text-align:center;padding-bottom:1px;margin-bottom:1px;"> Mirpur Polytechnic Institute (Student Copy)</h2></td>
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
						<td width="25%"  height='90px' style="padding-top:50px;text-align:right"><b style="font-weight:normal;"></b> &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url();?>assets/img/print.png" onclick="window.print()" id="hide" height="30" Title="Click Print" width="30"></td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td height='5' colspan="4"></td>
		</tr>
		<tr> 
			<td  height='30' colspan="4"> 
				<div class="sub-heading"> Payment Voucher</div>
			</td>
		</tr>
		<tr> 
			<td colspan="4"> 
				<div style="text-align:center;">(Office Copy)</div>
			</td>
		</tr>
		<tr> 
			<td colspan="4"> 
				<table width="100%" height="" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;table-layout:fixed;font-size:14px;"> 
					<tr>
						<td style="width: 20%;height:25px;font-size:13px;"><b>Account Code</b></td>
						<td style="width: 45%;">
							<font><b>&nbsp;:&nbsp;</b><?php echo $q->acc_no; ?></font>
						</td>
						<td style="width: 23%;text-align:right"><b>Payment Date</b></td>
						<td  style="width: 12%;"><font><b>&nbsp;:&nbsp;</b><?php ?></font></td>
						
					</tr>
					<tr>
						<td><b>Account Charged</b></td>
						<td>
							<font><b>&nbsp;:&nbsp;</b><?php //echo $q->acc_charged; ?>&nbsp;</font>
						</td>
						<td style="width: 23%;text-align:right"><b>Voucher No</b></td>
						<td  style="width: 12%;"><font><b>&nbsp;:&nbsp;</b><?php //echo $q->vouchor_no; ?></font></td>
						
					</tr>
					<tr> 
						<td><b>Party Name</b></td>
						<td><b>&nbsp;:&nbsp;</b><?php //echo $this->lib->partyName($q->party_id); ?></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height='10' colspan="4"></td>
		</tr>
		<tr> 
			<td colspan="4">
				<table class="tbl_style" style="border-collapse:collapse;" width="100%" cellpadding="0" cellspacing="0"> 
					<tr>
						<td height='22' style="width:8%;text-align:center;font-size:14px;">Serial No</td>
						<td height='22'style="width:72%;text-align:center;font-size:14px;"><font>Particular</font></td>
						<td height='22' style="width:20%;text-align:center;font-size:14px;">Total</td>
					</tr>
					<tr>
						<td valign='middle' style="height: 40px;font-size:15px;text-align:left;text-indent:5px;">1</td>
						<td valign='middle' style="font-size:15px;text-align:left;text-indent:20px;font-size:12px;"><?php //echo substr($q->remark,0,100); ?></td>
						<td valign='middle' style="font-size:15px;text-align:center;font-size:13px;"><?php //echo $q->amount; ?></td>
					</tr>
					<tr> 
						<td colspan="2" height='23' style="text-align:right; font-size:12px;font-weight:bold"> Total taka &nbsp;&nbsp;</td>
						<td height='23' style="padding-left:50px; font-size:13px;font-weight:bold;font-family:'Lato',arial;"><?php //echo $q->amount; ?>&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr style="height:40px;"> 
			<td colspan="4"><font style="font-size:14px;">In words : &nbsp; &nbsp;  <input type="text" readonly  style="border-bottom:1px dotted black; border-top:none; border-left:none; border-right:none; background:none; width:360px; font-size:14px; text-align:left;font-family:'Lato',arial;" value=" <?php //echo $this->lib->tkconvert($q->amount)." Taka Only."; ?>" id="ftaka"/></font></td>
		</tr>
		<tr>
			<td colspan="4" style="height:60px;"></td>
		</tr>
		<tr> 
			<td colspan="4" style="height:60px;"> 
				<table border="0" width="100%" style="border-collapse:collapse;" cellpadding="0" cellspacing="0"> 
					<tr>
						<td width="25%" style="text-align:center; font-weight:normal; font-size:12px; color:black;"><hr style="width:150px; align:center; font-weight:normal;"> Prepared By</td>
						<td width="25%" style="text-align:center; font-weight:normal; font-size:12px; color:black;"><hr style="width:150px; align:center; font-weight:normal;"> Approved By</td>
						<td width="25%" style="text-align:center; font-weight:normal; font-size:12px; color:black;"><hr style="width:150px; align:center; font-weight:normal;"> Received By</td>
						<td width="25%" style="text-align:center; font-weight:normal; font-size:12px; color:black;"><hr style="width:150px; align:center; font-weight:normal;"> Authorize By</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<br/>
		<table width="100%" border='0' style="height:2px; border-collapse:collapse;" cellspacing="0" cellpadding="0"> 
			<tr> 
				<td> <div style="width:100%;height:1px;border-top:1px dashed black; "> </div></td>
			</tr>
		</table>
	<br/>

<!----------------second part----------------->
	<table style="font-size:14px;border-collapse:collapse;table-layout:fixed;" width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td colspan="4">
				<table height="95" style="border-collapse:collapse;" border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td class="" width="25%" height='90px' valign='top' style="padding-top: 15px;text-indent: 20px;"><b> BS -600</b></td>
						<td class="" width="50%"  height='90px'>
							<table width="100%;" border="0" cellpadding="0" cellpadding="0" style="border-collapse:collapse;"> 
								<tr> 
									<td width="100%" align="center"><h2 style="font-size:16px;font-weight:bolder; text-align:center;padding-bottom:1px;margin-bottom:1px;"> Mirpur Polytechnic Institute (Office Copy)</h2></td>
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
						<td width="25%"  height='90px' style="padding-top:50px;text-align:right"><b style="font-weight:normal;"></b> : &nbsp;&nbsp;&nbsp;&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td height='5' colspan="4"></td>
		</tr>
		<tr> 
			<td  height='30' colspan="4"> 
				<div class="sub-heading"> Payment Voucher</div>
			</td>
		</tr>
		<tr> 
			<td colspan="4"> 
				<div style="text-align:center;">(Party Copy)</div>
			</td>
		</tr>
		<tr> 
			<td colspan="4"> 
				<table width="100%" height="" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;table-layout:fixed;font-size:14px;"> 
					<tr>
						<td style="width: 20%;height:25px;"><b>Account Code</b></td>
						<td style="width: 45%;">
							<font><b>&nbsp;:&nbsp;</b><?php echo $q->acc_no; ?></font>
						</td>
						
						<td style="width: 23%;text-align:right"><b>Payment Date</b></td>
						<td  style="width: 12%;"><font><b>&nbsp;:&nbsp;</b><?php //echo date('d-m-Y',strtotime($q->insert_date)); ?></font></td>
					</tr>
					<tr>
						<td><b>Account Charged</b></td>
						<td>
							<font><b>&nbsp;:&nbsp;</b><?php //echo $q->acc_charged; ?></font>
						</td>
						<td style="width: 23%;text-align:right"><b>Voucher No</b></td>
						<td  style="width: 12%;"><font><b>&nbsp;:&nbsp;</b><?php //echo $q->vouchor_no; ?></font></td>
					</tr>
					<tr> 
						<td><b>Party Name</b></td>
						<td><b>&nbsp;:&nbsp;</b><b><?php //echo $this->lib->partyName($q->party_id); ?></b></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height='10' colspan="4"></td>
		</tr>
		<tr> 
			<td colspan="4">
				<table class="tbl_style" style="border-collapse:collapse;" width="100%" cellpadding="0" cellspacing="0"> 
					<tr>
						<td height='22' style="width:8%;text-align:center;font-size:14px;">Serial No</td>
						<td height='22'style="width:72%;text-align:center;font-size:14px;"><font>Particular</font></td>
						<td height='22' style="width:20%;text-align:center;font-size:14px;">Total</td>
					</tr>
					<tr>
						<td valign='middle' style="height: 40px;font-size:15px;text-align:left;text-indent:5px;">1</td>
						<td valign='middle' style="font-size:15px;text-align:left;text-indent:20px;font-size:12px;"><?php //echo substr($q->remark,0,100); ?></td>
						<td valign='middle' style="font-size:15px;text-align:center;font-size:13px;"><?php //echo $q->amount; ?></td>
					</tr>
					<tr> 
						<td colspan="2" height='23' style="text-align:right; font-size:12px;font-weight:bold;"> Total taka &nbsp;&nbsp;</td>
						<td height='23' style="padding-left:50px; font-size:13px;"><?php //echo $q->amount; ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr style="height:40px;"> 
			<td colspan="4"><font style="font-size:14px;">In words : &nbsp; &nbsp;  <input type="text" readonly  style="border-bottom:1px dotted black; border-top:none; border-left:none; border-right:none; background:none; width:360px; font-size:14px; text-align:left;font-family:'Lato',arial;" value=" <?php //echo $this->lib->tkconvert($q->amount)." Taka Only."; ?>" id="ftaka"/></font></td>
		</tr>
		<tr>
			<td colspan="4" style="height:60px;"></td>
		</tr>
		<tr> 
			<td colspan="4" style="height:60px;"> 
				<table border="0" width="100%" style="border-collapse:collapse;" cellpadding="0" cellspacing="0"> 
					<tr>
						<td width="25%" style="text-align:center; font-weight:normal; font-size:12px; color:black;"><hr style="width:150px; align:center; font-weight:normal;"> Prepared By</td>
						<td width="25%" style="text-align:center; font-weight:normal; font-size:12px; color:black;"><hr style="width:150px; align:center; font-weight:normal;"> Approved By</td>
						<td width="25%" style="text-align:center; font-weight:normal; font-size:12px; color:black;"><hr style="width:150px; align:center; font-weight:normal;"> Received By</td>
						<td width="25%" style="text-align:center; font-weight:normal; font-size:12px; color:black;"><hr style="width:150px; align:center; font-weight:normal;"> Authorize By</td>
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
