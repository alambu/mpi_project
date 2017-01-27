
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">News</h3>
                              <div class="text-right">
                                    <a href="admin/new_news" class="btn btn-info"><i class="fa  fa-plus-circle"></i> Add News</a>
                              </div>
                          </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-striped dataTable">
                                      <thead>
                                          <tr>
                                              <th>SL.</th>
                                              <th>Title</th>
                                              <th>Description</th>
                                              <th>Date</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
									  <?php 
									 $nr=1;
									 foreach($row as $info):  
									  ?>
                                      <tr>
                                          <td><?php echo $nr++?></td>    
                                          <td><?php echo $info->title?></td>     
                                          <td><?php echo $info->des?></td>     
										   <td><?php echo date('d/m/Y',strtotime($info->news_date))?></td>  
										   <td><?php echo ($info->status==1)? 'Published' : 'Unpublished'; ?></td>    
                                        <td>
                                              <a href='admin/editNews/<?php echo $info->id?>' class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                              <a href='admin/delete_news/<?php echo $info->id?>' onclick="confirm('Are your want to Delete?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                          </td>
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
