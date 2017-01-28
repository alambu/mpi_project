<div id="k-body"><!-- content wrapper -->
    
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
                	
                    <div class="about-icst col-padded"><!-- inner custom column -->
                    <div class="col-lg-12">
                        <h1 class="page-title text-center">Student Portal</h1>
                    </div>
                    <div class="s-login-margin">
                    	<div class="row gutter"><!-- row -->
                        	<div class="col-lg-4 col-md-4">
                    
                                <figure class="s-images news-featured-image">	
                                    <img src="../assets/img/student-avater.png" alt="" class="img-responsive" />
                                </figure>
                                
                            
                            </div>
                        
                        	<div class="col-lg-offset-3 col-lg-4 col-md-4">
                                <div class="student-login-area">
                                    <form method="post" action="mpi/login_action">
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label>Session</label>
                                                <select name="session" class="form-control" placeholder="Session" data-bv-notempty="true" data-bv-field="Session is required" required>
										<option value="">-Select-</option>
									   <?php $session_data=$this->db->get("mpi_session")->result();
									   foreach($session_data as $sess):
									   ?>
										<option value="<?php echo $sess->id?>"><?php echo $sess->title?></option>
									   <?php endforeach;?>
									</select>
                                            </div>
                                        </div><!-- ends row -->
										
										 <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label>Department</label>
                                                <?php $dP = $this->db->get('department')->result(); ?>
                                                <select name="dept_id" class="form-control" placeholder="Department" data-bv-notempty="true" data-bv-field="Department is required" required >
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $dP as $d): ?>
                                                    <option value="<?php echo $d->id; ?>"><?php echo $d->dept_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div><!-- ends row -->
										 <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label>Username</label>
                                                <input type="text" name="name" class="form-control" placeholder="Username">
                                            </div>
                                        </div><!-- ends row -->
										
										
                                        <div class="row">
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="password">
                                            </div>
                                        </div>
                                        
                                        <div class="row"><!-- starts row -->
                            
                                            <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                                                <button type="submit" class="btn btn-default">Sign In</button>
                                            </div>
                                        </div><!-- ends row -->
                                    </form>
                                </div>
                            
                            </div>
                            </div>
                        
                        </div><!-- row end -->       
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->