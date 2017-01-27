<script>
function subject_list(id){
	 //alert(cusId);
	$.ajax({
		url:"index.php/admin/subject_list",
		data:{dept_id:id},
		type:"POST",
		success:function(hr){
  document.getElementById('body_content').innerHTML=hr;				
		}
	});
	
}


  
</script>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Subject Offer Information</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/subject_offer_sub" class="" method="post" enctype="multipart/form-data">
                                
                                           <div class="form-group">
                                              <label class="">Session</label>
                                                    <select name="session" class="form-control" placeholder="Session" data-bv-notempty="true" data-bv-field="Session is required">
                                                        <option value="">-Select-</option>
                                                       <?php $session=$this->lib->getSession();
													   foreach($session as $sess):
													   ?>
													    <option value="<?php echo $sess->id?>"><?php echo $sess->title?></option>
													   <?php endforeach;?>
                                                    </select>
                                           </div>
										   
										   <div class="form-group">
                                              <label class="">Department</label>
                                               <?php $dP = $this->db->get('department')->result(); ?>
                                                <select name="dept_id" class="form-control" placeholder="Department" data-bv-notempty="true" data-bv-notempty-message="Department is required" onchange="subject_list(this.value)">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $dP as $d): ?>
                                                    <option value="<?php echo $d->id; ?>"><?php echo $d->dept_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                           </div>
										   
										   <div class="form-group">
                                              <label class="">Semester</label>
                                                <?php $sP = $this->db->get('semester')->result(); ?>
                                                <select name="semester_id" class="form-control" placeholder="Semester" data-bv-notempty="true" data-bv-field="Semester is required">
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $sP as $s): ?>
                                                    <option value="<?php echo $s->id; ?>"><?php echo $s->semester_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                           </div>
										 <div class="adv-table">
                           <table class="display table table-striped">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>          
                                          <th>Subject Name</th>
                                          <th>Subject Code</th>
                                      </tr>
                                      </thead>
                                      
                                      <tbody id="body_content">
                                     
                                </tbody>
                          </table>
                                </div>  
									 <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-4">
                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Offer</button>
                                              <button class="btn btn-danger" type="reset"><i class="fa  fa-refresh"></i> Cancel</button>
                                          </div>
                                      </div>	  
                                       
                                  </form>
								  
								  
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
