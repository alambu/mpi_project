
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Expense Categories</h3>
                              <div class="text-right">
                                    <a href="admin/manage_expenses" class="btn btn-info"><i class="fa  fa-plus-circle"></i> Add New Expense</a>
                              </div>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable">
                                      <thead>
                                          <tr>
                                              <th>SL.</th>
                                              <th>Title</th>
                                              <th>Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
									  <?php 
									  $nr=1;
									  $row=$this->db->get("expense_ctg")->result();
									 foreach($row as $info):  
									  ?>
                                      <tr>
                                          <td><?php echo $nr++?></td>    
                                          <td><?php echo $info->title?></td>      
										   <td><?php echo date('d/m/Y',strtotime($info->entry_date))?></td>     
 
                                      </tr>
									  <?php endforeach;?>
                                    </tbody>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
