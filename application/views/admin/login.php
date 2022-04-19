<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/media/image/favicon.png" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/app.min.css" type="text/css">

    
</head>
<style>
       body{
            overflow: hidden;
        }
    </style>

<body class="form-membership">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <div class="form-wrapper" style="margin-top:-1px">

        <!-- logo -->
        <div id="logo" style="margin-top:-45px">
            <img width="90%" src="<?php echo base_url()?>assets/images/detectlogo.png"
                alt="image">
        </div>
        <!-- ./ logo -->

        <?php  //echo $this->session->userdata('website_logo');?>
        <h1 style="margin-top:-95px">Sign in <?php $this->session->userdata('client_login');?> </h1>



        <?php



$rem_user = $this->session->userdata('rem_user');

$rem_pass = $this->session->userdata('rem_pass');

$rem_check = $this->session->userdata('remember');



?>



        <!-- form -->

        <?php echo form_open('admin/admin_login'); ?>

        <div class="form-group"  style="margin-top:15px">

            <input type="text" name="username" class="form-control" placeholder="Email"
                <?php  if($rem_user){ echo 'value="'.$rem_user.'"'; } ?> required autofocus>

        </div>

        <div class="form-group">

            <input name="password" type="password" class="form-control" placeholder="Password"
                <?php  if($rem_pass){ echo 'value="'.$rem_pass.'"'; } ?> required>

        </div>

        <div class="form-group d-flex justify-content-between">

            <div class="custom-control custom-checkbox ">

                <input type="checkbox" class="custom-control-input" name="remember"
                    <?php  if($rem_check != ""){ echo $rem_check; } ?> id="customCheck1">

                <label class="custom-control-label" for="customCheck1">Remember me</label>

            </div>

            <a href="<?php echo base_url();?>admin/forgot_password">Reset password</a>

        </div>

        <button type="submit" class="btn btn-primary btn-block">Sign in</button>


        <?php 
   echo form_close();?>
        <!-- ./ form -->


    </div>

    <!-- Plugin scripts -->
    <script src="<?php echo base_url();?>assets/vendors/bundle.js"></script>

    <!-- App scripts -->
    <script src="<?php echo base_url();?>assets/assets/js/app.min.js"></script>



    <?php  	if(isset($message)) {  

    ?>

    <script type="text/javascript">
    toastr.options = {
        timeOut: 6000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };


    toastr.error('Invalid Login Id Or Password!');
    // toastr.success('Welcome!'); 
    /* toastr.success('Successfully completed');

    toastr.info('This is an informational message');

    toastr.warning('You are currently not authorized');

     */
    </script>
    <?php  }?>

    <script type="text/javascript">
    toastr.options = {
        timeOut: 10000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };

    <?php

$msg= $this->session->flashdata('success');
if ( $msg != "" )
{ 
echo "toastr.success('$msg');";
} 
$msg2= $this->session->flashdata('error');
if ( $msg2 != "" )
{
    echo "toastr.error('$msg2');";
}


if(isset($_SESSION['success'])){
    unset($_SESSION['success']);
}
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>
    </script>


</body>

</html>