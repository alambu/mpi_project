<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <base href="<?php echo base_url(); ?>">
    <link rel="shortcut icon" href="assets/images/mpilogo.png">
     <title>Mirpur Polytechnic Institute</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/admin/assets/bootstrapValidator/css/bootstrapValidator.min.css" rel="stylesheet">
    <link href="assets/admin/assets/bootstrap-datepicker/css/datepicker.css" rel="stylesheet">
    <link href="assets/admin/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet">
    <link href="assets/admin/assets/data-tables/DT_bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="assets/admin/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        <script src="assets/admin/js/jquery.js"></script>
  </head>
  <body>
  <section id="container" >
      <!--header start-->
      <?php include('toast.php'); ?>

<?php 
$input=$this->input->post(null);
extract($input);
?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-11" style="position:relative;top:-95px;">
                   <section class="panel">
 
                          <header class="panel-heading">
                              <h3>Daily Expense</h3>
							  <button class="btn btn-info" onclick="window.location.reload();" style="float:right;position:relative;top:-30px;">Reload</button>
                          </header>
                          <div class="panel-body" style="position:relative;top:-25px;">
                              <div class="form">
   
			<form action="admin/daily_expense_sub" method="post" id="fromvalid">	
 
				<div class="padding-zero col-md-12">		
                    <div class="form-group p-left0 col-sm-4">
							<label class="">Voucher date</label>
							<input type="text" name="voucher_date" class="form-control" value="<?php echo date('d/m/Y');?>" placeholder="dd/mm/yy" required />
			       </div>  	 
						<div class="form-group p-left0 col-sm-4">
								<label for="expense_id" class="">Purpose</label>
							   <?php $sdP = $this->db->get('expense_ctg')->result(); ?>
								<select name="expense_id" class="form-control" required >
									<option value="">-Select-</option>
									<?php foreach ( $sdP as $d): ?>
									<option value="<?php echo $d->expense_id; ?>" <?php if($d->expense_id==$expense_id): echo "SELECTED";endif;?>><?php echo $d->title; ?></option>
									<?php endforeach; ?>
								</select>
						</div>
				   
				</div>
				
               <div class="padding-zero col-md-12">					
                        
				 <div class="form-group p-left0 col-sm-4">
							<label class="">Narration</label>
							<input type="text" name="narration" class="form-control"  id="narration" required/>
				 </div>
				<div class="form-group p-left0 col-sm-4">
						<label class="">Amount</label>
						<input type="text" name="amount" id="amount" class="form-control" required/>
				  </div>
					 <div class="form-group p-left0 col-sm-4">
							
			       </div>  	 
		   </div>
	 <div class="padding-zero col-md-12">					
                        
		<div class="form-group p-left0 col-sm-4">

		</div>
		<div class="form-group p-left0 col-sm-4">
<input type="submit" value="SUBMIT" class="btn btn-primary"/>
		</div>
		<div class="form-group p-left0 col-sm-4">
          
		</div>  	 
	</div>
	
				</form>
				
 
			   
					<div class="clearfix"></div>
					<div class="adv-table">
					<h3>Expense Collection Details</h3>
                                    <table class="display table table-striped dataTable" id="example">
                                      <thead>
                                      <tr style="font-size:12px;">
                                          <th>Nr.</th>
										  <th>Voucher Date</th>
                                          <th>Voucher No</th>
                                          <th>Purpose</th>
                                          <th>Narration</th>           
                                          <th>Amount</th>           
                                          <!--<th>Action</th>       -->    
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php $paid=$this->db->get("expense_ledger")->result();$r=1; foreach($paid as $p):?>
										<tr>
										  <td><?php echo $r++?></td>
										  <td><?php echo date('d/m/Y',strtotime($p->voucher_date))?></td>
										  <td><?php echo $p->voucher_no?></td>
										  <td><?php echo $this->lib->expName($p->expense_id)?></td>
										  <td><?php echo $p->narration?></td>
										  <td><?php echo $p->amount?></td>
										  <!--  <td><a href="javascript:void();" ><i class="glyphicon glyphicon-print"></i>&nbsp;<b>Print</b></a></td>-->
										</tr>
										<?php endforeach;?>
                                    </tbody>
                          </table>
                                </div>

                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
