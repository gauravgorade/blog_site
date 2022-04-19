<!DOCTYPE html>


<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Title-->
    <title>Disto - HTML Blog Magazine Theme</title>

    <!-- Link Files -->
    <?php  $this->load->view('includes/link') ?>
    <!-- Link Files -->


    <!-- end head -->
</head>

<body class="mobile_nav_class jl-has-sidebar">



    <!-- Preloader -->
    <div class="loader"><span>Loading...</span></div>
    <!-- Preloader -->

    <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
        <div class="options_layout_container full_layout_enable_front">



            <!-- header Files -->
            <?php  $this->load->view('includes/header') ?>
            <!-- header Files -->



            <div class="mobile_menu_overlay"></div>
            <div class="main_title_wrapper category_title_section jl_cat_img_bg">
                <div class="category_image_bg_image"
                    style="background-image: url('<?php echo base_url()?>web/theme/disto/demo/wp-content/uploads/2019/02/angel-jimenez-168185-unsplash-1-780x450.jpg');">
                </div>
                <div class="category_image_bg_ov"></div>
                <div class="jl_cat_title_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 main_title_col">
                                <div class="jl_cat_mid_title">
                                    <h3 class="categories-title title">About us</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jl_post_loop_wrapper">
                <div class="container" id="wrapper_masonry">
                    <div class="row">
                        <div class="col-md-8 grid-sidebar" id="content">
                            <div class="jl_wrapper_cat">
                                <b style="font-size:18px">
                                    About Us

                                    <br>
                                    <p>
                                        Welcome to Earn Money, your number one source for all things earn money. We’re
                                        dedicated to providing you the best of information, with a focus on
                                        dependability.

                                    </p>
                                    <p>
                                        We’re working to turn our passion for blogs into a booming online store. We hope
                                        you enjoy our service as much as we enjoy offering them to you.

                                    </p>

                                    <p>Sincerely,
                                    </p>

                                    <p>Earn Money</p>


                                </b>

                            </div>
                        </div>
                        <div class="col-md-4" id="sidebar">


                            <div id="disto_recent_post_widget-7" class="widget post_list_widget">
                                <div class="widget_jl_wrapper"><span class="jl_none_space"></span>
                                    <div class="widget-title">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div>
                                        <ul class="feature-post-list recent-post-widget">

                                            <?php  foreach ($recent_blogs as $brow) {
                                                $blog_url= $brow->blog_url; $blog_idd= $brow->blog_id; $blog_imagee= $brow->small_img;
                                                $blog_name= $brow->blog_name;  ?>

                                            <li>
                                                <a href="<?php echo base_url().$blog_url;?>"
                                                    class="jl_small_format feature-image-link image_post featured-thumbnail"
                                                    title="<?php echo $blog_name ;?>">
                                                    <img width="120" height="120"
                                                        style="max-height:70px; min-height:70px"
                                                        src="<?php echo base_url()."assets/img/blog/".$blog_imagee?>"
                                                        class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                        alt="<?php echo $blog_name ;?>" />
                                                    <div class="background_over_image"></div>
                                                </a>
                                                <div class="item-details">
                                                    <?php  $_cat = $this->db->query("SELECT * FROM `blog_category` WHERE  b_cat_id =$brow->category_id ");
            
            foreach ($_cat->result() as $cat) {
                $cat_name = $cat->b_cat_name;
                $cat_url = $cat->b_cat_url;
            }
            ?>
                                                    <span class="meta-category-small"><a
                                                            class="post-category-color-text" style="background:#d800f9"
                                                            href="<?= base_url("blog-categories/".$cat_url)?>"><?php echo $cat_name;?></a></span>
                                                    <h3 class="feature-post-title"><a
                                                            href="<?php echo base_url().$blog_url;?>">
                                                            <?php echo $blog_name ;?></a></h3>
                                                    <span class="post-meta meta-main-img auto_image_with_date">
                                                        <span class="post-date"><i class="fa fa-clock-o"></i><?php 
        echo date("M-Y",strtotime($brow->blog_date));
       ?></span></span>
                                                </div>
                                            </li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                    <span class="jl_none_space"></span>
                                </div>
                            </div><span class="jl_none_space"></span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->


            <!-- footer Files -->
            <?php  $this->load->view('includes/footer') ?>
            <!-- footer Files -->


        </div>
    </div>
    <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a>
    </div>


    <!-- Script Files -->
    <?php  $this->load->view('includes/script') ?>
    <!-- Script Files -->

</body>



</html>