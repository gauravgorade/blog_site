<script src="<?php echo base_url()?>web/js/jquery.js"></script>
<script src="<?php echo base_url()?>web/js/fluidvids.js"></script>
<script src="<?php echo base_url()?>web/js/infinitescroll.js"></script>
<script src="<?php echo base_url()?>web/js/justified.js"></script>
<script src="<?php echo base_url()?>web/js/slick.js"></script>
<script src="<?php echo base_url()?>web/js/theia-sticky-sidebar.js"></script>
<script src="<?php echo base_url()?>web/js/aos.js"></script>
<script src="<?php echo base_url()?>web/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>web/js/jquery.overlayScrollbars.js"></script>
<!-- Sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.8/sweetalert2.all.js"
    integrity="sha512-VJHujIWWYQxg6rdA2wgQcJuk7My96LNDILkXY/L/iFGta/odtk13sTaUU9WAaZAl3Xurcn4A+rJsfPrcG/5K/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
<?php
$msg= $this->session->flashdata('success');
if ( $msg != "" )
{ echo "Swal.fire('Thank you!','$msg','success')"; } 
$msg2= $this->session->flashdata('error');
if ( $msg2 != "" )
{  echo "Swal.fire('Oops...','$msg2','error')";}

if(isset($_SESSION['success'])){
    unset($_SESSION['success']);
}
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}



?>




</script>