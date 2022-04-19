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
                    style="background-image: url('<?php echo base_url()?>web/theme/disto/demo/wp-content/uploads/2019/02/daniel-korpai-1236913-unsplash-1920x982.jpg');">
                </div>
                <div class="category_image_bg_ov"></div>
                <div class="jl_cat_title_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 main_title_col">
                                <div class="jl_cat_mid_title">
                                    <h3 class="categories-title title">Disclaimer
                                    </h3>

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
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <p>Welcome to Make Extra Money!
                                    </p>
                                    <p>Disclaimer for EarnMoney
                                        .</p>
                                    <p>All the information on this website is published in good faith and for general
                                        information purpose only. http:// does not make any warranties about the
                                        completeness, reliability and accuracy of this information. Any action you take
                                        upon the information you find on this website (http://), is strictly at your own
                                        risk. We will not be liable for any losses and/or damages in connection with the
                                        use of our website.
                                    </p>

                                    <p>From our website, you can visit other websites by following hyperlinks to such
                                        external sites. While we strive to provide only quality links to useful and
                                        ethical websites, we have no control over the content and nature of these sites.
                                        These links to other websites do not imply a recommendation for all the content
                                        found on these sites. Site owners and content may change without notice and may
                                        occur before we have the opportunity to remove a link which may have gone ‘bad’.
                                    </p>
                                    <p>Please be also aware that when you leave our website, other sites may have
                                        different privacy policies and terms which are beyond our control. Please be
                                        sure to check the Privacy Policies of these sites as well as their “Terms of
                                        Service” before engaging in any business or uploading any information.

                                    </p>

                                    <ul class="mx-4">
                                        <li>
                                            <p><strong>Consent
                                                </strong> </p>
                                        </li>
                                        <li>
                                            <p>By using our website, you hereby consent to our disclaimer and agree to
                                                its terms.

                                            </p>
                                        </li>

                                        <li>
                                            <p><strong>Update
                                                </strong> </p>
                                        </li>
                                        <li>
                                            <p>This site disclaimer was last updated on:<strong> Thursday, March 31th,
                                                    2022</strong>. Should we update, amend or make any changes to this
                                                document, those changes will be prominently posted here.

                                            </p>
                                        </li>


                                        <p>If you have any questions about this Disclaimer, You can <a
                                                href="<?php echo base_url()?>home/contact">Contact Us</a></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" id="sidebar">
                            <div id="socialcountplus-2" class="widget widget_socialcountplus">
                                <div class="social-count-plus">
                                    <ul class="default">
                                        <li class="count-facebook">
                                            <a class="icon" href="https://www.facebook.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">likes</span></span>
                                        </li>
                                        <li class="count-instagram">
                                            <a class="icon" href="https://instagram.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>


                                        <li class="count-twitter">
                                            <a class="icon" href="https://twitter.com/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>


                                        <li class="count-linkedin">
                                            <a class="icon" href="https://www.linkedin.com/company/"
                                                rel="nofollow noopener noreferrer" target="_blank"></a><span
                                                class="items"><span class="count">20.5k</span><span
                                                    class="label">followers</span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div><span class="jl_none_space"></span>
                            <div id="disto_category_image_widget_register-5" class="widget jellywp_cat_image">
                                <div class="wrapper_category_image">
                                    <div class="category_image_wrapper_main">

                                        <?php  foreach ($cat_result as $cat) {
										       $cat_url =$cat->b_cat_url;  $b_cat_id  =$cat->b_cat_id;
                                               $cat_img  =$cat->cat_img;?>

                                        <div class="category_image_bg_image"
                                            style="background-image: url('<?php echo  base_url()."assets/img/category/".$cat_img;?>');">
                                            <a class="category_image_link" id="category_color_2"
                                                href="<?= base_url("blog-categories/".$cat_url)?>"><span
                                                    class="jl_cm_overlay"><span
                                                        class="jl_cm_name"><?= ucfirst($cat->b_cat_name)?></span><span
                                                        class="jl_cm_count"><?php  $count=   $this->Blog_model->count_blogs_by_cati_id($b_cat_id);
									
                                                print_r($count);?></span></span></a>
                                            <div class="category_image_bg_overlay" style="background: #ed1c1c;"></div>
                                        </div>

                                        <?php  }  ?>

                                    </div> <span class="jl_none_space"></span>
                                </div>
                            </div>
                            <span class="jl_none_space"></span>
                            
                    
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