<div id="k-body"><!-- content wrapper -->
   <?php $row=$this->db->get('about_us')->row();
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
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->
                	
                    <div class="about-icst col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                    
                                <figure class="news-featured-image">	
                                    <img src="uploads/<?php echo $row->photo?>" width="1050" height="350" alt="" class="img-responsive" />
                                </figure>
                                
                                <h1 class="page-title">About MPI</h1>
                                
                                <div class="news-body">
                                
                                    <p class="call-out">
                                    <?php echo $row->message?>
                                    </p>
                                    
                                </div>
                            
                            </div>
                        
                        </div><!-- row end -->
                        
                        <div class="row gutter k-equal-height"><!-- row -->
                        
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h6>Current Programs Offered:</h6>
                                    
                                    <div class="offers-cource">
                                        <ul class="list-unstyled clear-margins">
										<?php 
										$offers=explode(PHP_EOL,trim($row->programs));
										$student_enrollment=explode(PHP_EOL,trim($row->student_enrollment));
										$teacher_stuff=explode(PHP_EOL,trim($row->teacher_stuff));
										$student_housing=explode(PHP_EOL,trim($row->student_housing));
										for($i=0;$i<count($offers);$i++):
										?>
                                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> 
											<?php echo $offers[$i]?>
                                            </li>
                                           <?php endfor;?>
                                            <h6>Current Student Enrollment:</h6>
                                            <p class="call-out">
											<?php for($k=0;$k<count($student_enrollment);$k++):?>
											<?php echo $student_enrollment[$k]?><br/>
											<?php endfor;?>
                                           </p>
										   <h6>Number of Current Teacher &amp; Stuff:</h6>
                                            <p class="call-out">
											<?php for($j=0;$j<count($teacher_stuff);$j++):?>
											<?php echo $teacher_stuff[$j]?><br/>
											<?php endfor;?>
                                           </p>
                                            <h6>Student Housing</h6>
                                            <p class="call-out">
											<?php for($l=0;$l<count($teacher_stuff);$l++):?>
											<?php echo $student_housing[$l]?><br/>
											<?php endfor;?>
											</p>
                                            
                                        </ul>
                                    </div>
                            </div>
                        
                        </div><!-- row end -->           
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->