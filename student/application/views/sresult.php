<div id="k-body"><!-- content wrapper -->
    <?php
//print_r($this->session->all_userdata());
	extract($this->session->all_userdata());

	?>
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
                                                    <img class="img-responsive img-thumbnail" src="../uploads/student/<?php echo $image?>" alt="Photo">
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
                                                            <th>Department:</th>
                                                            <td><?php  $dept=$this->lib->detpName($dept_id);echo $dept->dept_name;?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Session:</th>
                                                            <td><?php  $sess=$this->lib->sessName($session_id);echo $sess->title;?></td>
                                                        </tr>
                                                    </tbody></table>
                                                </div>
                                            </div>

                                        </div>
                                    </div> 
                                <div class="semester-wise-result row">
                                   <div class="col-sm-8">
                                       <h4>Semester Result</h4>
                                   </div>
                                    <div class="col-sm-4">
                                        <form action="">
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                               <label></label>
                                                <select name="semester_id" id="semester_id" class="form-control" onchange="window.location='student/sresult/'+this.value">
                                                    <option value="">---Select Semester----</option>
                                                    <option value="1" <?php echo ($semester_id==1) ? 'SELECTED':'';?>>First Semester</option>
                                                    <option value="2" <?php echo ($semester_id==2) ? 'SELECTED':'';?>>Second Semester</option>
                                                    <option value="3" <?php echo ($semester_id==3) ? 'SELECTED':'';?>>Thrid Semester</option>
                                                    
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>  
                            <div class="table-responsive"> 
                            <table class="table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr class="info">
                                                <th>SI No.</th>
                                                <th>Subject Name</th>
                                                <th>GPA</th>
                                                <th>GRADE</th>
                                            </tr>
                                        </thead>
                                    <tbody>
									<?php $totalcr=0;$nr=1;foreach($rs as $r):
									$totalcr+=$r->sub_credit;
									$totalscore+=$r->grade_point*$r->sub_credit;
									?>
                                        <tr>
											<td><?php echo $nr++?></td>
											<td><?php echo $r->subject_name;?></td>
											<td><?php echo $r->grade_point;?></td>
											<td><?php echo $r->grade;?></td>
										</tr>
										<?php endforeach;?>
										<tr><td colspan='2' align='right'>CGPA</td>
										<td><?php echo number_format($totalscore/$totalcr,2)?></td>
										<td></td>
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
                                        <li><a href="mpi/logout">Signout</a></li>
                                    </ul>
                    
							</li>
                            
                        </ul><!-- widgets end -->
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- sidebar wrapper end -->
            
            </div><!-- row end -->
            </div>
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    