<?php
/**
Template Name: Register
*/
get_header();
global $wpdb; 
$tbl_name = $wpdb->prefix.'register'; 
?>

<?php
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $input = array();
  $input['name'] = $name;
  $input['email'] = $email;
  $input['password'] = $password;
  $input['contact'] = $contact;
  $input['address'] = $address;
  $wpdb->insert( $tbl_name, $input);
  $url= get_site_url() . '/' . 'profile';
  echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
?>

<!--breadcrumb start-->
<div class="breadcrumb-wrapper">
  <div class="container">
      <h1>Register</h1>
  </div>
</div>
<!--end breadcrumb-->

<div class="space-60"></div>

<div class="container">
  <div class="row">

    <div class="col-md-6">
        <div class="sky-form-login">
            <form action="" id="sky-form" class="sky-form" method="post">
              <h3 class="text-left">
                <i class="fa fa-user"></i>Create new account with SaleNepal</h3>
                <fieldset>         
                  <section>
                    <label class="input">
                      <i class="icon-append fa fa-user"></i>
                      <input type="text" id="name" name="username" placeholder="Enter Your Full Name">
                      <b class="tooltip tooltip-bottom-right">Enter Username</b>
                    </label>
                  </section>
                  <section>
                    <label class="input">
                      <i class="icon-append fa fa-envelope-o"></i>
                      <input type="text" id="email" name="email" placeholder="Enter Your E-mail Address">
                      <b class="tooltip tooltip-bottom-right">Enter valid email address</b>
                    </label>
                  </section>
                  <section>
                    <label class="input">
                      <i class="icon-append fa fa-lock"></i>
                      <input type="password" id="pwd" name="password" placeholder="Enter password">
                      <b class="tooltip tooltip-bottom-right">Password</b>
                    </label>
                  </section>
                  <section>
                    <label class="input">
                      <i class="icon-append fa fa-mobile"></i>
                      <input type="text" id="contact" name="contact" placeholder="Enter Your Mobile Number">
                      <b class="tooltip tooltip-bottom-right">Contact</b>
                    </label>
                  </section>
                  <section>
                    <label class="input">
                      <i class="icon-append fa fa-location-arrow"></i>
                      <input type="text" id="address" name="address" placeholder="Enter Your Permanent Address">
                      <b class="tooltip tooltip-bottom-right">Address</b>
                    </label>
                  </section>
                </fieldset>
                <footer>
                  <button type="submit" name="SubmitButton" class="form-control input-lg btn btn-block btn-primary">Register</button>
                </footer>
            </form>     
        </div><!--End sky form-->
    </div><!--col-md-6 end-->
      
    <div class="col-md-6">
      <div class="login-register-aside-box">
        <h3>Already have an account?</h3>
          <br>
          <a href="<?php echo get_site_url() . '/' . 'login' ?>" class="btn btn-light-dark btn-lg">Login Now</a>
      </div><!--End login-register-aside-box-->
    </div><!--End col-md-6-->

  </div><!--End row-->
</div><!--end container-->

<?php   get_footer();   ?>
