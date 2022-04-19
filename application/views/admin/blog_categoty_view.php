<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Blog Category </title>

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
                <div class="content ">

                    <div class="page-header">
                        <div>
                            <h3> Blog Category View</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Blog Category</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Add Blog Category</h6>
                                    <?php  echo form_open_multipart('Blogs/creating_blog_cate' ,'class="needs-validation" novalidate'); ?>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="fullname">Category Name</label>
                                            <input name="url" id="url" type="hidden"
                                                value="<?php echo current_url() ;?>">
                                            <input name="catname" id="catname" type="text" class="form-control"
                                                maxlength="70" onload="convertToSlug(this.value)"
                                                onkeyup="convertToSlug(this.value)" required>
                                            <div class="invalid-tooltip"> Please Enter Category Name. </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fullname">Category Url</label>
                                            <input name="caturl" id="caturl" type="text" class="form-control" required>
                                            <div class="invalid-tooltip"> Please Enter Category Name. </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fullname">Category Image</label>
                                            <input name="largeImage" id="largeImage" type="file" class="form-control"
                                                onchange="PreviewImage();" required>


                                            <div class="invalid-tooltip"> Please Enter Category Image. </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fullname"> &emsp;Image Preview</label>
                                            <img id="prelg_profile"
                                                src="<?php echo base_url()."assets/img/client/dumy_logo.png";?>"
                                                alt="uploadPreview" style="max-width: 200px; max-height: 100px; ">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="fullname">Category Description</label>
                                            <textarea name="cat_desc" id="cat_desc" rows="1" cols="50"
                                                class="form-control" required> </textarea>
                                            <code> It Helps to seo tags wise blog showing in serch result</code>
                                            <div class="invalid-tooltip"> Please Enter Category Name. </div>
                                        </div>
                                    </div> <br>
                                    <button class="btn btn-primary" type="submit">Submit</button>

                                    <?php  echo form_close();?>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title"> Blog Categories</h6>
                                   
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                                            <thead>
                                                <tr class="table-dark">

                                                    <th>Sr</th>
                                                    <th>Name</th>
                                                    <th>Url</th>
                                                    <th>Status</th>
                                                    <th>Action </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                 $i=0;
                                    	foreach ($result as $row) {  
                                    	 $i++;
                                    	    $t_id = $row->b_cat_id;
                                            $status = $row->b_cat_status; 
                                            $special = $row->special_status; 
                                    	    
                                    	    ?>
                                                <tr>


                                                    <td> <?php echo $i; ?></td>
                                                    <td> <?php echo $row->b_cat_name; ?></td>
                                                    <td> <?php echo $row->b_cat_url; ?></td>
                                                    <th>
                                                        <?php if($special != "1"){?>

                                                        <a href="<?php echo base_url()."admin/blog_category/edit/".$t_id;?>"
                                                            class="btn btn-primary btn-floating btn-sm">
                                                            <i class="ti-pencil-alt"></i></a>
                                                        <a href="<?php echo base_url()."Blogs/delete_blogcate/".$t_id;?>"
                                                            class="btn btn-secondary btn-google btn-floating  btn-sm">
                                                            <i class="ti-trash"></i> </a>

                                                    

                                                        <?php }else{
                                                            echo 'Default';
                                                        } ?>



                                                    </th>
                                                    <td>
                                                        <?php if($special != "1"){?>

                                                        <?php if ($status == 1){ ?>
                                                        <a
                                                            href="<?php echo base_url()."Blogs/blogcate_status/".$t_id."/0"?>">
                                                            <span class="badge badge-success">Active</span></a>
                                                        <?php } else {?>
                                                        <a
                                                            href="<?php echo base_url()."Blogs/blogcate_status/".$t_id."/1";?>">
                                                            <span class="badge badge-danger">Deactivate </span></a>
                                                        <?php }?>

                                                        <?php }else{
                                                            echo 'Default';
                                                        } ?>




                                                    </td>

                                                </tr>
                                                <?php  } ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    <code> Note: Default Category's Are Not Deletable And Cannot be Disabled.</code>
                                    <code>if you want to delete other category make sure to delete all blogs containing those category's</code>
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

    <!-- Form validation example -->
    <script src="<?php echo base_url();?>assets/assets/js/examples/form-validation.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#example2').DataTable();
    });

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("largeImage").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("prelg_profile").src = oFREvent.target.result;
        };
    };



    function convertToSlug(str) {
        //replace all special characters | symbols with a space
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
        // trim spaces at start and end of string
        str = str.replace(/^\s+|\s+$/gm, '');
        // replace space with dash/hyphen
        str = str.replace(/\s+/g, '-');
        document.getElementById('caturl').value = str;
    }

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