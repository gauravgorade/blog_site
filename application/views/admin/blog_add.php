<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Blog Add </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/media/image/favicon.png" />

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Prism -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/prism/prism.css" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/app.min.css" type="text/css">

    <link href="<?php echo base_url();?>assets/vendors/select2/css/select2.min.css" rel="stylesheet">

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

        <?php   $this->load->view('admin/file/header')?>
        <!-- Content wrapper -->
        <div class="content-wrapper">

            <?php   $this->load->view('admin/file/navbar')?>
            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content ">

                    <div class="page-header">
                        <div>
                            <h3>Add Blog </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>Admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>blogs/view"> Blog View</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"> Blog Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <?php  echo form_open_multipart('blogs/creating_blog' ,'class="needs-validation" novalidate'); ?>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title"> Blog </h6>
                                            <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->

                                            <div class="form-row">

                                                <div class="col-md-6 mb-3">


                                                    <label for="b_name">Blog Heading</label>
                                                    <input name="b_name" id="b_name" type="text" class="form-control"
                                                        onload="convertToSlug(this.value)"
                                                        onkeyup="convertToSlug(this.value)" required>
                                                    <div class="invalid-tooltip"> Please Enter Blog Heading.</div> <br>
                                                    <code>	Permalink:*  <?php echo  base_url();?><span id="blog_slug"> </span> </code>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="blog_url"> Blog Url </label>
                                                    <input name="blog_url" id="blog_url" type="text"
                                                        class="form-control" required>
                                                    <div class="invalid-tooltip"> Please Enter Blog Url Permalink.
                                                    </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label for="short_desc">Short Description</label>
                                                        <textarea class="form-control" name="short_desc" id="short_desc"
                                                            rows="2" value="" required minlength="100"
                                                            maxlength="1000"></textarea>
                                                        <div class="invalid-tooltip"> Please Enter Blog Short
                                                            Description. </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="form-group">

                                                        <div class="custom-control custom-switch">
                                                            <input name="featured" type="checkbox"
                                                                class="custom-control-input" id="customSwitch1">
                                                            <label class="custom-control-label" for="customSwitch1"> Is
                                                                featured? </label>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="long_desc1">Long Description 1</label>
                                                        <textarea class="editor form-control" name="long_desc1"
                                                            id="long_desc1" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 d-none">
                                                    <div class="form-group">
                                                        <label for="long_desc2">Long Description 2</label>
                                                        <textarea class="editor form-control " name="long_desc2"
                                                            id="long_desc2" rows="3" value=""> </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">


                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="largeImage">Large Image</label>
                                                                <input name="largeImage" id="largeImage" type="file"
                                                                    class="form-control" onchange="PreviewImage();"
                                                                    required>

                                                            </div>

                                                            <img id="prelg_profile"
                                                                src="<?php echo base_url()."assets/img/client/dumy_logo.png";?>"
                                                                alt="uploadPreview" style="max-width: 200px;">


                                                        </div>

                                                    </div>
                                                </div>


                                            </div> <br>



                                            <br><br><br><br><br><br><br><br><br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card">
                                        <div class="card-header"> Publish </div>
                                        <div class="card-body text-center">
                                            <button class="btn btn-primary" type="submit"><i class="ti-save"></i> &nbsp;
                                                Save Blog</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">Blog Status <span style="color :red">*</span> </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <?php  $blog_status = "";?>
                                                <select name="blog_status" id="blog_status" required
                                                    class="form-control" required>
                                                    <option value="">Select</option>
                                                    <option value="1"
                                                        <?php if ($blog_status == 1) { echo "selected";} ?>>Published
                                                    </option>
                                                    <option value="0"
                                                        <?php if ($blog_status == 0) { echo "selected";} ?>>Pending
                                                    </option>
                                                </select>
                                                <div class="invalid-tooltip"> Please Select Blog Status </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">Blog Comments <span style="color :red">*</span> </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <?php  $blog_comment = "";?>
                                                <select name="blog_comment" id="blog_comment" required
                                                    class="form-control" required>
                                                    <option value="">Select</option>
                                                    <option value="1"
                                                        <?php if ($blog_comment == 1) { echo "selected";} ?>>Turn On
                                                    </option>
                                                    <option value="0"
                                                        <?php if ($blog_comment == 0) { echo "selected";} ?>>Turn Off
                                                    </option>
                                                </select>
                                                <div class="invalid-tooltip"> Please Select Blog Comment Status </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">Blog Category <span style="color :red">*</span> </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <?php       	?>

                                                <select name="category_id" id="category_id" required
                                                    class="form-control" required>
                                                    <option value="">Select</option>
                                                    <?php 	foreach ($cat_result as $prow) 
                                    {     $gc_id=  $prow->b_cat_id; 
                                                $service_nm=  $prow->b_cat_name; 
                                         ?>
                                                    <option value="<?php echo $gc_id?>"><?php echo $service_nm?>
                                                    </option>

                                                    <?php   } ?>
                                                </select>

                                                <div class="invalid-tooltip"> Please Select Blog Category </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">Blog Tags <span style="color :red">*</span> </div>
                                        <div class="card-body text-center">
                                            <?php     $tags_id =  "";
                      ///	$tags_id= explode(",",$tags_id)	
                        ?>
                                            <div class="form-grup">
                                                <select name="tags_id[]" id="tags_id" required
                                                    class="select2-example form-control" multiple>
                                                    <option value="">Select</option>
                                                    <?php foreach ($tag_result as $prow) 
                                    {     $gc_id=  $prow->b_tag_id; 
                                                $service_nm=  $prow->b_tag_name; 
                                          ?>
                                                    <option value="<?php echo $gc_id?>"><?php echo $service_nm?>
                                                    </option>

                                                    <?php   }  ?>
                                                </select>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">Blog Thumbnell <span style="color :red">*</span> </div>
                                        <div class="card-body text-center">
                                            <div class="form-row">
                                                <div class="col-md-12">

                                                    <img src="<?php echo base_url()?>assets/img/client/dumy_logo.png"
                                                        id="presm_profile" alt="profile-image"
                                                        style="max-width: 200px;">
                                                    <div class="form-group">
                                                        <label for="smallImage">Small Image</label>
                                                        <input name="smallImage" id="smallImage" type="file"
                                                            class="form-control" PreviewImage2 required>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header"> Publish </div>
                                        <div class="card-body text-center">
                                            <button class="btn btn-primary" type="submit"><i class="ti-save"></i> &nbsp;
                                                Save Blog</button>
                                        </div>
                                    </div>




                                </div>




                            </div>
                            <?php  echo form_close();?>




                        </div>
                    </div>
                </div>
                <?php  $this->load->view('admin/file/footer')?>
                <!-- ./ Content body -->
            </div>
            <!-- ./ Content wrapper -->
        </div>
        <!-- ./ Layout wrapper -->
    </div>
    <!-- Main scripts -->
    <script src="<?php echo base_url();?>assets/vendors/bundle.js"></script>

    <!-- Form validation example -->
    <script src="<?php echo base_url();?>assets/assets/js/examples/form-validation.js"></script>

    <!-- Prism -->
    <script src="<?php echo base_url();?>assets/vendors/prism/prism.js"></script>

    <!-- App scripts -->
    <script src="<?php echo base_url();?>assets/assets/js/app.min.js"></script>


    <script src="<?php echo base_url();?>assets/vendors/select2/js/select2.min.js"></script>


    <script src="<?= base_url("assets/tinymce/js/tinymce/tinymce.min.js"); ?>"></script>
    <script>
    tinymce.init({
        selector: ('#long_desc1'),
        theme: "modern",
        height: 500,
        relative_urls: false,
        remove_script_host: false,
        convert_urls: false,
        codesample_languages: [{
                text: 'HTML/XML',
                value: 'markup'
            },
            {
                text: 'JavaScript',
                value: 'javascript'
            },
            {
                text: 'CSS',
                value: 'css'
            },
            {
                text: 'PHP',
                value: 'php'
            },
            {
                text: 'Ruby',
                value: 'ruby'
            },
            {
                text: 'Python',
                value: 'python'
            },
            {
                text: 'Java',
                value: 'java'
            },
            {
                text: 'C',
                value: 'c'
            },
            {
                text: 'C#',
                value: 'csharp'
            },
            {
                text: 'C++',
                value: 'cpp'
            }
        ],
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking codesample",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager code "
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
        toolbar2: "| responsivefilemanager | link unlink anchor | codesample image media | forecolor backcolor  | print preview code ",
        image_advtab: true,

        external_filemanager_path: "<?php echo base_url(); ?>filemanager/",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {
            "filemanager": "<?php echo base_url(); ?>filemanager/plugin.min.js"
        }
    });
    </script>



    <!--   <script src="<?php echo base_url();?>assets/vendors/ckeditor5/ckeditor.js"></script>
    -->
    <!-- CKEditor -->

    <script>
    /* ClassicEditor   .create( document.querySelector( '#long_desc2' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
            })
		 	  ClassicEditor
          .create( document.querySelector( '#long_desc1' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
            }) */
    /* 		CKEDITOR.replace( 'editor1' );     CKEDITOR.replace('long_desc1',
	{
		 height: 300,
    filebrowserUploadMethod: 'form',
 	 filebrowserUploadUrl: 'upload2.php'	}
	); */
    /* 
     CKEDITOR.replace( 'long_desc1', {
      height: 300,
        filebrowserUploadMethod: 'form',
    	 
      filebrowserUploadUrl: "<?php echo base_url();?>blogs/external_img/"

     }); */
    </script>





    <script type="text/javascript">
    $('.select2-example').select2({
        placeholder: 'Select'
    });

    $('#tags_id').select2({
        placeholder: 'Select'
    });

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("largeImage").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("prelg_profile").src = oFREvent.target.result;
        };
    };

    function PreviewImage2() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("largeImage").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("prelg_profile").src = oFREvent.target.result;
        };
    };




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


    function convertToSlug(str) {
        //replace all special characters | symbols with a space
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
        // trim spaces at start and end of string
        str = str.replace(/^\s+|\s+$/gm, '');
        // replace space with dash/hyphen
        str = str.replace(/\s+/g, '-');
        document.getElementById('blog_url').value = str;
        document.getElementById('blog_slug').innerHTML = str;

    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#presm_profile').attr('src', e.target.result);

            }
            reader.readAsDataURL(input.files[0]);

        }
    }
    $("#smallImage").change(function() {
        readURL(this);

    });
    </script>




</body>

</html>