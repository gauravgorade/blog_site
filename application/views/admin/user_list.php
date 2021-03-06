<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin User List </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
 
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/datatables/media/css/dataTables.bootstrap4.css" />
    <!-- Prism -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/prism/prism.css" type="text/css">

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
                
    <div class="page-header">
        <div>
            <h3>Admin User List</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>admin">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="#">View Admin List</a>
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
                            <h6 class="card-title"> Admin List</h6>
                            <div class="table-responsive">
                                	<table class="table table-bordered table-striped mb-0" id="datatable-default">
                                    <thead>
                                    <tr class="table-dark">
                                      
                                        <th>Profile </th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Mobile number</th>
                                         <th>Status</th>
                                        <th>Action </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                 <?php 
                                    	foreach ($result as $row) {  
                                    	    $t_id = $row->user_id;  
                                    	    $status = $row->user_status; $extra=$row->extra; 
                                    	    $admin_type  =$row->admin_type;?>
				 			    <tr>
                                        
                                        
                                        <th align="center">  <figure class="avatar avatar-sm">
											<img src="<?php echo  base_url()."assets/img/".$row->profile;?>" class="rounded-circle" alt="<?php echo $row->profile;?>">  </figure>
                                         </th>
                                        <td> <?php echo $row->name." ".$row->lname; ?></td>
                                        <td> <?php echo $row->email; ?></td>
                                        <td> <?php echo $row->mobile; ?></td>
                                       
                                      <th>
                                      <?php if ($extra !='1') {?>

                                        <?php  $id = $this->session->userdata('ci_user_id');

                                                  if($id!=$t_id){?> 
                                      <a href="<?php echo base_url()."admin/user_edit/".$t_id;?>"      class="btn btn-primary btn-floating btn-sm">
  											<i class="ti-pencil-alt"></i></a>  
  											<a href="<?php echo base_url()."Users/delete_user/".$t_id;?>" class="btn btn-secondary btn-google btn-floating  btn-sm">
  											<i class="ti-trash"></i>  </a> <?php  }?>  <?php  }?>
  								  	  </th>
                                        <td>
                                             <?php 
                                             
                                             if ($extra !='1') {

                                                $id = $this->session->userdata('ci_user_id');

                                                  if($id!=$t_id)
                                                    
                                                 
                                             if ($status == 1){ ?>
                                            <a href="<?php echo base_url()."Users/status/".$t_id."/0"?>">  
                                            <span class="badge badge-success">Active</span></a>  
                   							<?php } else {?>
                   						<a href="<?php echo base_url()."Users/status/".$t_id."/1";?>">
                   						   <span class="badge badge-danger">Deactivate  </span></a>  
                   							   <?php } }   ?>
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
		<script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>	
		<script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>	
		<script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>		
		<script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>	
		<script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
		<script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>	
		<script src="<?php echo base_url();?>assets/vendors/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>



<!-- App scripts -->
<script src="<?php echo base_url();?>assets/assets/js/app.min.js"></script>

<script src="<?php echo base_url();?>assets/assets/js/examples.datatables.default.js"></script>
<script src="<?php echo base_url();?>assets/assets/js/examples.datatables.row.with.details.js"></script>
<script src="<?php echo base_url();?>assets/assets/js/examples.datatables.tabletools.js"></script>



<script type="text/javascript">
$(document).ready(function (){
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
