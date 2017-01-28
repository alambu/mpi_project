<!--main content start-->
<?php
$input=$this->input->post(null);
extract($input);
?>
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                        <h3 class="pull-left text-left">Update Institute Result</h3>
                         <div class="form">
						 <form action="" method="post">
						  <div class="padding-zero col-md-12">
						    <div class="form-group p-left0 col-sm-4 ">
								  <label class="">Session</label>
									<select name="session" id="session" class="form-control" placeholder="Session" data-bv-notempty="true" data-bv-field="Session is required">
										<option value="">-Select-</option>
									   <?php $session_data=$this->lib->getSession();
									   foreach($session_data as $sess):
									   ?>
										<option value="<?php echo $sess->id?>" <?php if($sess->id==$session): echo "SELECTED";endif;?>><?php echo $sess->title?></option>
									   <?php endforeach;?>
									</select>

                                  </div>
								   <div class="form-group p-left0 col-sm-4">
                                              <label class="">Department</label>
                                               <?php $dP = $this->db->get('department')->result(); ?>
                                                <select name="dept_id" class="form-control" onchange="window.location='admin/institute_result_update/'+this.value+'/'+session.value" required >
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $dP as $d): ?>
                                                    <option value="<?php echo $d->id; ?>" <?php if($d->id==$dept_id): echo "SELECTED";endif;?>><?php echo $d->dept_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
												
                                </div>
							
								<div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Semester</label>
                                                <?php $sP = $this->db->get('semester')->result(); ?>
                                                <select name="semester_id" class="form-control" placeholder="Semester" data-bv-notempty="true" data-bv-field="Semester is required" >
                                                    <option value="">-Select-</option>
                                                    <?php foreach ( $sP as $s): ?>
                                                    <option value="<?php echo $s->id; ?>" <?php if($s->id==$input['semester_id']): echo "SELECTED";endif;?>><?php echo $s->semester_name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                              </div> 
						   
						   <div class="form-group p-left0 col-sm-4 ">
                                  <label class="">Subject</label>    
								<select name="subject_id" class="form-control" >
									<option value="">-Select-</option>
									<?php foreach ( $sb as $s): ?>
									<option value="<?php echo $s->id; ?>" <?php if($s->id==$input['subject_id']): echo "SELECTED";endif;?>><?php echo $s->subject_name ?>&nbsp;[ <?php echo $s->subject_code?> ]</option>
									<?php endforeach; ?>
								</select>

                              </div> 
						     <div class="form-group p-left0 col-sm-4 ">
								  <label class="">Subject Credit</label>
								<input type="text" name="sub_credit" class="form-control" value="<?php echo $sub_credit?>"/>

                              </div> 
								
								 <div class="form-group p-left0 col-sm-4">
								 <br/>
                                            <button type="submit" class="btn btn-info">
								<span class="glyphicon glyphicon-search"></span> Search
								</button>
												 <button type="button" onClick="history.go(0)" class="btn btn-primary">
								<span class="glyphicon glyphicon-refresh"></span> Refresh
								</button>
												
                                </div>
								</div>
							</form>	
						 </div>
                          </header>
           <div class="panel-body">
                  <div class="adv-table">
                       <form action="admin/result_published_update" method="post">
							
									<table class="display table table-striped">
                                      <thead>
                                      <tr>
                                          <th>Nr.</th>
                                          <th>Name</th>
                                          <th>Roll No</th>
                                          <th>Reg. No</th>    
                                          <th>Grade Point</th>    
                                          <th>Grade</th>    
                                      </tr>
                                      </thead>
                                      <tbody>
									
                                      <?php 
									  $nr=1;foreach($row as $r): 
									
									  ?>
                                          <tr>
                                              
                                              <td><?php echo $nr++; ?></td>
                                              <td><?php //echo $r->name;?></td>
                                              <td><?php echo $r->roll_no;?></td>
                                              <td><?php echo $r->reg_no;?></td>
                                              <td><input type='text' name='grade_point[]' value="<?php echo $r->grade_point?>"/></td>
                                              <td>
											   <select name='grade[]' class="form-control" requred>
											      <option value=''>--select--</option>
												  <option value='A+' <?php echo ($r->grade=='A+') ? 'SELECTED':'';?>>A+</option>
												  <option value='A' <?php echo ($r->grade=='A') ? 'SELECTED':'';?>>A</option>
												  <option value='A-' <?php echo ($r->grade=='A-') ? 'SELECTED':'';?>>A-</option>
												  <option value='B+' <?php echo ($r->grade=='B+') ? 'SELECTED':'';?>>B+</option>
												  <option value='B' <?php echo ($r->grade=='B') ? 'SELECTED':'';?>>B</option>
												  <option value='B-' <?php echo ($r->grade=='B-') ? 'SELECTED':'';?>>B-</option>
												  <option value='C+' <?php echo ($r->grade=='C+') ? 'SELECTED':'';?>>C+</option>
												  <option value='C' <?php echo ($r->grade=='C') ? 'SELECTED':'';?>>C</option>
												  <option value='D' <?php echo ($r->grade=='D') ? 'SELECTED':'';?>>D</option>
												  <option value='F' <?php echo ($r->grade=='F') ? 'SELECTED':'';?>>F</option>
											   </select>
											  </td>
                                              <input type="hidden" name="id[]" value="<?php echo $r->id?>"/>
                                                
	  
                                          </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                          </table>
						   <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-4">
                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update</button>
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
	  
	 

	   