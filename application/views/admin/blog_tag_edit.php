<!doctype html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Edit  Blog Tag</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Prism -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/prism/prism.css" type="text/css">

<!-- App css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
    <span>Loading...</span>
</div>
<!-- ./ Preloader -->
 
<!-- Layout wrapper -->
<div class="layout-wrapper">

  <?php   $this->load->view('admin/file/header')?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
      
      <?php   $this->load->view('admin/file/navbar')?>
        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Edit  Blog  </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>admin/blog/view_tag">Blog  Tag View</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Blog  Tag Update</li>
                </ol>
            </nav>
        </div>
    </div>

<div class="row">
 <div class="col-md-12">
  <div class="row">
     <div class="col-md-12">
        <div class="card">
           <div class="card-body">
<h6 class="card-title">Update  Blog Tag</h6>
 <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
 

 <?php  echo form_open_multipart('Blogs/update_blog_tag' ,'class="needs-validation" novalidate'); ?>
			 				
    <?php  foreach ($result as $row) {   
        $t_id = $row->b_tag_id;   
 ?>                   

   <div class="form-row">
      <div class="col-md-6 mb-3">
       <input type="hidden" name="t_id" value="<?php echo $t_id;?>">
       <input type="hidden"   name="blogcateurl" value="<?php echo base_url().$this->uri->uri_string();?>">
		
         <label for="fullname">Blog Tag Name</label>
         <input name="btagname" id="btagname" value="<?php echo $row->b_tag_name?>"  type="text" class="form-control" 
            onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)"   required>
         <div class="invalid-tooltip">   Please Enter Blog Tag Name.  </div>
      </div>
      <div class="col-md-6 mb-3">
         <label for="fullname">Tag Url</label>
         <input name="tagurl" id="tagurl" type="text" class="form-control" value="<?php echo $row->b_tag_url?>" required>
         <div class="invalid-tooltip">   Please Enter Tag Url.  </div>
      </div> 
	   <div class="col-md-12 mb-3">
                                                    <label for="fullname">Tag Description</label>
                                                    <textarea name="cat_desc" id="cat_desc" class="form-control"
                                                        required><?php echo $row->cat_desc?> </textarea>
                                                    <code> It Helps to seo tags wise blog showing in serch result</code>
                                                    <div class="invalid-tooltip"> Please Enter  Name. </div>
                                                </div>  


   </div> <br>
   <button class="btn btn-primary" type="submit"> Update</button>
   
<?php } echo form_close();?>
                         
    </div>
    </div>
   </div>
 </div>
 </div>
</div>

            </div>
            <!-- ./ Content -->

            <!-- Footer -->
           <?php  $this->load->view('admin/file/footer')?>
          
          
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="<?php echo base_url();?>assets/vendors/bundle.js"></script>

    <!-- Form validation example -->
<script src="<?php echo base_url();?>assets/assets/js/examples/form-validation.js"></script>

    <!-- Prism -->
<script src="<?php echo base_url();?>assets/vendors/prism/prism.js"></script>

<!-- App scripts -->
<script src="<?php echo base_url();?>assets/assets/js/app.min.js"></script>

 
<script type="text/javascript">
 toastr.options = {
        timeOut: 6000,
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











<script type="text/javascript">
function readURL(input) 
{
	  if (input.files && input.files[0])
		   {
	        var reader = new FileReader();

	        reader.onload = function (e) 
	        {
	            $('#pre_profile').attr('src', e.target.result);
	        }
		 	 reader.readAsDataURL(input.files[0]);
	    	}
}   $("#userImage").change(function(){readURL(this);	});

function convertToSlug(str) 
	{
		  //replace all special characters | symbols with a space
	  str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
	  // trim spaces at start and end of string
	  str = str.replace(/^\s+|\s+$/gm,'');
	  // replace space with dash/hyphen
	  str = str.replace(/\s+/g, '-');	
	  document.getElementById('tagurl').value = str;
	 }	
</script>
</body>
 </html>
