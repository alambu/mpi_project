 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="admin">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <?php $role=$this->session->userdata('role'); if($role=='admin'):?>
                  <li>
                      <a href="admin/slider">
                          <i class="fa fa-film" aria-hidden="true"></i>
                          <span>Slider</span>
                      </a>
                  </li>
                  <li>
                      <a href="admin/teacher">
                          <i class="fa fa-user" aria-hidden="true"></i>
                          <span>Teacher</span>
                      </a>
                  </li>
				   <li class="sub-menu">
                      <a href="javascript:void(0)">
                          <i class="fa fa-info" aria-hidden="true"></i>
                          <span>Message</span>
                      </a>
					   <ul class="sub">
                          <li><a  href="admin/principale_msg?type=1">Principale Message</a></li> 
                          <li><a  href="admin/principale_msg?type=2">Controller Message</a></li> 
                          <li><a  href="admin/principale_msg?type=3">Director Message</a></li>       
                      </ul>
                  </li>
				   <li>
                      <a href="admin/news">
                          <i class="fa fa-info" aria-hidden="true"></i>
                          <span>News</span>
                      </a>
				  </li>
				  <li>
                      <a href="admin/extra_activities">
                          <i class="fa fa-info" aria-hidden="true"></i>
                          <span>Extra Activities</span>
                      </a>
				  </li>
                		  
           <li class="sub-menu">
                      <a href="javascript:void(0);">
                          <i class="fa fa-folder-open" aria-hidden="true"></i>
                          <span>Academics</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="admin/about_us">About Us</a></li>
                          <li><a  href="admin/department_message">Department Message</a></li>
                          <li><a  href="admin/admission_details">Admission</a></li>   
                          <li><a  href="admin/sub_manage">Subject Management</a></li>
                          <li><a  href="admin/manage_session">Session Management</a></li>
                          <li><a  href="admin/subject_offer">Subject Offer</a></li>
                        <!--  <li><a  href="admin/subject_offer_list">Offered Subjects</a></li>-->
                          <li><a  href="admin/sylabus">Sylabus</a></li>
                          <li><a  href="admin/add_routine">Class Routine</a></li>
                          <li><a  href="admin/add_calander">Calender</a></li>
                      </ul>
                  </li>
				  
			<?php endif; if($role=='accounts' || $role=='admin'):?>
				   <li class="sub-menu">
                      <a href="javascript:void(0);">
                          <i class="fa fa-users" aria-hidden="true"></i>
                          <span><?php echo ($role=='accounts' ? 'Accounts':'Student');?> Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="admin/student">Student Information</a></li>
                          <li><a  href="admin/online_student">Online Apply</a></li>
                          <li><a  href="admin/student_bil_info">Student Bill Setup</a></li>
                          <li><a  href="admin/student_bill_collection" target='_blank'>Student Bill Collection</a></li>
                          <li><a  href="admin/daily_reports" target="_blank">Daily Collection Reports</a></li>
                        
                      </ul>
                  </li>
				    <li class="sub-menu">
                      <a href="javascript:void(0);">
                          <i class="fa fa-users" aria-hidden="true"></i>
                          <span> Reports Management</span>
                      </a>
                      <ul class="sub">
                       <li><a  href="admin/daily_reports" target="_blank">Daily Collection Reports</a></li>
                       <li><a  href="admin/daily_reports_custom" target="_blank">Custom Reports Reports</a></li>
					    <li><a  href="admin/student_bil_info">Student Bill Statements</a></li>
                      </ul>
                  </li>
				    
					<li class="sub-menu">
                      <a href="javascript:void(0);">
                          <i class="fa fa-users" aria-hidden="true"></i>
                          <span>ALL Money Receipt</span>
                      </a>
                      <ul class="sub">
                       <li><a  href="admin/all_moneyReceipt" target="_blank">Show All Money Receipt</a></li>
                       
                      </ul>
                  </li>
				    
					
					
				  <?php endif;if($role=='admin'):?>
                  <li>
                      <a href="admin/gallery">
                          <i class="fa fa-picture-o" aria-hidden="true"></i>
                          <span>Gallery</span>
                      </a>
                  </li>
                  <li>
                      <a href="admin/notice">
                          <i class="fa fa-file-text" aria-hidden="true"></i>
                          <span>Notice</span>
                      </a>
                  </li>
	  
                  
				   <li class="sub-menu">
                      <a href="javascript:void(0);">
                          <i class="fa fa-folder-open" aria-hidden="true"></i>
                          <span>Result Management</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="admin/institute_result">Institute Result</a></li>
                          <li><a  href="admin/board_results">Board Result</a></li>
                      </ul>
                  </li>
				
				  
                 
				<?php endif;?>
		<?php if($role=='accounts' || $role=='admin'):?>		
 <li class="sub-menu">
                      <a href="javascript:void(0);">
                          <i class="fa fa-cogs" aria-hidden="true"></i>
                          <span>Settings</span>
                      </a>
					   <ul class="sub">
                          <li><a  href="admin/settings">Change Password</a></li>
                        
                          
    
                      </ul>
                  </li>
				  <?php endif; ?>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->