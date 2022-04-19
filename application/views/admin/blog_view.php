<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View  Blogs</title>

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
            <h3>  Blog View</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>admin">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="<?php echo base_url();?>admin/blog/view_blog">View   Blogs</a>
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
                            <h6 class="card-title">View   Blogs  </h6>
                            <div class="table-responsive">
                                	<table class="table table-bordered table-striped mb-0" id="datatable-default">
                                    <thead>
                                    <tr class="table-dark">
                                       <th width="3%"> #id </th>
                                        <th> Heading </th>
                                        <th width="10%" class="text-center">Action </th>
										<th width="10%"  > Comments</th>
                                         <!-- <th width="5%">Featured <br> Blog</th>   -->
                                          <th  width="5%">Status</th>
                                          <th  width="5%">Comments</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                 <?php  $i=0;
                                    	foreach ($result as $row) {  
                                    	    $t_id = $row->blog_id;  $status = $row->blog_status;  $i++; ?>
				 			    <tr>
                                         <td> <?php echo  $i; ?></td>
                                      
                                        <td> <?php echo $row->blog_name; ?></td>
										
										  <td> <a href="<?php echo base_url()."admin/blog/blog_comments/".$t_id;?>" type="button" class="btn btn-primary btn-sm  position-relative"> 
											CMNT (<?php    $query = $this->db->query("SELECT * FROM blog_camment where blog_id='$t_id'" );
												echo $query->num_rows(); ?>)
										     <span class="badge bg-danger ms-2">
												NEW <?php  	$query = $this->db->query("SELECT * FROM blog_camment where blog_id='$t_id' AND  entry='1'" );
												echo $query->num_rows();?>
											 </span> </a>
											  
									  </td>
                                         <th class="text-center"><a href="<?php echo base_url()."admin/blog/edit_blog/".$t_id;?>" class="btn btn-primary btn-floating btn-sm">
  											<i class="ti-pencil-alt"></i></a>  
  											<a data="<?php echo base_url()."blogs/delete/".$t_id;?>" class="btn btn-secondary btn-google btn-floating  btn-sm delete_blog">
  											<i class="ti-trash"></i>  </a> 

											  
  										</th>

  										   <!-- <td class="text-center"> <?php  $featured = $row->featured;
									 if($featured == "on"){
										 echo '<span class="badge badge-success">Yes</span></a>';
									 	}
											 ?></td> -->
										  
  									    <td class="text-center">
                                             <?php if ($status == 1){ ?>
                                            <a href="<?php echo base_url()."blogs/status/".$t_id."/0"?>">  
                                            <span class="btn btn-success btn-sm">Published</span></a>  
                   							<?php } else {?>
                   						<a href="<?php echo base_url()."blogs/status/".$t_id."/1";?>">
                   						   <span class="btn btn-danger btn-sm">Pedning  </span></a>  
                   							   <?php }?>
               								 </td>
  									    <td class="text-center">
                                             <?php if ($row->blog_comment == 1){ ?>
                                            <a href="<?php echo base_url()."blogs/cmt_statusss/".$t_id."/0"?>">  
                                            <span class="btn btn-success btn-sm">ON</span></a>  
                   							<?php } else {?>
                   						<a href="<?php echo base_url()."blogs/cmt_statusss/".$t_id."/1";?>">
                   						   <span class="btn btn-danger btn-sm">OFF</span></a>  
                   							   <?php }?>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.10/sweetalert2.all.min.js"
        integrity="sha512-IG3jJs+NhoPszr+n3I3AHLii1LFFGEVZoorGJFkrd+flS4dgdAVL0AAGiPHlXB0ZD5mgPmcpVKm4KBybCeXLLA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">


$(".delete_blog").click(function() {
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
