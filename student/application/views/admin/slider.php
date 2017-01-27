
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading clearfix">
                              <h3 class="pull-left text-left">Slider</h3>
                              <div class="text-right">
                                  <a href="admin/addslider" class="btn btn-info"><i class="fa  fa-plus-circle"></i> Add Slider</a>
                              </div>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                             <?php $sL = $this->db->order_by('slider_sort','ASC')->get('slider')->result(); ?>
                              <thead>
                              <tr>
                                  <th>Image</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>Sort</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($sL as $s): ?>
                              <tr>
                                  <td><img src="uploads/<?php echo $s->image; ?>" width="150" alt=""></td>
                                  <td ><?php echo $s->slider_title; ?></td>
                                  <td ><?php echo $s->slider_des; ?></td>
                                  <td><span class="label label-info label-mini"><?php echo $s->slider_sort; ?></span></td>
                                  <td>
                                      <a href="admin/editslider/<?php echo $s->id; ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                      <a href="admin/delete_slider/<?php echo $s->id; ?>" class="confirm btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                  </td>
                              </tr>
                              <?php endforeach; ?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
