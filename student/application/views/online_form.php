<!DOCTYPE html>
<html>
<head>
    <title>Online Admission Form</title>
	<link rel="shortcut icon" href="assets/images/icstlogo.png">
	<base href="<?php echo base_url();?>"/>
    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!---<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->
    <link rel="stylesheet" href="validation/css/bootstrap.css"/>
    <link rel="stylesheet" href="validation/css/formValidation.css"/>

    <script type="text/javascript" src="validation/js/jquery.min.js"></script>
    <script type="text/javascript" src="validation/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="validation/js/formValidation.js"></script>
    <script type="text/javascript" src="validation/js/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-offset-0">
                <div class="page-header">
                    <h2>Online Admission Form</h2>
                </div>
                <form id="defaultForm" method="post" class="form-horizontal" action="target.php">
				 <div class="form-group">
							<label class="control-label col-sm-2" for="email">Department <span style="color:red;">*</span></label>
							<div class="col-sm-4">
							 <select name="country" id="" class="form-control">
							 <?php 
							 $select=$this->db->order_by('id','DESC')->get("mpi_session")->result();
							 ?>
								<option value="">--select---</option>
								<option value=""></option>
								
							</select>
							</div>
							<label class="control-label col-sm-2" for="email">Session <span style="color:red;">*</span></label>
							<div class="col-sm-4">
							  <input type="text" class="form-control" name="session_year" placeholder="Session Year" />
							</div>
				  </div>
						  
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Full Name <span style="color:red;">*</span></label>
					<div class="col-sm-4">
					  <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter Full Name" value="" >
					</div>
					
					
					
					
				</div>
				
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Upload Picture</label>
								<div class="col-sm-4">
								 <input type="file" class="form-control" accept="image/jpeg, image/jpg, image/png" name="upload_pic" placeholder="Upload Picture" />
								</div>
								<label class="control-label col-sm-2" for="email">Upload Signature <span style="color:red;">*</span></label>
							<div class="col-sm-4">
								 <input type="file" class="form-control" accept="image/jpeg, image/jpg, image/png" name="upload_pic" placeholder="Upload Signature" />
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="religion">Mobile <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								 <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" />
								  </select>
								</div>
								
								<label class="control-label col-sm-2" for="email">Email Address</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="email" placeholder="First name" />
								</div>
							</div>
							
							<div class="form-group">
							
								<label class="control-label col-sm-2" for="email" >Gender <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								 <label class="radio-inline">
                                    <input type="radio" name="gender" value="male" /> Male
                                </label>
   
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="female" /> Female
                                </label>
								</div>
								
								<label class="control-label col-sm-2" for="pob">Date Of Birth <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								  <input type="text" name="dofb"  class="form-control"/>	
								</div>
								
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-2">Nationality</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="nationality"/>
								</div>
								
								<label class="control-label col-sm-2">Religion</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="religion" value=""/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Father</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="father"/>
								</div>
								
								<label class="control-label col-sm-2">Mother</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="mother" value=""/>
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Present address <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								 <textarea class="form-control" name="pre_adr" id="pre_address" rows="5" style="resize:none;" ></textarea>
								</div>
								<label class="control-label col-sm-2" for="email">Permanent address <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								   <textarea class="form-control" name="per_adr" id="par_address" rows="5" style="resize:none;" ></textarea>
								</div>
							</div>

						<div class="form-group">
								<label class="control-label col-sm-2" for="religion">Name <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								 <input type="text" class="form-control" name="g_name" placeholder="Enter Name" />
								  </select>
								</div>
								
								<label class="control-label col-sm-2" for="email">Mobile</label>
								<div class="col-sm-4">
								  <input type="text" class="form-control" name="g_mobile" placeholder="Enter Mobile" />
								</div>
							</div>

							
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Email Address<span style="color:red;"></span></label>
								<div class="col-sm-4">
								<input type="text" class="form-control" name="g_email" placeholder="Enter Email Address" />
								</div>
								<label class="control-label col-sm-2" for="email">address <span style="color:red;">*</span></label>
								<div class="col-sm-4">
								   <textarea class="form-control" name="per_adr" id="par_address" rows="5" style="resize:none;" ></textarea>
								</div>
							</div>
										
                   <div class="form-group"> 	
						<div class="col-sm-2">
						<label>Exam Name</label>
							<select name="exam_name" id="" class="form-control">
										<option value="S.S.C">S.S.C</option>
										<option value="S.S.C(VOC)">S.S.C(VOC)</option>
										<option value="S.S.C(Dakhil)">S.S.C(Dakhil)</option>
										<option value="S.S.C(Open)">S.S.C(Open)</option>
										
							</select>
						</div>
						<div class="col-sm-2">
						 <label>Group</label>
							<select name="exam_group" id="" class="form-control">
										<option value="Arts">Arts</option>
										<option value="Commerce">Commerce</option>
										<option value="Science">Science</option>
							</select>
						</div>
                        <div class="col-sm-2">
						 <label>Institute Name</label>
                            <input type="text" class="form-control" name="institute" placeholder="Institute Name" />
                        </div>
                        <div class="col-sm-1">
						 <label>Roll No</label>
                            <input type="text" class="form-control" name="roll" placeholder="Roll" />
                        </div>
                        <div class="col-sm-1">
						 <label>Reg No</label>
                            <input type="text" class="form-control" name="reg" placeholder="Reg" />
                        </div>
                        <div class="col-sm-2">
						 <label>Passing Year</label>
                            <input type="text" class="form-control" name="passing_year" placeholder="Passing Year" />
                        </div>
                        <div class="col-sm-2">
						 <label>GPA</label>
                            <input type="text" class="form-control" name="gpa" placeholder="GPA" />
                        </div>
						
				</div>
				<div class="form-group">
                        <label class="col-sm-2 control-label" id="captchaOperation"></label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="captcha" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="agree" value="agree" /> I have promised that I will get the chance to be admitted to this institution and the Bangladesh Technical Education Board will abide by all the laws and institutions of this under any circumstances, for any violation of the law of Bangladesh Technical Education Board and will not be involved.
                                </label>
                            </div>
                        </div>
                    </div>
						  <div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-12">
							  <button type="submit" class="btn btn-primary" name="submit" id="submit">Apply</button> &nbsp;&nbsp;&nbsp;
							  <button type="reset" onclick="return confirm_reset();" class="btn btn-warning">Reset</button>
							</div>
						  </div>
						</form>
            </div>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is '
                    }
                }
            },
            lastName: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is '
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is '
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is '
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
			country: {
				validators: {
					notEmpty: {
						message: 'The country is  and can\'t be empty'
					}
				}
			},
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is '
                    },
					stringLength: {
						min: 8,
						max: 15,
						message: 'The Password must be more than 8 and less than 15 characters long'
					},
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
			confirmPassword: {
				validators: {
					notEmpty: {
						message: 'The Confirm Password is '
					},
					identical: {
						field: 'password',
						message: 'The password and its confirm are not the same'
					}
				}
			},
			'languages[]': {
                validators: {
                    choice: {
                        min: 1,
                        //max: 4,
                        message: 'Please choose %s - %s programming languages you are good at'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is '
                    }
                }
            },
			website: {
                validators: {
                    uri: {
                        message: 'The input is not a valid URL'
                    }
                }
            },
			ages: {
                validators: {
                    lessThan: {
                        value: 100,
                        inclusive: true,
                        message: 'The ages has to be less than 100'
                    },
                    greaterThan: {
                        value: 10,
                        inclusive: false,
                        message: 'The ages has to be greater than or equals to 10'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});
</script>
</body>
</html>