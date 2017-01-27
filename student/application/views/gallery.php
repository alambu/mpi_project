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
            
            <div class="row no-gutter fullwidth"><!-- row -->
                
                <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->
                	
                    <div class="content-panel-box col-padded"><!-- inner custom column -->
                        
                        <h1 class="page-title">Gallery</h1>
                        
                        <div class="news-body">
                            
                            <div class="row gutter k-equal-height"><!-- row -->
     
                            <?php $result=$this->db->get("gallery")->result();
							foreach($result as $row):
							?>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <article class="entry">
                                        <a href="uploads/gallery/<?php echo $row->image?>" data-fancybox-group="gallery-bssb" class="fancybox">
                                            <img src="uploads/gallery/<?php echo $row->image?>" class="img-responsive" alt="">
                                            <span class="magnifier"></span>
                                        </a>
                                    </article>    
									<div class="caption"><?php echo $row->title?></div>
                                </div>
                          <?php endforeach;?>
                            
                            </div><!-- row end -->
                            
                        </div>
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    