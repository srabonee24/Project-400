<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?=base_url()?>asset/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/style.css">
</head>
<body>

    <div class="main
	

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
						<?=$this->session->flashdata('message');?>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" class="form-control input-lg" value="<?=set_value('name')?>" name="name" placeholder="Enter your name">
                               </div>
		                    <div class="error"><?=form_error('name')?></div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" class="form-control input-lg" name="email" value="<?=set_value('email')?>"  placeholder="Enter your email address" >
                                 </div>
		                         <div class="error"><?=form_error('email')?></div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" class="form-control input-lg" name="address" value="<?=set_value('address')?>" placeholder="Address" >
                                 </div>
		                       <div class="error"><?=form_error('address')?></div>
			                  
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <div class="form-group">
                              <input type="text" class="form-control input-lg" name="gender" value="<?=set_value('gender')?>"  placeholder="Gender">
                                </div>
		                        <div class="error"><?=form_error('gender')?></div>
								<div class="form-group">
								 <input type="date" class="form-control input-lg" name="date_birth" value="<?=set_value('date_birth')?>"  placeholder="Date_birth">
                                  </div>
	                            	<div class="error"><?=form_error('date_birth')?></div>
									<div class="form-group">
                                <input type="text" class="form-control input-lg" name="blood_group" value="<?=set_value('blood_group')?>"  placeholder="Blood_group">
                                </div>
	                         	<div class="error"><?=form_error('blood_group')?></div>
											
		                          <div class="form-group">
                                    <input type="text" class="form-control input-lg" name="fathers_name" value="<?=set_value('fathers_name')?>"  placeholder="Father name">
                                       </div>
		                            <div class="error"><?=form_error('fathers_name')?></div>
		                           <div class="form-group">
                                   <input type="text" class="form-control input-lg" name="mother_name" value="<?=set_value('mother_name')?>"  placeholder="Mother name">
                                         </div>
		                                     <div class="error"><?=form_error('mother_name')?></div>
		                                     <div class="form-group">
                                      <input type="text" class="form-control input-lg" name="mobile" value="<?=set_value('mobile')?>"  placeholder="Mobile">
                                            </div>
		                                 <div class="error"><?=form_error('mobile')?></div>
										 
	                                    <div class="form-group">

		                                <input type="password" class="form-control" placeholder="Enter password" value="<?=set_value('password')?>"  name="password"   >

	                                      </div>

		                                <div class="error"><?=form_error('password')?></div>


	                                     <div class="error"><?=form_error('password')?></div>


			                                <div class="form-group">

		                                 <input type="password" class="form-control" placeholder="Enter Confirm password" value="<?=set_value('c_password')?>"  name="c_password"   >

	                                       </div>

		                                  <div class="error"><?=form_error('c_password')?></div>




									
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                                    <div class="signup-image">
                                    <figure><img src="<?=base_url()?>asset/images/signup-image.jpg" alt="signup image"></figure>
                        <a href="<?=base_url()?>login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


  
    <script src="<?=base_url()?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>asset/js/main.js"></script>
</body>
</html>