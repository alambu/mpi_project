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
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->
                       <div class="content-panel-box">     
                            <div class="student-profile-box">
                        <div class="panel panel-primary">
                                <div class="panel-heading">Profile for <?php echo $name?></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <table class="table table-bordered mr-15">
                                                <tbody><tr>
                                                    <th>Name:</th>
                                                    <td><?php echo $name?></td>
                                                </tr>
                                                <tr>
                                                    <th>Fathers Name:</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Mothers Name:</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Mobile:</th>
                                                    <td></td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                           <div class="s-image">
                                            <img class="img-responsive img-thumbnail" src="../uploads/student/<?php echo $image?>" alt="Photo">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <table class="table table-bordered">
                                                <tbody><tr>
                                                    <th>Roll Ro:</th>
                                                    <td><?php echo $roll_no?></td>
                                                    <th>Reg Ro:</th>
                                                    <td colspan="3"><?php echo $reg_no?></td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth:</th>
                                                    <td></td>
                                                    <th>Mobile:</th>
                                                    <td colspan="3"></td>
                                                </tr><tr>
                                                    <th>Present Address:</th>
                                                    <td colspan="5"></td>
                                                </tr>
                                                <tr>
                                                    <th>Permanent Address:</th>
                                                    <td colspan="5"></td>
                                                </tr>
                                                <tr>
                                                    <th>Gender:</th>
                                                    <td>Male</td>
                                                    <th>Blood Group:</th>
                                                    <td colspan="3">B+</td>
                                                </tr>
                                                <tr>
                                                    <th>Email:</th>
                                                    <td></td>
                                                    <th>Department:</th>
                                                    <td>Computer</td>
                                                    <th>Session:</th>
                                                    <td>09-10</td>
                                                </tr>
                                                <tr>
                                                    <th>Semester:</th>
                                                    <td>5th</td>
                                                    <th>Passing Year:</th>
                                                    <td>0</td>
                                                    <th>Shift:</th>
                                                    <td>1st</td>
                                                </tr>
                                            </tbody></table>
                                        </div>
                                    </div>	
                                   
                                    <a href="<?php echo base_url();?>/student/sresult" class="btn btn-info pull-left">Back To Home</a>	

                                </div>
                            </div>
                            </div>
                        </div>
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->