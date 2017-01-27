<div id="k-body"><!-- content wrapper -->
     <?php extract($this->session->all_userdata());?>
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
                <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->
                
                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                        </div>
                    </form>
                    
                    <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->
                
                </div><!-- top search end -->              
                
            </div><!-- row end -->
            
            <div class="two-colume-box-area">
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-9 col-md-9 col-lg-push-3 col-md-push-3"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">    
                                <div class="panel panel-success">
                                        <div class="panel-heading"><?php echo $name?></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                   <div class="s-image">
                                                    <img class="img-responsive img-thumbnail" src="uploads/student/<?php echo $image?>" alt="Photo">
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                    <table class="table table-bordered">
                                                        <tbody><tr>
                                                            <th>Student Name:</th>
                                                            <td><?php echo $name?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Roll No:</th>
                                                            <td><?php echo $roll_no?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Reg.No:</th>
                                                            <td><?php echo $reg_no?></td>
                                                        </tr>
                                                        
														
														<tr>
														  <th>Total Payable fee</th>
														  <td><?php echo $history->total_payable_fee?></td>
														</tr>
														
														
														<tr>
														  <th>Per Semester fee</th>
														  <td><?php echo $history->per_semester_payable?></td>
														</tr>
														
														
                                                    </tbody>
													
													</table>
                                                </div>
                                            </div>

                                        </div>
                                    </div> 
                         
                            <div class="table-responsive"> 
                            <table class="table table-striped" cellspacing="0" width="100%"> 
										
										<thead>
                                        <tr class="info">
                                          <th>Nr.</th>
                                          <th>Date</th>
										    <th>Voucher No</th>  
										   <th>Semester</th>
										   <th>Semester Fee</th>
										   <th>Admission Fee</th>
                                      </tr>
                                      </thead>
                                    <tbody>
                                      <?php  
$query=$this->db->query("select l.voucher_no,semester_fee,admission_fee,others_fee,re_exam_fee,total_received,payment_date,remarks,s.semester_name
 from student_ledger l left join semester s on l.semester_id=s.id where l.roll_no=$roll_no")->result();
		$nr=1;$total=0;	
		foreach($query as $row):?>
		<tr>
		  <td><?php echo $nr++?></td>
		  <td><?php echo date('d/m/y', strtotime($row->payment_date))?></td>
		  <td><?php echo $row->voucher_no?></td>
		  <td><?php echo $row->semester_name?></td>
		  <td><?php echo $row->semester_fee;$totalsem+=$row->semester_fee;?></td>
		  <td><?php echo $row->admission_fee;$totalad+=$row->admission_fee;?></td>
		
		</tr>
	<?php
	$nr++; 
	endforeach;
		?>
		<tr>
		  <td></td>
		  <td></td>
		  <td cols='2'>Total</td>
		  <td>=</td>
		  <td><?php echo $totalsem;?></td>
		  <td><?php echo $totalad;?></td>
		</tr>
		<tr>
		 <td colspan='6'></td>
		 <td align='right'><a href="student/bill_collection_reports/<?php echo $roll_no ?>/<?php echo $name?>" target='_blank' class="btn btn-primary">Print</a></td>
		</tr>
		
                                </tbody>
                            </table>
                            </div>  
                            
                            </div>
                        
                        </div><!-- row end -->          
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
                <div id="k-sidebar" class="custom-side-section col-lg-3 col-md-3 col-lg-pull-9 col-md-pull-9"><!-- sidebar wrapper -->
                	
                    <div class="col-padded col-shaded"><!-- inner custom column -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu custom-sidebar"><!-- widget -->
                    
                                    <h1 class="title-widget s-h1">Student Panel</h1>
                                    <ul>
                                        <li><a href="student/sresult">Home</a></li>
                                        <li><a href="student/payment_history">Payment History</a></li>
                                        <li><a href="student/profiles">Student Profile</a></li>
                                        <li><a href="student/change_password">Change Password</a></li>
                                        <li><a href="">Signout</a></li>
                                    </ul>
                    
							</li>
                            
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- sidebar wrapper end -->
            
            </div><!-- row end -->
            </div>
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    