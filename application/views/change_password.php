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
                                            
                                            <h1 class="page-title text-center">Change Password</h1><br>
                                            <div class="row">
                                                <div class="col-lg-offset-4 col-lg-4">
												<?php if($this->uri->segment(3)==1):?><span class="btn btn-success"> <?php echo "Successfully Updated";?> </span><span class="btn btn-danger"><?php elseif($this->uri->segment(3)==0):"Something Missing!!";?></span><?php endif;?>
                                                     <form method="post" action="student/change_password">
                                                            
                                                            <div class="row">
                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                                    <label>New Password</label>
                                                                    <input type="password" name="password" class="form-control" placeholder="New password" required >
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                                    <label>Confirm Password</label>
                                                                    <input type="password" name="password" class="form-control" placeholder="Confirm password" required>
                                                                </div>
                                                            </div>

                                                            <div class="row"><!-- starts row -->

                                                                <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                                                                    <button type="submit" class="btn btn-danger">Update Password</button>
                                                                </div>
                                                            </div><!-- ends row -->
                                                        </form>
                                                </div>
                                            </div>

                                        </div>
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
                                        <li><a href="">Student Profile</a></li>
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
    