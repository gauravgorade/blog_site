<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View  Blogs Comment</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/media/image/favicon.png" />

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="<?php echo base_url();?>assets/vendors/datatables/media/css/dataTables.bootstrap4.css" />
    <!-- Prism -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/prism/prism.css" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    table {
        border-spacing: 0px;
        table-layout: fixed;
        margin-left: auto;
        margin-right: auto;
    }
    </style>

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


        <!-- ./ Header -->
        <?php   $this->load->view('admin/file/header')?>
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- begin::navigation -->


            <?php   $this->load->view('admin/file/navbar')?>
            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content ">

                    <div class="page-header">
                        <div>
                            <h3>  Blog Comments View</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="<?php echo base_url();?>admin/blog/view_blog">View  Comments Blogs</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">

<div class="col-md-12">

    <div class="row">

        <div class="col-md-12">

            <?php  echo form_open_multipart('blogs/edit__blog' ,'class="needs-validation" novalidate'); ?>



            <div class="card">

                <div class="card-body">



                  <h6 class="card-title">Edit  Blog comment on



                        <span class="badge badge-danger">

                            <?php 	foreach ($result as $row) {  

                        echo $row->blog_name; $blog_id =  $row->blog_id;    $blog_url=  $row->blog_url; } ;?></span>

                        <div class="float-right">

                            <a target="_blank" class="btn btn-info"

                                href="<?= base_url()."-blog/".$blog_url;?>">

                                <i class="ti-bookmark-alt"></i> &nbsp; Visit Blog </a>

                        </div>



                    </h6>



                    <?php  $i=0;  

                foreach ($cmt_blog as $row) {  

                    $t_id = $row->cmt_id;  $status = $row->status;  $i++; ?>





                    <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->

                    <div data-label="Personal Details" class="demo-code-preview row">

                        <div class="col-md-6 mb-3">

                            <input name="url" type="hidden" class="form-control" required

                                value="<?php echo current_url();?>">

                            <input name="t_id" type="hidden" class="form-control" required

                                value="<?php echo $t_id ; ?>">







                            <label for="name"> Name</label>

                            <input name="name" type="text" class="form-control" required

                                value="<?php echo $row->name; ?>">

                            <div class="invalid-tooltip"> Please Enter Email. </div>

                        </div>

                        

                        <div class="col-md-6 mb-3">

                            <label for="email">Email </label>

                            <input name="email" type="text" class="form-control"  value="<?php echo $row->email ?>" required>

                            <div class="invalid-tooltip"> Please Enter Email. </div>



                        </div>

                        <div class="col-md-6 mb-3">

                            <label for="mobile">Mobile </label>

                            <input name="mobile" type="text" maxlength="10"

                                onkeyup="this.value=this.value.replace(/[^\d]/,'')"

                                pattern="[789][0-9]{9}" class="form-control" value="<?php echo $row->mobile ?>" required>

                            <div class="invalid-tooltip"> Please Enter Mobile. </div>



                        </div>



                        <div class="col-md-6 mb-3">

                            <label for="status"> Status </label>

                            <select name="status" class="form-control" required>

                                <option value="">Select</option>

                               

                                    <option <?php if($status == "0"){ echo 'selected'; } ?>   value="0">Hide</option>

                                    

                                        <option  <?php if($status == "1"){ echo 'selected'; } ?>  value="1">Show</option>

                                    

                                    

                        

                            </select>

                            <div class="invalid-tooltip"> Please Select Source </div>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label for="message">  Message </label>

                            <input name="message" class="form-control" value="<?php echo $row->message ;?>">



                        </div>

                     

                    </div>

                    <?php  } ?>

                    

                    <br>

                    <button class="btn btn-primary" type="submit"> Submit </button>

                </div>

            </div>







            </form>

        </div>

    </div>

</div>



</div>

                </div>
                <!-- ./ Content -->

                <!-- Footer -->
                <?php  $this->load->view('admin/file/footer')?>
                <!-- ./ Footer -->
            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="<?php echo base_url();?>assets/vendors/bundle.js"></script>
    <!-- Prism -->

    <script src="<?php echo base_url();?>assets/vendors/prism/prism.js"></script>

    <script src="<?php echo base_url();?>assets/vendors/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script
        src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js">
    </script>
    <script
        src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js">
    </script>
    <script
        src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js">
    </script>
    <script
        src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js">
    </script>



    <!-- App scripts -->
    <script src="<?php echo base_url();?>assets/assets/js/app.min.js"></script>

    <script src="<?php echo base_url();?>assets/assets/js/examples.datatables.default.js"></script>
    <script src="<?php echo base_url();?>assets/assets/js/examples.datatables.row.with.details.js"></script>
    <script src="<?php echo base_url();?>assets/assets/js/examples.datatables.tabletools.js"></script>



    <script type="text/javascript">
    $(document).ready(function() {
        $('#example2').DataTable();
    });


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
</body>

</html>