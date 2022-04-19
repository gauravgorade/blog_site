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
                                    <div class="card">
                                        <!--  -->

                                      
                                        <div class="card-body">


                                        <h6 class="card-title">  Blog comments   on
								 
                                 <span class="badge badge-danger"  >   <?php 	foreach ($result as $row) {  
                                                echo $row->blog_name; $blog_id =  $row->blog_id;    $blog_url=  $row->blog_url; } ;?></span> 
                                          <div class="float-right">
                                             <a target="_blank" class="btn btn-info" href="<?= base_url()."blog/".$blog_url;?>">
                                             <i class="ti-bookmark-alt"></i> &nbsp; Visit Blog </a>
                                             </div> 	   
                                             
                                             </h6>

                                             <?php  $i=0;  
                                    	foreach ($cmt_blog as $row) {  
                                    	    $t_id = $row->cmt_id;  $status = $row->status;  $i++; ?>



                                            <strong><i class="ti-pulse text-danger mr-1"></i>

                                                Comment Details </strong>

                                            <div class="row ">

                                                <div class="col-md-3 my-2 ">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-heart text-danger mr-1  "></i>
                                                            Full Name
                                                        </strong>
                                                        <div class="text-mute ">
                                                            <?php echo $row->name; ?>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-3 my-2 ">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-email text-primary mr-1  "></i>
                                                            Email
                                                        </strong>
                                                        <div class="text-mute ">
                                                            <?php echo $row->email; ?>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-3 my-2 ">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-mobile text-info mr-1  "></i>
                                                            Mobile No
                                                        </strong>
                                                        <div class="text-mute ">
                                                        <?php echo $row->mobile ?>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-3 my-2 ">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-time text-info mr-1  "></i>
                                                            Date & time
                                                        </strong>
                                                        <div class="text-mute ">
                                                        <?php echo $row->date; echo " at  "; echo $row->time; ?>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-3 my-2 ">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-flag text-secondary mr-1  "></i>
                                                           Status
                                                        </strong>
                                                        <div class="text-mute ">
                                                        <?php /* echo $status; */  if ($status == 0){ ?>
																<a href="<?php echo base_url()."blogs/cmt_status/".$t_id."/1/".$blog_id?>">  
																<span class="badge badge-danger">  Under  Observation </span></a>  
																<?php } else {?>
															<a href="<?php echo base_url()."blogs/cmt_status/".$t_id."/0/".$blog_id;?>">
															<span class="badge badge-success">  Published </span></a>  
																<?php }?>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-3 my-2 ">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-brush-alt text-secondary mr-1  "></i>
                                                            Action
                                                        </strong>
                                                        <div class="text-mute ">
                                                        <a href="<?php echo base_url()."blogs/cmt_delete/".$t_id."/".$blog_id;?>"
                                                                    class="btn btn-secondary btn-google ">
                                                                    <i class="ti-trash"></i>  Delete</a>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-9 my-2 ">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-comments text-secondary mr-1  "></i>
                                                            Message
                                                        </strong>
                                                        <div class="text-mute ">
                                                        <?php echo $row->message ;?>
                                                        </div>


                                                    </div>
                                                </div>





                                            </div>

                                        <?php  } ?>



                                        </div>
                                    </div>



                                </div>


                            </div>

                            
                            <!--  -->

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