<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us inquiry full details</title>

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
                <div class="content">

                    <div class="page-header">
                        <div>
                            <h3>Contact us inquiry full details</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="<?php echo base_url();?>admin/contact/view_inquiry">
                                            Contact Us Details </a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="#">
                                            Full Details </a>
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

                                        <?php 
                                    	foreach ($result as $row) {  
                                    	    $t_id = $row->c_id;  $status = $row->c_status;
                                    	   ?>
                                        <div class="card-body">




                                            <strong><i class="ti-user text-info mr-1  "></i>

                                                Contact Details</strong>

                                            <a href="<?php echo base_url()."Print_details/contact_us/".$t_id;?>"><span
                                                    class="badge badge-info p-2 float-right">Export</span></a>

                                            <div class="row ">


                                                <div class="col-sm-2 m-2 ">
                                                    <div class="form-group label-floating ">

                                                        <b class="text-dark">
                                                            <i class="ti-user text-danger mr-1  "></i>
                                                            Name</b>
                                                        <div class=" " style="  margin-right: 20px;">
                                                            <?php echo $row->c_name; ?>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="col-sm-2 m-2" style="margin-left: 10px;">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-mobile text-primary mr-1  "></i>
                                                            Mobile no
                                                        </strong>
                                                        <div class="text-mute   " style="  margin-right: 20px;">

                                                            <?php echo $row->c_mobile; ?>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-sm-3 m-2" style="margin-left: 10px;">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-email text-danger mr-1  "></i>
                                                            Email
                                                        </strong>
                                                        <div class="text-mute   " style="  margin-right: 20px;">

                                                            <?php echo $row->c_email; ?>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>




                                            <strong><i class="ti-pulse text-danger mr-1"></i>

                                                 Details</strong>

                                            <div class="row mr-1">



                                                <div class="col-md-3 m-2 " >
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-pencil text-info mr-1  "></i>
                                                            Subject
                                                        </strong>
                                                        <div class="text-mute ">
                                                        <?php echo $row->c_subject; ?>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-8 m-2 ">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-email text-info mr-1  "></i>
                                                            Message
                                                        </strong>
                                                        <div class="text-mute ">
                                                        <?php echo $row->c_message; ?>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-3 m-2 ">
                                                    <div class="form-group label-floating">
                                                        <strong class="text-dark">
                                                            <i class="ti-rocket text-info mr-1  "></i>
                                                            Inquiry Date
                                                        </strong>
                                                        <div class="text-mute ">
                                                            <?php 
                                                              echo date("d-M-Y",strtotime($row->c_date)).' at '.date("h:i: A",strtotime($row->c_time));
                                                             ?>
                                                        </div>


                                                    </div>
                                                </div>
                                    



                                            </div>

                                          

                                        </div>




                                    </div>


                                </div>

                                <?php  } ?>
                                <!--  -->

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