

<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie ie9" lang="en-US">
   <![endif]-->
<html lang="en-US">


<!-- Mirrored from jellywp.com/disto-preview/post-format-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 04:48:20 GMT -->
<!-- Added by HTTrack -->
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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




            <div class="mobile_menu_overlay"></div><!-- begin content -->
            <section id="content_main" class="clearfix jl_spost">
                <div class="container">
                    <div class="row main_content">
                        <div class="col-md-8  loop-large-post" id="content">
                            <div class="widget_container content_page">
                                <!-- start post -->

                                <?php foreach ($result as $row) {   $t_id = $row->blog_id; 			 $status = $row->blog_status;
							 $blog_url = $row->blog_url;		 $blogname = $row->blog_name;
							 $blog_date = $row->blog_date; 	 $author_id = $row->author_id; 
							 $short_info = $row->short_desc; 	$sm_img = $row->small_img; $lg_img = $row->long_img; 
                             $cat_idd = $row->category_id; ?>


                                <div class="post-2808 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-gaming tag-morning tag-relaxing"
                                    id="post-2808">
                                    <div class="single_section_content box blog_large_post_style">
                                        <div class="jl_single_style2">
                                            <div
                                                class="single_post_entry_content single_bellow_left_align jl_top_single_title jl_top_title_feature">
                                                <span class="meta-category-small single_meta_category">

                                                    <?php  $_cat = $this->db->query("SELECT * FROM `blog_category` WHERE  b_cat_id =$cat_idd ");
                                                                    
                                                                    foreach ($_cat->result() as $cat) {
                                                                        $cat_name = $cat->b_cat_name;
                                                                        $cat_urll = $cat->b_cat_url;
                                                                    }
                                                                    ?>
                                                    <a class="post-category-color-text" style="background:#0015ff"
                                                        href="<?= base_url("blog-categories/".$cat_urll)?>"><?php echo $cat_name; ?></a></span>

                                                <h1 class="single_post_title_main">
                                                    <?php echo ucfirst($row->blog_name)?></h1>
                                                <p class="post_subtitle_text">
                                                    <?php echo substr($row->short_desc,0,150); ?>
                                                </p>


                                                <?php  $author = $this->db->query("SELECT * FROM `admin_login` WHERE  user_id =$author_id ");
                                                                    
                                                                    foreach ($author->result() as $aut) {
                                                                        $author = $aut->name;
                                                                        $profile = $aut->profile;
                                                                    }
                                                                    ?>

                                                <span class="single-post-meta-wrapper"><span
                                                        class="post-author"><span><img
                                                                src="<?php echo  base_url()."assets/img/".$profile;?>"
                                                                width="50" height="50" alt="<?php echo $author; ?>"
                                                                class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo" /><a
                                                                href="#" title="Posts by<?php echo $author; ?>"
                                                                rel="author"><?php echo $author; ?></a></span></span><span
                                                        class="post-date updated"><i class="fa fa-clock-o"></i><?php 
                                                                echo date("M-Y",strtotime($blog_date));
                                                               ?>
                                            </div>
                                            <div class="single_content_header jl_single_feature_below">
                                                <div class="image-post-thumb jlsingle-title-above">
                                                    <img width="1000" height="668"
                                                        src="<?php echo base_url()."assets/img/blog/".$lg_img?>"
                                                        class="attachment-disto_justify_feature size-disto_justify_feature wp-post-image"
                                                        alt=" <?php echo $blogname; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post_content">


                                            <p> <?php echo $row->short_desc; ?>

                                            </p>

                                            <?php   $blog_ata=  $row->long_desc1; 
									      $category_id =  $row->category_id;?>

                                            <p><?php echo html_entity_decode($blog_ata);    ?></p>


                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="single_tag_share">
                                            <div class="tag-cat">

                                                <?php   $tags_id =  $row->tags_id;
											$tags_id= explode(",",$tags_id)	;?>


                                                <ul class="single_post_tag_layout">

                                                    <?php foreach ($tag_result as $prow) 
														{     $gc_id=  $prow->b_tag_id;  	$tag_url =$prow->b_tag_url; 
																	$service_nm=  $prow->b_tag_name; 
																	if (in_array($gc_id , $tags_id))
																	{	?>
                                                    <li><a href="#" rel="tag"><?= ucfirst($service_nm)?></a></li>

                                                    <?php 	} }?>
                                                </ul>
                                            </div>

                                            <div class="single_post_share_icons">
                                                Share<i class="fa fa-share-alt"></i></div>
                                        </div>
                                        <div class="single_post_share_wrapper">
                                            <div class="single_post_share_icons social_popup_close"><i
                                                    class="fa fa-close"></i></div>
                                            <ul class="single_post_share_icon_post">
                                                <li class="single_post_share_facebook"><a href="#" target="_blank"><i
                                                            class="fa fa-facebook"></i></a></li>
                                                <li class="single_post_share_twitter"><a href="#" target="_blank"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li class="single_post_share_pinterest"><a href="#" target="_blank"><i
                                                            class="fa fa-pinterest"></i></a></li>
                                                <li class="single_post_share_linkedin"><a href="#" target="_blank"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                                <li class="single_post_share_ftumblr"><a href="#" target="_blank"><i
                                                            class="fa fa-tumblr"></i></a></li>
                                            </ul>
                                        </div>



                                        <?php
// TO not get Error if blof is first or second
                                               $togetfirstblog=$this->db->query("SELECT * FROM `blog_tbl` WHERE blog_status= '1' ORDER BY blog_id ASC LIMIT 1");
                                     
                                               foreach ($togetfirstblog->result() as $brow) {
                                               $first_blogid= $brow->blog_id; 
                                               }
                                               $secondblogid=$first_blogid+1;


                                        if($t_id == $first_blogid || $t_id ==$secondblogid){ ?>

                                        <?php }else { ?>

                                        <div class="postnav_left">

                                            <?php 
                                          $blog_id  =  $row->blog_id; 
                                          $query = $this->db->query("SELECT * FROM blog_tbl WHERE blog_id < '$blog_id' ORDER BY blog_id LIMIT 1");
                                          $coutn_c = $query->num_rows();

             
                                        foreach ($query->result_array() as $rows)
                                        {  	?>
                                            <div class="single_post_arrow_content">
                                                <a href="<?= base_url()."blog/".$rows['blog_url'];?>" id="prepost">
                                                    <?php  echo $rows['blog_name'] ?> <span class="jl_post_nav_left">
                                                        Previous post</span></a>
                                            </div>
                                        </div>
                                        <?php  }  ?>




                                        <?php

                                         $blog_id  =  $row->blog_id; 
                                         $query2 = $this->db->query("SELECT * FROM blog_tbl WHERE blog_id > '$blog_id' ORDER BY blog_id LIMIT 1");
                                         $coutn_d = $query2->num_rows();
                                              if ( $coutn_d > 0 AND  $coutn_c > 0) {
                                         ?>

                                        <?php 
                                            }

                                          
                                         foreach ($query2->result_array() as $rowsd)
                                         {  	?>

                                        <div class="postnav_right">
                                            <div class="single_post_arrow_content">
                                                <a href="<?= base_url()."blog/".$rowsd['blog_url']; ?>" id="nextpost">
                                                    <?= $rowsd['blog_name'];?><span class="jl_post_nav_left">
                                                        Next post</span></a>
                                            </div>
                                        </div>

                                        <?php    } ?>


                                        <?php } ?>





                                        <?php if($row->blog_comment == "1"){ ?>


                                        <?php 
				           
                              
                           $blog_id  = $row->blog_id;  


                                $public_ip=  $this->input->ip_address();    $message="";
                          $comment_query = $this->db->query("SELECT * FROM `blog_camment` 
                          where blog_id='$blog_id' AND status='1' ORDER BY `blog_camment`.`cmt_id` DESC");
                      
                          foreach ($comment_query->result() as $crow)
                          {  
                              $ct_status = $crow->status;
                               $cpublic= $crow->public_ip;  
                              if ($ct_status == 1  OR $cpublic == $public_ip) {  }

                             ?>


                                        <div class="auth">
                                            <div class="author-info">
                                                <div class="author-avatar">
                                                    <img src="<?php echo base_url()?>web/img/user.png"
                                                        style="max-width:50px; max-height:50px"
                                                        alt="<?php echo $crow->name;?>"
                                                        class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo" />
                                                </div>
                                                <div class="author-description ">
                                                    <h5 style="margin-left:-75px"><a href="#">
                                                            <?php echo $crow->name;?></a></h5>
                                                    <p style="margin-left:-75px">
                                                        <?php echo  $message = $crow->message.$message;?></p>

                                                </div>
                                            </div>
                                        </div>

                                        <?php }   ?>

                                        <?php } ?>



                                        <div class="related-posts">

                                            <h4>
                                                Related Articles </h4>

                                            <div class="single_related_post">


                                                <?php  
										 $res= 	$this->Blog_model->get_recent_blog_catigiery_wise($cat_idd);
									 
										  foreach ($res as $key => $rowt) {
										   ?>


                                                <div class="jl_related_feature_items">
                                                    <div class="jl_related_feature_items_in">
                                                        <div class="image-post-thumb">
                                                            <a href="<?php echo base_url()."blog/".$rowt->blog_url;?>"
                                                                class="link_image featured-thumbnail"
                                                                title="People are enjoy the job that they love">
                                                                <img width="780" height="450"  style="max-height:180px; min-height:180px"
                                                                    src="<?php echo base_url()."assets/img/blog/".$rowt->long_img?>"
                                                                    class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                                    alt="" />
                                                                <div class="background_over_image"></div>
                                                            </a>
                                                        </div>

                                                        <?php  $_cat = $this->db->query("SELECT * FROM `blog_category` WHERE  b_cat_id =$rowt->category_id ");
                                                                    
                                                                    foreach ($_cat->result() as $cat) {
                                                                        $cat_name = $cat->b_cat_name;
                                                                        $cat_url = $cat->b_cat_url;
                                                                    }
                                                                    ?>

                                                        <span class="meta-category-small"><a
                                                                class="post-category-color-text"
                                                                style="background:#0015ff"
                                                                href="<?= base_url("blog-categories/".$cat_url)?>"><?php echo $cat_name; ?></a></span>




                                                        <div class="post-entry-content">
                                                            <h3 class="jl-post-title"><a
                                                                    href="<?php echo base_url()."blog/".$rowt->blog_url;?>">
                                                                    <?php echo $rowt->blog_name; ?></a></h3>




                                                            <?php  $author = $this->db->query("SELECT * FROM `admin_login` WHERE  user_id =$rowt->author_id ");
                                                                    
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
                                                                        href="<?php echo base_url()."blog/".$rowt->blog_url;?>"
                                                                        title="Posts by <?php echo $author; ?>"
                                                                        rel="author"><?php echo $author; ?></a></span><span
                                                                    class="post-date"><i class="fa fa-clock-o"></i><?php 
                                                                echo date("M-Y",strtotime($blog_date));
                                                               ?></span></span>
                                                        </div>

                                                    </div>

                                                </div>




                                                <?php } ?>

                                            </div>

                                        </div>
                                        <!-- comment -->

                                        <?php if($row->blog_comment == "1"){ ?>
                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a
                                                        rel="nofollow" id="cancel-comment-reply-link" href="#"
                                                        style="display:none;">Cancel reply</a></small></h3>
                                            <form action="<?= base_url()?>home/blog_comment" method="post"
                                                id="commentform" class="comment-form row g-3 needs-validation"
                                                novalidate>

                                                <input type="hidden" name="blog_id" id="blog_id"
                                                    value="<?php    echo $t_id;?>">
                                                <input type="hidden" name="url"
                                                    value="<?php echo base_url().$this->uri->uri_string();?>">




                                                <p class="comment-notes"><span id="email-notes">Your email address will
                                                        not be published.</span> Required fields are marked as<span
                                                        class="required text-danger"> <strong class="h5">!</strong> </span>
                                                </p>
                                                <p class="comment-form-comment">
                                                    <textarea class="u-full-width form-control " id="comment"
                                                        name="message" cols="45" rows="3" minlength="25"
                                                        aria-required="true" placeholder="Enter Your Comment Here"
                                                        required></textarea>
                                               

                                                </p>

                                                <div class="form-fields row"><span
                                                        class="comment-form-author col-md-4"><input id="author"
                                                            name="name" type="text" class="form-control" value=""
                                                            size="30" placeholder="Fullname" required>


                                                    </span>

                                                    <span class="comment-form-email col-md-4"><input id="email"
                                                            name="email" type="email" class="form-control" value=""
                                                            size="30" placeholder="Email Address" required>

                                                    </span>
                                                    <span class="comment-form-url col-md-4"><input id="phone"
                                                            name="mobile" type="text" value="" size="30"
                                                            class="form-control" placeholder="Mobile No"
                                                            onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                                            pattern="[0-9]+" maxlength="10" minlength="10">

                                                    </span>
                                                </div>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit" class="submit"
                                                        value="Post Comment">
                                                </p>
                                            </form>
                                        </div>

                                        <?php } ?>

                                        <!-- #respond -->

                                    </div>
                                </div>

                                <?php } ?>
                                <!-- end post -->
                                <div class="brack_space"></div>
                            </div>
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
                                                    <img width="120" height="120"  style="max-height:70px; min-height:70px"
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
                                                            href="<?php echo base_url()."blog/".$blog_url?>">
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
                            <div id="disto_recent_large_slider_widgets-5" class="widget jl_widget_slider">
                                <div class="slider_widget_post jelly_loading_pro">

                                    <?php  foreach ($_5blog as $brow) {
							 			          $blog_url= $brow->blog_url; $blog_idd= $brow->blog_id; $blog_imagee= $brow->small_img;
										                 $blog_name= $brow->blog_name; $author_id =$brow->author_id ?>

                                    <div class="recent_post_large_widget"> <span class="image_grid_header_absolute"
                                            style="background-image: url('<?php echo base_url()."assets/img/blog/".$blog_imagee?>')"></span>
                                        <a href="<?php echo base_url()."blog/".$blog_url?>"
                                            class="link_grid_header_absolute"
                                            title="Standing right here and singing until the mid"></a>


                                        <div class="wrap_box_style_main image-post-title">
                                            <h3 class="image-post-title"><a href="#"><?php echo $blog_name ; ?></a></h3>
                                            <span class="jl_post_meta"><span class="jl_author_img_w">

                                                    <?php  $author = $this->db->query("SELECT * FROM `admin_login` WHERE  user_id =$author_id ");
                                                                    
                                                                    foreach ($author->result() as $aut) {
                                                                        $author = $aut->name;
                                                                        $profile = $aut->profile;
                                                                    }
                                                                    ?>
                                                    <img src="<?php echo  base_url()."assets/img/".$profile;?>"
                                                        width="30" height="30" alt="Anna Nikova"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                        href="#" title="Posts by Anna Nikova"
                                                        rel="author"><?php echo $author ; ?>
                                                    </a></span><span class="post-date"><i class="fa fa-clock-o"></i><?php 
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
            </section>
            <!-- end content -->


            <!-- footer Files -->
            <?php  $this->load->view('includes/footer') ?>
            <!-- footer Files -->


        </div>
    </div>
    <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a></div>


    <!-- Script Files -->
    <?php  $this->load->view('includes/script') ?>
    <!-- Script Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
    </script>



</body>


</html>