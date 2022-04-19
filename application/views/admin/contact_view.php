<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Inquiry</title>

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
    <!-- <div class="preloader">
        <div class="preloader-icon"></div>
        <span>Loading...</span>
    </div> -->
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
                            <h3>Contact Us Inquiry View</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="<?php echo base_url();?>admin/contact/view_inquiry">
                                            Contact Us Details </a>
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
                                        <div class="card-body">
                                            <h6 class="card-title">Contact Us Inquiry View </h6>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped mb-0"
                                                    id="datatable-default">
                                                    <thead>
                                                        <tr class="table-dark">
                                                            <th> #sr </th>
                                                            <th> #id </th>
                                                            <th> Name </th>
                                                            <th> Email</th>
                                                           
                                                          
                                                            <th>Date & time </th>
                                                            <th>Status</th>
                                                            <th>Entery Type </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $sr=0;
                                    	foreach ($result as $row) {  $sr= $sr+1;
                                    	    $t_id = $row->c_id;  $status = $row->c_status;
                                    	    ?>
                                                        <tr>


                                                            <td> <?php echo $sr; ?></td>
                                                            <td> <?php echo $t_id; ?></td>
                                                            <td> <?php echo substr($row->c_name,0,30); ?>

                                                            </td>
                                                            <td> <?php echo substr($row->c_email,0,30); ?> </td>
                                                        
                                                       
                                                            <td> <?php  echo date("d-M-Y",strtotime($row->c_date)).' at '.date("h:i: A",strtotime($row->c_time));
                                       ?></td>
                                                            <th><a title="View Details"
                                                                    href="<?php echo base_url()."admin/contact/inquiry_details/".$t_id;?>"
                                                                    class="btn btn-primary btn-floating btn-sm">
                                                                    <i class="ti-view-list"></i></a>
                                                                <a title="Delete"
                                                                    data="<?php echo base_url()."Contact/delete_contact/".$t_id;?>"
                                                                    class="btn btn-secondary btn-google btn-floating  btn-sm delete_inquiry">
                                                                    <i class="ti-trash"></i> </a>
                                                            </th>
                                                            <td>
                                                                <?php if ($status == 1){ ?>
                                                                <span class="badge badge-success">New </span>
                                                                <?php } else {?>
                                                                <span class="badge badge-danger">Old </span>
                                                                <?php } ?>

                                                            </td>

                                                        </tr>
                                                        <?php  } ?>
                                                    </tbody>
                                                </table>
                                            </div>



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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.10/sweetalert2.all.min.js"
        integrity="sha512-IG3jJs+NhoPszr+n3I3AHLii1LFFGEVZoorGJFkrd+flS4dgdAVL0AAGiPHlXB0ZD5mgPmcpVKm4KBybCeXLLA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
    $(".delete_inquiry").click(function() {
        $url = $(this).attr("data");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {


                $.ajax({
                    url: $url,
                    type: 'POST',
                    dataType: 'json',
                    success: function(responce) {
                        location.reload()
                    }
                });
                // location.reload()
            }
        })



    })

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