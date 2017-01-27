<div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel">
<!-- featured posts slider wrapper; auto-slide -->
  <?php
  $result=$this->db->select('*')->from('slider')->order_by('slider_sort','ASC')->get()->result();
 $total=count($result);
?>  
                        <ol class="carousel-indicators"><!-- Indicators -->
                            <li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-featured" data-slide-to="1"></li>
                            <li data-target="#carousel-featured" data-slide-to="2"></li>
                        </ol><!-- Indicators end -->
                    
                        <div class="carousel-inner"><!-- Wrapper for slides -->
                        <?php $nr=1; foreach($result as $row):
						if($nr==1): $active="active";else: $active="";endif;
						?>
                            <div class="item <?php echo $active?>">
                                <img src="uploads/<?php echo $row->image?>" alt="<?php echo $row->slider_title?>" width='100%'/>
                                <div class="k-carousel-caption pos-1-3-right scheme-dark">
                                	<div class="caption-content">
                                        <h3 class="caption-title"><?php echo $row->slider_title?></h3>
                                        <p>
                                        	<?php echo $row->slider_des?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                          <?php $nr++;endforeach;?>
                           
                        </div><!-- Wrapper for slides end -->
                    
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                        <!-- Controls end -->
                        
                    </div><!-- featured posts slider wrapper end -->