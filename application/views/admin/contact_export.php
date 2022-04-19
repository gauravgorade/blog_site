<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Inquiry Report</title>

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

    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/datepicker/daterangepicker.css" type="text/css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
                            <h3>Export Contact Us Inquiry </h3>
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
                                            <h6 class="card-title">Contact Us Inquiry Export </h6>

                
                                            <?php  echo form_open_multipart('admin/contact/export_inquiry'); ?>

                                            <div data-label=" Inquiry Export " class="demo-code-preview row">
                                                <input type="hidden" name="url"
                                                    value="<?php echo base_url().$this->uri->uri_string();?>">

                                                <div class="col-md-6 mb-3 d-none">
                                                    <label for="daterangepicker2">Select Start Date</label>
                                                    <input type="text" id="daterangepicker" name="daterangepicker"
                                                        class="form-control" required>
                                                    <div class="invalid-tooltip"> Please Enter Password. </div>
                                                </div>
                                                <div class="col-md-6 mb-3 d-none">
                                                    <label for="daterangepicker2">Select End Date</label>
                                                    <input type="text" name="daterangepicker2" id="daterangepicker2"
                                                        class="form-control" required>

                                                    <div class="invalid-tooltip"> Please End Date. </div>
                                                </div>
                                                <div class=" mb-3">
                                                    <label for="daterangepicker2">Select Date</label>

                                                    <div id="reportrange"
                                                        style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; border-radius:5px">
                                                        <i data-feather="calendar"></i>&nbsp;
                                                        <span></span> <i data-feather="chevron-down"></i>
                                                    </div>

                                                </div>
                                                <br>
                                           
                                            </div>
                                            <button class="btn btn-primary" type="submit">Show data </button>
                                            <?php  echo form_close();?>
                                            <br> <br>
                                            <h6 class="card-title">Contact Us Inquiry Export
                                                <?php  $msg2= $this->session->flashdata('export_msg');
       $msgggggg= $this->session->flashdata('export_msg');
       if ( $msgggggg != "" )
       {
           echo $msgggggg;
         //  echo "toastr.error('$msgggggg');";
       } 
       
       ?>
                                            </h6>
                                            <hr>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped mb-0"
                                                    id="datatable-tabletools">
                                                    <thead>
                                                        <tr class="table-dark">

                                                            <th> Name </th>
                                                            <th> Email</th>
                                                            <th> Mobile </th>
                                                            <th>Subject </th>
                                                            <th>Message </th>
                                                            <th>Date & time </th>
                                                            <th>Entry</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                    	
                                    	
                                    	foreach ($result as $row) {  
                                    	    $t_id = $row->c_id;   
                                    	    $status = $row->c_status;?>
                                                        <tr>



                                                            <td> <?php echo $row->c_name; ?></td>
                                                            <td> <?php echo $row->c_email; ?> </td>
                                                            <td> <?php echo $row->c_mobile; ?></td>
                                                            <td> <?php echo $row->c_subject; ?></td>
                                                            <td> <?php echo $row->c_message; ?></td>
                                                            <td> <?php 
                                         echo date("d-M-Y",strtotime($row->c_date)).' at '.date("h:i: A",strtotime($row->c_time));
                                        ?></td>



                                                            <th> <?php if($status == "0"){
                                          echo 'OLD';
                                      }else{
                                          echo 'NEW';
                                      }?>

                                                            </th>

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

    <script src="<?php echo base_url();?>assets/vendors/datepicker/daterangepicker.js"></script>



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

    $('input[name="daterangepicker"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });
    $('input[name="daterangepicker2"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });

    $(function() {

var start = moment().subtract(29, 'days');
var end = moment();

function cb(start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    console.log("A new date selection was made: " + start.format('DD-MM-YYYY') + ' to ' + end.format(
        'DD-MM-YYYY'));
    var a = start.format('DD-MM-YYYY');
    var b = end.format('DD-MM-YYYY');
    $('input[name="daterangepicker"]').val(a);
    $('input[name="daterangepicker2"]').val(b);
}

$('#reportrange').daterangepicker({
    startDate: start,
    endDate: end,
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
            'month').endOf('month')]
    }
}, cb);

cb(start, end);


});
    </script>
</body>

</html>