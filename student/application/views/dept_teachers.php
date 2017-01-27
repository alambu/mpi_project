<link href="css/teacher.css" rel="stylesheet" type="text/css" />
<style type="text/css">
strong
{
text-align:right;
font-weight:bold;
color:black;
}

</style>
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
                	
                    <div class="content-panel-box col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
 
                               <div class="row">
                                  <div id="otherpage_body_middle" style="padding:0px; border:none; width:100%">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
    <td valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<div id="emp_info"><?php echo $title?> Teacher Information</div>
      <tr>
        <td align="left" valign="top" class="bginner" ><table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="250" align="left" valign="top">
				<?php
				$i=0;
				foreach($info as $row):
				
				?>
                	<div class="box" style="height:250px;margin-bottom:1em;"><img src="<?php echo $row->picture?>" alt="" width="150" height="180" />
					
					 <ul>
                            <li><strong>Teacher Name  :</strong><span><?php echo $row->name?> </span></li>
                             <li><strong>Mobile  :</strong><span><?php echo $row->mobile?> </span></li>
                              <li><strong>Email  :</strong><span><?php echo $row->email?> </span></li>
                            <li><strong>  Desgination :</strong> <span><?php echo $row->desig?> </span></li>  
                            <li><strong>   Department :</strong> <span><?php echo $row->deppt?> </span></li>
                            <li><strong> Qualification : </strong> <span><?php echo $row->quali?> </span></li>
                           
                      </ul>
     
					</div>
					<?php
					$i++;
					if($i%2==0){echo "<hr style='padding:3px;border:1px solid #F6F6F6;'/>";}
					endforeach;
					?>
				</td>
              </tr>
	
                </table></td>
              </tr>
				</table></td>
          </tr>
		  
        </table><br><br>
		<br class="clear"/><div class="pagination">
		<span class="disabled"></span>
		
		</div>
	</td>
      </tr>
	  
      </table>
	</td>
  </tr>
            
  </div>
                                   
                               </div>
                                
                            
                            </div>
                        
                        </div><!-- row end -->          
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->