
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
                <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3>Update Student Information</h3>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form id="fromvalid" action="admin/" class="" method="post" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label class="">Full Name</label>
                                              <input class="form-control" name="name" placeholder="Full Name" type="text" data-bv-notempty="true" data-bv-notempty-message="Full Name Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Father Name</label>
                                              <input class="form-control" name="fname" placeholder="Father Name" type="text" data-bv-notempty="true" data-bv-notempty-message="Father Name Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Mother Name</label>
                                              <input class="form-control" name="mname" placeholder="Mother Name" type="text" data-bv-notempty="true" data-bv-notempty-message="Mother Name Required">
                                      </div>
                                       <div class="padding-zero col-md-12">
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Roll No.</label>
                                                <input class="form-control" name="roll" placeholder="Roll No" type="text" data-bv-notempty="true" data-bv-notempty-message="Roll is Required">

                                          </div>
                                         <div class="form-group p-left0 col-sm-4 ">
                                                <label class="">Reg No.</label>
                                                <input class="form-control" name="reg" placeholder="Registration No" type="text" data-bv-notempty="true" data-bv-notempty-message="Registration is Required">

                                          </div>
                                           <div class="form-group p-left0 col-sm-4">
                                              <label class="">Department</label>
                                                <select name="department" class="form-control" placeholder="Department" data-bv-notempty="true" data-bv-field="Department is required">
                                                    <option value="">-Select-</option>
                                                    <option value="">Civil Technology</option>
                                                    <option value="">Architecture Technology</option>
                                                    <option value="">Computer Technology</option>
                                                    <option value="">Telecommunication Technology</option>
                                                    <option value="">Electrical Technology</option>
                                                    <option value="">Electronics Technology</option>
                                                    <option value="">HSC(Business Management)</option>
                                                </select>
                                           </div>
                                      </div>
                                       <div class="padding-zero col-md-12">
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Session</label>
                                                    <select name="session" class="form-control" placeholder="Session" data-bv-notempty="true" data-bv-field="Session is required">
                                                        <option value="">-Select-</option>
                                                        <option value="">09-10</option>
                                                        <option value="">10-11</option>
                                                        <option value="">11-12</option>
                                                        <option value="">12-13</option>
                                                        <option value="">13-14</option>
                                                        <option value="">14-15</option>
                                                        <option value="">15-16</option>
                                                        <option value="">16-17</option>
                                                        <option value="">17-18</option>
                                                        <option value="">18-19</option>
                                                        <option value="">19-20</option>
                                                        <option value="">20-21</option>
                                                        <option value="">21-22</option>
                                                    </select>

                                          </div>
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Semester</label>
                                                    <select name="semester" class="form-control" placeholder="Semester" data-bv-notempty="true" data-bv-field="Semester is required">
                                                        <option value="">-Select-</option>
                                                        <option value="">First Semester</option>
                                                        <option value="">Second Semester</option>
                                                        <option value="">Thrid Semester</option>
                                                        <option value="">Four Semester</option>
                                                        <option value="">Five Semester</option>
                                                        <option value="">Six Semester</option>
                                                        <option value="">Seventh Semester</option>
                                                        <option value="">Eight Semester</option>
                                                    </select>

                                          </div>
                                         <div class="form-group p-left0 col-sm-4 ">
                                                  <label class="">Blood Group</label>
                                                    <select name="bgroup" class="form-control" placeholder="Blood Group" data-bv-notempty="true" data-bv-field="Blood Group is required">
                                                        <option value="">-Select-</option>
                                                        <option value="">A+</option>
                                                        <option value="">A-</option>
                                                        <option value="">B+</option>
                                                        <option value="">B-</option>
                                                        <option value="">O+</option>
                                                        <option value="">O-</option>
                                                        <option value="">AB+</option>
                                                        <option value="">AB-</option>
                                                    </select>

                                          </div>
                                      </div>
                                      <div class="padding-zero col-md-12">
                                          <div class="form-group p-left0 col-sm-6 ">
                                              <label class="">Date of Birth</label>
                                                <input class="form-control default-date-picker" name="datebirth" placeholder="dd/mm/yy" type="text" data-bv-notempty="true" data-bv-notempty-message="Datebirth is Required">
                                          </div>
                                          <div class="form-group p-left0 col-sm-6 ">
                                              <label class="">Sex</label>
                                                <select name="sex" class="form-control" placeholder="Sex" data-bv-notempty="true" data-bv-field="sex is required">
                                                    <option value="">-Select-</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                          </div>
                                       </div>
                                      <div class="form-group ">
                                          <label class="">Email </label>
                                              <input class="form-control" name="email " placeholder="Email Address" type="email" data-bv-notempty="true" data-bv-notempty-message="Email is Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Mobile No. </label>
                                              <input class="form-control" name="mobile " placeholder="Mobile No" type="text" data-bv-notempty="true" data-bv-notempty-message="Mobile no is Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">National ID No. </label>
                                              <input class="form-control" name="nid " placeholder="National ID" type="text" data-bv-notempty="true" data-bv-notempty-message="National id is Required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Present Address</label>
                                             <textarea class="form-control" name="address" id="" cols="30" rows="2" placeholder="Present Address here" data-bv-notempty="true" data-bv-notempty-message="Present Address Required"></textarea>
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Parmanent Address</label>
                                             <textarea class="form-control" name="address" id="" cols="30" rows="2" placeholder="Parmanent Address here" data-bv-notempty="true" data-bv-notempty-message="Parmanent Address Required"></textarea>
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Passing Year</label>
                                              <input class="form-control" name="passing" placeholder="Passing year" type="text" data-bv-notempty="true" data-bv-notempty-message="required">
                                      </div>
                                      <div class="form-group ">
                                          <label class="">Shift</label>
                                              <input class="form-control" name="shift" placeholder="shift" type="text" data-bv-notempty="true" data-bv-notempty-message="required">
                                      </div>

                                        <div class="form-group">
                                              <label>Student Image</label>
                                              <img src="http://placehold.it/200x220" id="blah" width="200" height="220" class="img-responsive"><br>
                                              <input type="file" name="image" data-bv-notempty="true" data-bv-notempty-message="Student Image is required">
                                              <p class="help-block">Image Size 200px width 220px height</p>
                                          </div>
                                          <br>
                                      <div class="form-group">
                                          <div class="col-lg-offset-4 col-lg-4">
                                              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
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
