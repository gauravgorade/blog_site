<?php
foreach ($result as $rowww) {  
    $lastbgid = $rowww['blog_id']; 			 
};
?>

<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

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
            <div class="jl_home_bw">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 jl_mid_main_3col">
                            <div class="jl_3col_wrapin">
                                <div id="pl-3375" class="panel-layout">
                                    <div id="pg-3375-0" class="panel-grid panel-no-style">
                                        <div id="pgc-3375-0-0" class="panel-grid-cell">
                                            <div class="jelly_homepage_builder jl_car_home jl_nonav_margin">
                                                <div class="jl_wrapper_row">
                                                    <div
                                                        class="row jelly_loading_pro jelly_cus_h717 jl_fontsize22 jl_builder_4carousel car_style2  jl_hide_author jl_hide_author_img jl_hide_date jl_hide_arrow ">

                                                        <!-- special cat -->


                                                        <?php  				
					  foreach ($special_cat as $cat) {  
                        $cat_name = $cat->b_cat_name;
                        $cat_url = $cat->b_cat_url;
                        $cat_desc = $cat->cat_desc;
                        $cat_img = $cat->cat_img;
	 	
						 ?>


                                                        <div class="col-md-3">
                                                            <div class="jl_car_wrapper">
                                                                <div class="jl_car_img_front"> <span
                                                                        class="image_grid_header_absolute"
                                                                        style="background-image: url('<?php echo  base_url()."assets/img/category/".$cat_img;?>')"></span>
                                                                    <a href="<?= base_url("blog-categories/".$cat_url)?>"
                                                                        class="link_grid_header_absolute"
                                                                        title=" <?php echo $cat_desc ; ?>"></a>
                                                                    <span class="meta-category-small"><a
                                                                            class="post-category-color-text"
                                                                            style="background:#0015ff"
                                                                            href="<?= base_url("blog-categories/".$cat_url)?>"><?= ucfirst($cat->b_cat_name)?></a></span>
                                                                </div>
                                                                <div class="post-entry-content"> <span
                                                                        class="meta-category-small"><a
                                                                            class="post-category-color-text" style="background:<?php $length = strlen($cat_desc);
                                                                        if($length < 50){
                                                                            echo '#ed1c1c';
                                                                        }else if($length >= 50  && $length < 60){
                                                                            echo '#6b34ba';
                                                                        }else if($length >= 60 && $length < 70){
                                                                            echo '#d800f9';
                                                                        }else if($length >= 70 && $length < 80){
                                                                            echo '#0015ff';
                                                                  
                                                                        }else if($length >= 80 && $length < 90){
                                                                            echo '#ff702d';
                                                                   
                                                                        }else if($length >=90){
                                                                            echo '#ff2de5';
                                                                        }
                                                                            ?>"
                                                                            href="<?= base_url("blog-categories/".$cat_url)?>"><?= ucfirst($cat->b_cat_name)?></a></span>
                                                                    <h3 class="image-post-title"><a
                                                                            href="<?= base_url("blog-categories/".$cat_url)?>">
                                                                            <?php echo $cat_desc ; ?></a></h3>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php } ?>
                                                        <!-- special cat  end-->

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jl_main_with_right_post jelly_homepage_builder">
                                                <div class="homepage_builder_title">
                                                    <h2 class="builder_title_home_page">
                                                        trending </h2>
                                                </div>
                                                <!-- last -->


                                                <?php  				
					  foreach ($last_blog as $row) {  
                    	 	 $t_id = $row->blog_id; 			 $status = $row->blog_status;
							 $blog_url = $row->blog_url;		 $blogname = $row->blog_name;
							 $blog_date = $row->blog_date; 	 $author_id = $row->author_id; 
							 $short_info = $row->short_desc; 	$sm_img = $row->small_img; $lg_img = $row->long_img; 
                             $cat_idd = $row->category_id;
	 	
						 ?>


                                                <div class="jl_main_post_style_padding">
                                                    <div class="jl_main_post_style"> <span
                                                            class="image_grid_header_absolute"
                                                            style="background-image: url('<?php echo base_url()."assets/img/blog/".$lg_img?>"></span>
                                                        <a href="<?php echo base_url()."blog/".$blog_url?>"
                                                            class="link_grid_header_absolute"
                                                            title="  <?php echo $blogname; ?>"></a>
                                                        <div class="post-entry-content">

                                                            <?php  $_cat = $this->db->query("SELECT * FROM `blog_category` WHERE  b_cat_id =$cat_idd ");
                                                                    
                                                                    foreach ($_cat->result() as $cat) {
                                                                        $cat_name = $cat->b_cat_name;
                                                                        $cat_urll = $cat->b_cat_url;
                                                                    }
                                                                    ?>

                                                            <span class="meta-category-small"><a
                                                                    class="post-category-color-text"
                                                                    style="background:#0015ff"
                                                                    href="<?= base_url("blog-categories/".$cat_url)?>"><?php echo $cat_name; ?></a></span>
                                                            <h3 class="image-post-title"><a
                                                                    href="<?php echo base_url()."blog/".$blog_url?>">
                                                                    <?php echo $blogname; ?></a></h3>
                                                            <span class="jl_post_meta"><span class="jl_author_img_w">


                                                                    <?php  $author = $this->db->query("SELECT * FROM `admin_login` WHERE  user_id =$author_id ");
                                                                    
                                                                    foreach ($author->result() as $aut) {
                                                                        $author = $aut->name;
                                                                        $profile = $aut->profile;
                                                                    }
                                                                    ?>

                                                                    <img src="<?php echo  base_url()."assets/img/".$profile;?>"
                                                                        width="30" height="30"
                                                                        alt="<?php echo $author; ?>"
                                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                        href="<?php echo base_url()."blog/".$blog_url?>"
                                                                        title="Posts by <?php echo $author; ?>"
                                                                        rel="author"><?php echo $author; ?></a></span><span
                                                                    class="post-date"><i class="fa fa-clock-o"></i><?php 
                                                                echo date("M-Y",strtotime($blog_date));
                                                               ?></span></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php } ?>

                                                <!-- last -->

                                                <!-- side (last) -->

                                                <?php  				
					                               foreach ($rand as $row) {  
                                                 	 	 $t_id = $row->blog_id; 			 $status = $row->blog_status;
					                             		 $blog_url = $row->blog_url;		 $blogname = $row->blog_name;
					                             		 $blog_date = $row->blog_date; 	 $author_id = $row->author_id; 
					                             		 $short_info = $row->short_desc; 	$sm_img = $row->small_img; $lg_img = $row->long_img; 
                                                          $cat_id = $row->category_id;
	 	
					                             	 ?>

                                                <div class="jl_list_post_wrapper">
                                                    <a href="<?php echo base_url()."blog/".$blog_url?>"
                                                        class="jl_small_format feature-image-link image_post featured-thumbnail">
                                                        <img width="120" height="120"
                                                            style="max-height:75px; min-height:75px"
                                                            src="<?php echo base_url()."assets/img/blog/".$sm_img?>"
                                                            class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                            alt=" <?php echo $blogname; ?>" />
                                                        <div class="background_over_image"></div>
                                                    </a>
                                                    <div class="item-details">

                                                        <?php  $_cat = $this->db->query("SELECT * FROM `blog_category` WHERE  b_cat_id =$cat_id ");
                                                                    
                                                                    foreach ($_cat->result() as $cat) {
                                                                        $cat_name = $cat->b_cat_name;
                                                                        $cat_url = $cat->b_cat_url;
                                                                    }
                                                                    ?>

                                                        <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#0015ff"
                                                                href="<?= base_url("blog-categories/".$cat_url)?>"><?php echo $cat_name; ?></a></span>


                                                        <h3 class="feature-post-title"><a
                                                                href="<?php echo base_url()."blog/".$blog_url?>">
                                                                <?php echo $blogname; ?></a></h3>
                                                        <span class="post-meta meta-main-img auto_image_with_date">
                                                            <span class="post-date"><i class="fa fa-clock-o"></i><?php 
                                                                echo date("M-Y",strtotime($blog_date));
                                                               ?></span></span>
                                                    </div>
                                                </div>


                                                <?php } ?>

                                                <!-- side (last) -->

                                            </div>
                                            <span class="jl_none_space"></span>

                                            <span class="jl_none_space"></span>



                                            <!-- ads -->

                                            <div class="ads300x250-thumb">
                                                <a href="#">
                                                    <img src="<?php echo base_url()?>web/img/ads.jpg" alt="" />
                                                </a>
                                            </div>

                                            <!-- ads -->




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="jl_home_section jl_home_slider">

                            <div class="container">


                                <div class="row">
                                    <div class="col-md-8 grid-sidebar" id="content">
                                        <!-- start grid sidebar -->
                                        <div
                                            class="jelly_homepage_builder jl_nonav_margin homepage_builder_3grid_post jl_fontsize22  jl_cus_grid2   colstyle1    ">
                                            <div class="homepage_builder_title">
                                                <h2 class="builder_title_home_page">
                                                    More From us </h2>
                                            </div>
                                            <div class="jl_wrapper_row jl-post-block-416765">
                                                <div class="row">

                                                    <?php  				
					                                      foreach ($result as $row) {  
                                                        	 	 $t_id = $row['blog_id']; 			 $status = $row['blog_status'];
					                                    		 $blog_url = $row['blog_url'];		 $blogname = $row['blog_name'];
					                                    		 $blog_date = $row['blog_date']; 	 $author_id = $row['author_id']; 
					                                    		 $short_info = $row['short_desc']; 	$sm_img = $row['small_img']; 
                                                                 $cat_id = $row['category_id'];
	 	                                    
					                                    	 ?>


                                                    <div class="box blog_grid_post_style  jl_row_1" style="margin:-5px">
                                                        <div class="jl_grid_box_wrapper">
                                                            <div class="image-post-thumb">
                                                                <a href="<?php echo base_url()."blog/".$blog_url?>"
                                                                    class="link_image featured-thumbnail"
                                                                    title="<?php echo $blogname; ?>">
                                                                    <img width="780" height="450"
                                                                        style="max-height:200px; min-height:200px"
                                                                        src="<?php echo base_url()."assets/img/blog/".$sm_img?>"
                                                                        class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                        alt="<?php echo $blogname; ?>" />
                                                                    <div class="background_over_image"></div>

                                                                    <?php  $_cat = $this->db->query("SELECT * FROM `blog_category` WHERE  b_cat_id =$cat_id ");
                                                                    
                                                                    foreach ($_cat->result() as $cat) {
                                                                        $cat_name = $cat->b_cat_name;
                                                                        $cat_url = $cat->b_cat_url;
                                                                    }
                                                                    ?>
                                                                </a> <span class="meta-category-small"><a
                                                                        class="post-category-color-text"
                                                                        style="background:#6b34ba"
                                                                        href="<?= base_url("blog-categories/".$cat_url)?>"><?php echo $cat_name; ?></a>
                                                            </div>
                                                            <div class="post-entry-content">
                                                                <h3 class="image-post-title"><a
                                                                        href="<?php echo base_url()."blog/".$blog_url?>">
                                                                        <?php echo $blogname; ?></a>
                                                                </h3>

                                                                <?php  $author = $this->db->query("SELECT * FROM `admin_login` WHERE  user_id =$author_id ");
                                                                    
                                                                    foreach ($author->result() as $aut) {
                                                                        $author = $aut->name;
                                                                        $profile = $aut->profile;
                                                                    }
                                                                    ?>

                                                                <span class="jl_post_meta"><span
                                                                        class="jl_author_img_w"><img
                                                                            src="<?php echo  base_url()."assets/img/".$profile;?>"
                                                                            width="30" height="30"
                                                                            alt="<?php echo $author; ?>"
                                                                            class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                            href="<?php echo base_url()."blog/".$blog_url?>"
                                                                            title="Posts by <?php echo $author; ?>"
                                                                            rel="author"><?php echo $author; ?></a></span><span
                                                                        class="post-date"><i class="fa fa-clock-o"></i><?php 
                                                                echo date("M-Y",strtotime($blog_date));
                                                               ?></span></span>
                                                                <div class="content_post_grid">
                                                                    <p><?php echo substr($short_info,0,100); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php  } ?>

                                                    <div class="clear_line_3col_home"></div>

                                                    <div class="clear_line_3col_home"></div>


                                                    <?php if($result){ ?>
                                                    <div class="jl-loadmore-btn-w"><a
                                                            href="<?php echo  base_url()."n/".$lastbgid;?>"
                                                            class="jl_btn_load">Load
                                                            more</a>
                                                    </div>

                                                    <?php } else{ ?>
                                                 
                                                    <div class="jl-loadmore-btn-w"><a href="<?php echo  base_url()?>"
                                                            class="jl_btn_load">Go back </a>
                                                            
                                                    </div>
                                                    <center>END OF PAGE</center>


                                                    <?php } ?>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- end grid sidebar -->
                                    </div>
                                    <!-- start sidebar -->
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
                                        <div id="disto_category_image_widget_register-5"
                                            class="widget jellywp_cat_image">
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
                                                        <div class="category_image_bg_overlay"
                                                            style="background: #ed1c1c;"></div>
                                                    </div>

                                                    <?php  }  ?>

                                                </div> <span class="jl_none_space"></span>
                                            </div>
                                        </div>
                                        <span class="jl_none_space"></span>
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
                                                            <a href="<?php echo base_url()."blog/".$blog_url?>"
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
                                                                        class="post-category-color-text"
                                                                        style="background:#d800f9"
                                                                        href="<?= base_url("blog-categories/".$cat_url)?>"><?php echo $cat_name;?></a></span>
                                                                <h3 class="feature-post-title"><a
                                                                        href="<?php echo base_url()."blog/".$blog_url?>">
                                                                        <?php echo $blog_name ;?></a></h3>
                                                                <span
                                                                    class="post-meta meta-main-img auto_image_with_date">
                                                                    <span class="post-date"><i
                                                                            class="fa fa-clock-o"></i><?php 
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
                                        <div id="disto_recent_large_slider_widgets-5" class="widget jl_widget_slider">
                                            <div class="slider_widget_post jelly_loading_pro">

                                                <?php  foreach ($_5blog as $brow) {
							 			          $blog_url= $brow->blog_url; $blog_iddd= $brow->blog_id; $blog_imagee= $brow->small_img;
										          $blog_name= $brow->blog_name; $author_id =$brow->author_id;

                                                ?>

                                                <div class="recent_post_large_widget"> <span
                                                        class="image_grid_header_absolute"
                                                        style="background-image: url('<?php echo base_url()."assets/img/blog/".$blog_imagee?>')"></span>
                                                    <a href="<?php echo base_url()."blog/".$blog_url?>"
                                                        class="link_grid_header_absolute"
                                                        title="<?php echo $blog_name ; ?>"></a>


                                                    <div class="wrap_box_style_main image-post-title">
                                                        <h3 class="image-post-title"><a
                                                                href="#"><?php echo $blog_name ; ?></a></h3>
                                                        <span class="jl_post_meta"><span class="jl_author_img_w">


                                                                <img src="<?php echo  base_url()."assets/img/".$profile;?>"
                                                                    width="30" height="30" alt="<?php echo $author ; ?>"
                                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                    href="#" title="Posts by <?php echo $author ; ?>"
                                                                    rel="author"><?php echo $author ; ?>
                                                                </a></span><span class="post-date"><i
                                                                    class="fa fa-clock-o"></i><?php 
                                                                echo date("M-Y",strtotime($brow->blog_date));
                                                               ?></span></span>
                                                    </div>
                                                </div>

                                                <?php } ?>

                                            </div>
                                            <span class="jl_none_space"></span>
                                        </div>
                                    </div>
                                    <!-- end sidebar -->
                                </div>



                            </div>
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