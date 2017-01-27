<div class=" col-md-8">
<?php
$where1=array(
 'type'=>'1'
);
$where2=array(
 'type'=>'2'
);
$where3=array(
 'type'=>'3'
);

$principal=$this->db->where($where1)->get("principale_message")->row();
$controller=$this->db->where($where2)->get("principale_message")->row();
$director=$this->db->where($where3)->get("principale_message")->row();

?>
                           <div class="p-msg-box">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Principal Message</div>
                                          <div class="panel-body">
                                               <div class="p-img">
                                                   <img src="assets/images/<?php echo $principal->image?>" class="thumbnail" alt="" <img style="width: 175px; height: 150px;float: left; border: 1px solid #EDEDED; padding: 5px; margin: -3px 10px 0px 0px;">
                                               </div>

                                                <div class="p-message">
                                                    <p><?php echo $principal->msg?></p>
                                                    
                                                </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
							
							<?php $this->load->view('latest_news');?>
							
							<div class=" col-md-8" style="top:-100px;position:relative;">
                           <div class="p-msg-box">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Director Message</div>
                                          <div class="panel-body">
                                               <div class="p-img">
                                                   <img src="assets/images/<?php echo $director->image?>" class="thumbnail" alt="" <img style="width: 175px; height: 150px;float: left; border: 1px solid #EDEDED; padding: 5px; margin: -3px 10px 0px 0px;">
                                               </div>

                                                <div class="p-message">
                                                    <p><?php echo $director->msg?></p>
                                                    
                                                </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-4">
						 <?php $this->load->view('rightbar');?>
						
					</div>
							<div class=" col-md-8" style="top:-100px;position:relative;">
                           <div class="p-msg-box">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Controller Message</div>
                                          <div class="panel-body">
                                               <div class="p-img">
                                                    <img src="assets/images/<?php echo $controller->image?>" class="thumbnail" alt="" <img style="width: 175px; height: 150px;float: left; border: 1px solid #EDEDED; padding: 5px; margin: -3px 10px 0px 0px;">
                                               </div>

                                                <div class="p-message">
                                                    <p><?php echo $controller->msg?></p>
                                                    
                                                </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
							
                      