<?php

$id = $this->session->userdata('ci_user_id');

$data = $this->db->query("SELECT * FROM `admin_login` WHERE user_id= $id");



foreach ($data->result() as $row) {

    $default = $row->admin_role_default;

}

// echo $default;

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/media/image/favicon.png" />

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="<?php echo base_url();?>assets/assets/css/css2.css" rel="text/css">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/dataTable/datatables.min.css" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/app.min.css" type="text/css">

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




                    <div class="page-header d-md-flex justify-content-between">
                        <div>
                            <h3>Welcome back,


                                <?php  echo $this->session->userdata('ci_name');?></h3>
                            <p class="text-muted">This page shows an overview for your account summary.</p>

                            <?php
      $lastyear="";
      $count_inq2 = $this->db->query("SELECT * FROM `contact_inquiry` ORDER BY `contact_inquiry`.`c_id` DESC LIMIT 0,1");
        foreach ($count_inq2->result() as $crow) 
      {
            $lastyear = date("Y", strtotime($crow->c_date));
      }
      $counti=$month_data="";
      for ($i=1;$i <=12;$i++)
      {
         // echo $i;echo "<br>";
        $date1 = date("$lastyear-$i-01");
      // echo "<br>";
          $date2 = date("$lastyear-$i-31");
       //echo "<br>";echo "<br>";
       
          $count_inq3 = $this->db->query("SELECT * FROM `contact_inquiry`  WHERE c_date
                BETWEEN '$date1' AND '$date2' ");
          $counti =count($count_inq3->result());
       
          $month_data.=$counti.", ";
       }
      
      
      
            ?>



                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2"><?php echo  $lastyear;?> Contact Inquiry Report
                                            Month wise
                                        </h6>
                                        <div class="d-flex justify-content-between">
                                            <a href="<?php echo base_url()."admin"?>" class="btn btn-floating">
                                                <i class="ti-reload"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <p class="text-muted mb-4">Check how you're doing contact us
                                        inquiry for current month</p>
                                    <div id="sales"></div>


                                    <br> <br>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Todays updated Blogs</h6>
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <div class="avatar">
                                                        <span
                                                            class="avatar-title bg-primary-bright text-primary rounded-pill">
                                                            <i data-feather="gift"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="font-weight-bold ml-1 font-size-30 ml-3">

                                                    <?php
                                                    
                                                           $count_inq21 = $this->db->query("SELECT * FROM blog_tbl WHERE DATE(blog_date) = DATE(NOW()) ");
                                                       
                                                      

                                                    ?>
                                                    <?php 
                                                     echo     $count21=count($count_inq21->result());
                                                      ?>
                                                </div>
                                            </div>
                                            <p class="mb-0"><a href="<?php echo base_url();?>Inquiry/view_inquiry"
                                                    class="link-1">Today's number of Blog Added.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title"> Todays Blog Comments </h6>
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <div class="avatar">
                                                        <span
                                                            class="avatar-title bg-info-bright text-info rounded-pill">
                                                            <i class="ti-back-right"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="font-weight-bold ml-1 font-size-30 ml-3">
                                                    <?php
                                                      
                                                        $count_inq22 = $this->db->query("SELECT * FROM blog_camment WHERE  DATE(date) = DATE(NOW())");
                                                    
                                                    ?>

                                                    <?php 
                                 echo     $count112=count($count_inq22->result());
                                 ?></div>
                                            </div>
                                            <p class="mb-0"><a class="link-1"
                                                    href="<?php echo base_url();?>Contact/view_contact"> Today's number
                                                    of Blog Comments.</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Contact us</h6>
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <div class="avatar">
                                                        <span
                                                            class="avatar-title bg-secondary-bright text-secondary rounded-pill">
                                                            <i class="ti-support"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="font-weight-bold ml-1 font-size-30 ml-3">

                                                    <?php
                                                     
                                                        $count_inq23 = $this->db->query("SELECT * FROM contact_inquiry WHERE DATE(c_date) = DATE(NOW())");
                                                      

                                                    ?>

                                                    <?php 
                                 echo     $count23=count($count_inq23->result());
                                 ?></div>
                                            </div>
                                            <p class="mb-0"><a class="link-1"
                                                    href="<?php echo base_url();?>Inquiry/view_get_support">Today's
                                                    number of Contact Inquiry.</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2">Monthly Statistics</h6>

                                    </div>
                                    <div>
                                        <div class="list-group list-group-flush">
                                            <div
                                                class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Blogs</h5>
                                                    <div>Monthly Blogs Count </div>
                                                </div>
                                                <h3 class="text-primary mb-0">
                                                    <?php       
                                                        $count_inq25 = $this->db->query("SELECT * FROM blog_tbl WHERE  MONTH(blog_date) = MONTH(CURRENT_DATE()) AND YEAR(blog_date) = YEAR(CURRENT_DATE())");
                                                    ?>

                                                    <?php
                                echo     $count25=count($count_inq25->result());
                                 ?></h3>
                                            </div>
                                            <div
                                                class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Contact </h5>
                                                    <div>Monthly Visitors Contact us</div>
                                                </div>
                                                <div>
                                                    <h3 class="text-success mb-0">

                                                        <?php
                                                
                                                        $count_inq26 = $this->db->query("SELECT * FROM contact_inquiry WHERE MONTH(c_date) = MONTH(CURRENT_DATE()) AND YEAR(c_date) = YEAR(CURRENT_DATE())");
                                                      

                                                    ?>
                                                        <?php 
                                 echo     $count26=count($count_inq26->result());
                                 ?></h3>
                                                </div>
                                            </div>
                                            <div
                                                class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Blog Comment </h5>
                                                    <div>Monthly Comments on blogs </div>
                                                </div>
                                                <div>
                                                    <h3 class="text-warning mb-0">
                                                        <?php
                                                  
                                                        $count_inq30 = $this->db->query("SELECT * FROM blog_camment WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE())");
                                                     

                                                    ?>
                                                        <?php 
                                                    echo     $count30=count($count_inq30->result());
                                                    ?></h3>
                                                </div>
                                            </div>
                                        

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title mb-2">Statistics Over All</h6>

                                    </div>
                                    <div>
                                        <div class="list-group list-group-flush">
                                            <div class="list-group list-group-flush">
                                                <div
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div>
                                                        <h5>Total Blogs</h5>
                                                        <div>Total Inquiry for Swasthyam Wellness Packages </div>
                                                    </div>
                                                    <h3 class="text-primary mb-0">

                                                        <?php
                                                      
                                                        $count_inq27 = $this->db->query("SELECT * FROM blog_tbl ");
                                                      

                                                    ?>

                                                        <?php
                                 echo     $count27=count($count_inq27->result());
                                 ?></h3>
                                                </div>
                                                <div
                                                    class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <div>
                                                        <h5>Contact </h5>
                                                        <div>Total Visitors Contact us</div>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-success mb-0">
                                                            <?php
                                                       
                                                        $count_inq28 = $this->db->query("SELECT * FROM contact_inquiry ");
                                                       

                                                    ?>
                                                            <?php 
                                 echo     $count28=count($count_inq28->result());
                                 ?></h3>
                                                    </div>
                                                </div>

                                            </div>

                                            <div
                                                class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Blog Comment</h5>
                                                    <div>Total blog comment </div>
                                                </div>
                                                <div>
                                                    <h3 class="text-primary mb-0">
                                                        <?php
                                                    
                                                        $count_inq28 = $this->db->query("SELECT * FROM blog_camment");
                                                       

                                                    ?>
                                                        <?php 
                                 echo     $count28=count($count_inq28->result());
                                 ?></h3>
                                                </div>
                                            </div>
                                            <div
                                                class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                <div>
                                                    <h5>Categories</h5>
                                                    <div>Total number Categories </div>
                                                </div>
                                                <div>
                                                    <h3 class="text-primary mb-0">

                                                        <?php
                                                       
                                                        $count_inq28 = $this->db->query("SELECT * FROM blog_category");
                                                      

                                                    ?>
                                                        <?php 
                                                           echo     $count28=count($count_inq28->result());
                                                           ?></h3>
                                                </div>
                                            </div>
                                         

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-4">
                                        <div>
                                            <h6 class="card-title mb-1">Monthly Inquiry</h6>

                                        </div>
                                        <div>
                                            <a href="<?php echo base_url()?>admin" class="btn btn-floating">
                                                <i  class="ti-reload"></i>
                                            </a>

                                        </div>
                                    </div>
                                    <div id="monthly-sales"></div>
                                    <ul class="list-inline text-center">
                                        <li class="list-inline-item">
                                            <i class="ti-medall mr-1 text-primary "></i>Blogs <br>
                                            <small class="text-muted"> <?php echo $count25;?></small>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-medall-alt mr-1 text-success"></i> Contact us  <br>
                                            <small class="text-muted"> <?php echo $count26;?></small>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-medall mr-1 text-warning"></i> Blog Comment <br>
                                            <small class="text-muted"> <?php echo $count30;?></small>
                                        </li>


                                    </ul>
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

    <!-- Apex chart -->
    <script src="<?php echo base_url();?>assets/vendors/charts/apex/apexcharts.min.js"></script>

    <!-- Daterangepicker -->
    <script src="<?php echo base_url();?>assets/vendors/datepicker/daterangepicker.js"></script>

    <!-- DataTable -->
    <script src="<?php echo base_url();?>assets/vendors/dataTable/datatables.min.js"></script>

    <!-- Dashboard scripts -->
    <script src="<?php echo base_url();?>assets/assets/js/examples/pages/dashboard.js"></script>

    <!-- App scripts -->
    <script src="<?php echo base_url();?>assets/assets/js/app.min.js"></script>

    <script type="text/javascript">
    $(function() {





        var colors = {
            primary: $('.colors .bg-primary').css('background-color').replace('rgb', '').replace(')', '')
                .replace('(', '').split(','),
            secondary: $('.colors .bg-secondary').css('background-color').replace('rgb', '').replace(')',
                '').replace('(', '').split(','),
            info: $('.colors .bg-info').css('background-color').replace('rgb', '').replace(')', '').replace(
                '(', '').split(','),
            success: $('.colors .bg-success').css('background-color').replace('rgb', '').replace(')', '')
                .replace('(', '').split(','),
            danger: $('.colors .bg-danger').css('background-color').replace('rgb', '').replace(')', '')
                .replace('(', '').split(','),
            warning: $('.colors .bg-warning').css('background-color').replace('rgb', '').replace(')', '')
                .replace('(', '').split(','),
        };

        var rgbToHex = function(rgb) {
            var hex = Number(rgb).toString(16);
            if (hex.length < 2) {
                hex = "0" + hex;
            }
            return hex;
        };

        var fullColorHex = function(r, g, b) {
            var red = rgbToHex(r);
            var green = rgbToHex(g);
            var blue = rgbToHex(b);
            return red + green + blue;
        };

        colors.primary = '#' + fullColorHex(colors.primary[0], colors.primary[1], colors.primary[2]);
        colors.secondary = '#' + fullColorHex(colors.secondary[0], colors.secondary[1], colors.secondary[2]);
        colors.info = '#' + fullColorHex(colors.info[0], colors.info[1], colors.info[2]);
        colors.success = '#' + fullColorHex(colors.success[0], colors.success[1], colors.success[2]);
        colors.danger = '#' + fullColorHex(colors.danger[0], colors.danger[1], colors.danger[2]);
        colors.warning = '#' + fullColorHex(colors.warning[0], colors.warning[1], colors.warning[2]);



        function monthlySales() {
            var options = {
                series: [<?php echo $count25." , ".$count26." , ".$count30?>],
                chart: {
                    type: 'donut',
                    // fontFamily: chartFontStyle,
                },
                labels: ['Blogs', 'Contact us ',
                    'Blog Comments '
                ],
                colors: [colors.primary, colors.success, colors.warning],
                track: {
                    background: "#cccccc"
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    colors: [colors.primary, colors.success, colors.warning],
                },
                plotOptions: {
                    pie: {
                        expandOnClick: true,
                        donut: {
                            labels: {
                                show: true,
                                value: {
                                    formatter: function(val) {
                                        return '' + val;
                                    }
                                }
                            }
                        }
                    }
                },
                tooltip: {
                    shared: false,
                    y: {
                        formatter: function(val) {
                            return '' + val;
                        }
                    }
                },
                legend: {
                    show: false
                }
            };

            var chart = new ApexCharts(document.querySelector("#monthly-sales"), options);

            chart.render();
        }

        monthlySales();


        function sales() {
            if ($('#sales').length) {
                var options = {
                    chart: {
                        type: 'bar',
                        fontFamily: "Inter",
                        offsetX: -26,
                        stacked: false,
                        height: 265,
                        width: '102%',
                        toolbar: {
                            show: false
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    series: [{
                        name: 'Swasthyam Wellness Packages Inquiry',
                        data: [<?php echo ($month_data);?>]
                    }],
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '20%',
                            endingShape: 'rounded'
                        },
                    },
                    colors: [colors.primary],
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept',
                            'Oct', 'Nov', 'Dec'
                        ],
                    },
                    tooltip: {
                        y: {
                            formatter: function(val) {
                                return "" + val + ""
                            }
                        }
                    }
                };

                var chart = new ApexCharts(
                    document.querySelector("#sales"),
                    options
                );

                chart.render();
            }
        }

        sales();










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


    $('#recent-orders2').DataTable({
        lengthMenu: [5, 10],
        "columnDefs": [{
            "targets": 5,
            "orderable": false
        }]
    });

    $(document).ready(function() {
        $('#orders3').DataTable({
            "scroll": "400px",
            "scrollCollapse": true
        });
    });
    $(document).ready(function() {
        $('#recent-orders4').DataTable({
            "scroll": "400px",
            "scrollCollapse": true
        });
    });
    </script>

</body>

</html>