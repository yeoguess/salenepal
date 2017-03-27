<?php session_start();
/**
Template Name: Log In
*/
if(isset($_SESSION['id'])){
    $url= get_site_url() . '/' . 'profile/';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
global $wpdb; 
$flag = 0;
$tbl_name = $wpdb->prefix.'register';
?>

<?php
if(isset($_POST['SubmitButton'])){ //check if form was submitted
    $email = $_POST['email']; //get input text
    $password = $_POST['password']; //get input text
  
    $servername = "localhost";
    $username = "root";
    $password1 = "";
    $dbname = "salenepal";

// Create connection
$conn = new mysqli($servername, $username, $password1, $dbname);

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

    $sql = "SELECT * FROM " . $tbl_name;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
         foreach ($result as $user) {
            if ($user['email'] == $email && $user['password'] == $password) {
                $flag = 1;
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];

                // echo 'mytesting'.$_SESSION['id'];
                 // $url=' http://localhost/wpsalenepal/add-product/';
                // echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
            }
        }
    } else {
        echo "0 results";
    }

    if ($flag == 1) {
    $url= get_site_url() . '/' . 'profile/';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
    }else{
    echo "Failed";
}
    $conn->close();
}
?>
    <?php 
        if ($flag == 0) {
        get_header();
    ?>
    
    <!--breadcrumb start-->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1>Login</h1>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="space-60"></div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sky-form-login">
                    <form action="" id="sky-form" class="sky-form" method="post">

                        <h3 class="text-left"><i class="fa fa-unlock"></i>Log in to your account</h3>
                        <fieldset>                  
                            <section>
                                <div class="row">
                                    <label class="label col col-4">Your E-mail</label>
                                    <div class="col col-8">
                                        <label class="input">
                                            <i class="icon-append fa fa-user"></i>
                                            <input type="email" name="email">
                                        </label>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="row">
                                    <label class="label col col-4">Enter Password</label>
                                    <div class="col col-8">
                                        <label class="input">
                                            <i class="icon-append fa fa-lock"></i>
                                            <input type="password" name="password">
                                        </label>
                                        <div class="note"><a href="#sky-form2" class="modal-opener">Forgot password?</a></div>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="row">
                                    <div class="col col-4"></div>
                                    <div class="col col-8">
                                        <label class="checkbox"><input type="checkbox" name="remember" checked><i></i>Keep me logged in</label>
                                    </div>
                                </div>
                            </section>
                        </fieldset>
                        <footer class="text-right">
                        <input type="submit" class="form-control input-lg btn btn-block btn-primary" name="SubmitButton" value="Log In" />
                        </footer>
                    </form><!--login form-->
                    <!--password recovery form start-->
                    <form action="sky-form/php_files/demo-login-process.php" id="sky-form2" class="sky-form sky-form-modal">
                        <header>Password recovery</header>

                        <fieldset>                  
                            <section>
                                <label class="label">E-mail</label>
                                <label class="input">
                                    <i class="icon-append fa fa-envelope-o"></i>
                                    <input type="email" name="email" id="email">
                                </label>
                            </section>
                        </fieldset>

                        <footer>
                            <button type="submit" name="submit" class="button">Submit</button>
                            <a href="#" class="button button-secondary modal-closer">Close</a>
                        </footer>

                        <div class="message">
                            <i class="fa fa-check"></i>
                            <p>Your request successfully sent!<br><a href="#" class="modal-closer">Close window</a></p>
                        </div>
                    </form><!--password-recovery form end-->
                </div><!--End sky-form-->
            </div><!--col-md-6 end-->
            
            <div class="col-md-6">
                <div class="login-register-aside-box">
                    <h3>Don't have an account yet?</h3>
                    <br>
                    <a href="<?php echo get_site_url() . '/' . 'register' ?>" class="btn btn-light-dark btn-lg">Register Now</a>
                </div><!--End login-register-aside-box-->
            </div><!--End col-md-6-->
        </div><!--End row-->
    </div><!--End container-->
    
    <div class="space-60"></div>

<?php get_footer(); ?>  

<?php }?>