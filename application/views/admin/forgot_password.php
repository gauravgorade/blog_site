<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Forgot password </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo" style="margin-top:-95px">
       <img width="90%" src="<?php echo base_url()?>assets/images/detectlogo.png" alt="image">
  </div>
    <!-- ./ logo -->

 
    <h1 style="margin-top:-95px"> Forgot password</h1>

    <!-- form -->
    <?php echo form_open('admin/forget_psw');
    ?>
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        </div>
        
          <div class="form-group">
            <input name="mobile" type="text" class="form-control" placeholder="Mobile Number" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
        <hr>
  		 <a href="<?php echo base_url();?>admin/" class="btn btn-sm btn-outline-light ml-1">Login!</a>
           
   <?php   echo form_close();?>

</div>

<!-- Plugin scripts -->
<script src="<?php echo base_url();?>assets/vendors/bundle.js"></script>

<!-- App scripts -->
<script src="<?php echo base_url();?>assets/assets/js/app.min.js"></script>


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
