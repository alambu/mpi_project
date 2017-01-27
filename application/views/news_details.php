<div id="k-body"><!-- content wrapper -->
    <?php 
$id=$this->uri->segment(3);	
$where=array(
'status'=>1,
'id'=>$id
);	
$news=$this->db->where($where)->order_by('id','DESC')->limit(1)->get('news')->row();
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
                    
                                
                                <h1 class="page-title"><?php echo $news->title?></h1>
                                
                                <div class="news-body">
                                
                                    <p class="call-out">
                                   <?php echo $news->des?>
                                    </p>
                                    
                                </div>
                            
                            </div>
                        
                        </div><!-- row end -->
                                 
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->