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
            
            <div class="two-colume-box-area">
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-9 col-md-9 col-lg-push-3 col-md-push-3"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                                
                                <h1 class="page-title"><?php $data=explode("_",$title); echo $data[0].' '.$data[1];?></h1>
                            <div class="col-lg-12 col-md-12">
                             <div class="table-responsive"> 
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr class="alert-default">
                                                <th>SL NO.</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Download</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                    <tbody>
									<?php 
									$nr=1;
									foreach($qy as $row):
									?>
                                        <tr>
                                            <td><?php echo $nr++?></td>
                                            <td> <?php echo $row->title?></td>
                                            <td><?php echo date('d M Y',strtotime($row->entry_date))?></td>
                                            <td><a href="main/download_file/<?php echo $row->file_name?>/<?php echo $title?>"><span class="label label-danger">Download</span></a></td>
                                            <td><a href="main/content_details/<?php echo $row->file_name?>/<?php echo $title?>"><span class="label label-danger">View</span></a></td>
                                        </tr>
										<?php endforeach;?>
                                </tbody>
                            </table>
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
                                    <h1 class="title-widget s-h1">Academic</h1>
                                    <ul>
                                        <li><a href="">Admission Information</a></li>
                                        <li><a href="">Teacher Information</a></li>
                                        <li><a href="">Stuff Information</a></li>
                                        <li><a href="">Student Information</a></li>
                                        <li><a href="">Blood Search</a></li>
                                        <li><a href="">Photo Gallery</a></li>
                                    </ul>
                    
							</li>
                        	
                        </ul>
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- sidebar wrapper end -->
            
            </div><!-- row end -->
            </div>
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    