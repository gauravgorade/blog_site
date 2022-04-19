 <!-- Start header -->
 <header
     class="header-wraper jl_header_magazine_style two_header_top_style header_layout_style3_custom jl_cusdate_head">

     <!-- Start Main menu -->
     <div class="jl_blank_nav"></div>
     <div id="menu_wrapper" class="menu_wrapper jl_menu_sticky jl_stick ">
         <div class="container">
             <div class="row">
                 <div class="main_menu col-md-12">
                     <div class="logo_small_wrapper_table">
                         <div class="logo_small_wrapper">
                             <!-- begin logo -->
                             <a class="logo_link" href="<?php echo base_url()?>">
                                 <img style="min-height:150px; margin-top:-30px"  src="<?php echo base_url()?>web/img/logo.jpg" alt="LOGO" />
                             </a>
                             <!-- end logo -->
                         </div>
                     </div>
                     <!-- main menu -->
                     <div class="menu-primary-container navigation_wrapper " style="padding-top:20px">
                         <ul id="mainmenu" class="jl_main_menu ">
                             <li> <a href="<?php echo base_url()?>">Home<span class="border-menu"></span></a>

                             </li>
                             <li class="menu-item menu-item-has-children"> <a href="#">Category's<span
                                         class="jl_menu_lb jl_lb_blue">New</span><span class="border-menu"></span></a>
                                 <ul id="cat_scroll" class="sub-menu">

                                     <?php
                                      $cat_head=$this->db->query("SELECT * FROM `blog_category` WHERE b_cat_status= '1' ");
                                                foreach ($cat_head->result() as $cat){
                                                 $cat_name = $cat->b_cat_name;
                                                  $cat_url = $cat->b_cat_url;   
                                          ?>

                                     <li class="menu-item"><a
                                             href="<?= base_url("blog-categories/".$cat_url)?>"><?php echo $cat_name;?><span
                                                 class="border-menu"></span></a>
                                     </li>

                                     <?php } ?>



                                 </ul>
                             </li>


                             <li class="menupost menu-item"> <a href="#">Best Topics<span
                                         class="jl_menu_lb jl_lb_red">Hot</span><span class="border-menu"></span></a>
                                 <ul class="sub-menu menu_post_feature">
                                     <li> <span class="jl_none_space"></span>
                                         <div id="disto_recent_large_widgets-2" class="widget main_post_style"> <span
                                                 class="jl_none_space"></span>
                                             <div class="jl_recent_large">

                                                 <!-- best Topics -->

                                                 <?php     $recent_blogss=$this->db->query("SELECT * FROM `blog_tbl` WHERE blog_status= '1' ORDER BY RAND() LIMIT 4");
                                     
                                     foreach ($recent_blogss->result() as $brow) {
                                     $blog_url= $brow->blog_url;  $author_id = $brow->author_id;   $blog_date = $brow->blog_date;  $blog_idd= $brow->blog_id; $blog_imagee= $brow->small_img;
                                     $blog_name= $brow->blog_name; $cat_idd= $brow->category_id ?>

                                                 <div class="recent_post_large_widget">
                                                     <div class="image_post feature-item featured-thumbnail">
                                                         <a href="<?php echo base_url()."blog/".$blog_url?>"
                                                             class="feature-link" title="<?php echo $blog_name ;?>">




                                                             <img width="400" height="280"
                                                                 style="max-height:150px; min-height:150px"
                                                                 src="<?php echo base_url()."assets/img/blog/".$blog_imagee?>"
                                                                 class="attachment-disto_slider_grid_small size-disto_slider_grid_small wp-post-image"
                                                                 alt="<?php echo $blog_name ;?>" />
                                                             <div class="background_over_image"></div>

                                                         </a>

                                                         <!-- Category here but not showing now -->
                                                         <?php  $_catt = $this->db->query("SELECT * FROM `blog_category` WHERE  b_cat_id =$cat_idd ");
                                                                    
                                                                  
                                                                    foreach ($_catt->result() as $cat) {
                                                                        $cat_namee = $cat->b_cat_name;
                                                                        $cat_urll = $cat->b_cat_url;
                                                                    }
                                                                    ?>

                                                         <span class="meta-category-small"><a
                                                                 class="post-category-color-text"
                                                                 style="background:#6b34ba"
                                                                 href="<?= base_url("blog-categories/".$cat_urll)?>"><?php echo $cat_namee; ?></a>
                                                             <!-- Category here but not showing now -->
                                                     </div>
                                                     <div class="wrap_box_style_main image-post-title">
                                                         <div class="title_content_wrapper">
                                                             <h3 class="image-post-title"><a
                                                                     href="<?php echo base_url()."blog/".$blog_url?>">
                                                                     <?php echo $blog_name ;?></a>
                                                             </h3>


                                                             <?php  $author = $this->db->query("SELECT * FROM `admin_login` WHERE  user_id =$author_id ");
                                                                    
                                                                    foreach ($author->result() as $aut) {
                                                                        $author = $aut->name;
                                                                        $profile = $aut->profile;
                                                                    }
                                                                    ?>

                                                             <span class="jl_post_meta"><span class="jl_author_img_w">

                                                                     <img src="<?php echo  base_url()."assets/img/".$profile;?>"
                                                                         width="30" height="30"
                                                                         alt="<?php echo $author; ?>"
                                                                         class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                         href="<?php echo base_url()."blog/".$blog_url?>"
                                                                         title="Posts by <?php echo $author; ?>"
                                                                         rel="author"><?php echo $author; ?></a></span><span
                                                                     class="post-date"><i class="fa fa-clock-o"></i><?php 
                                                                echo date("M-Y",strtotime($blog_date)); 
                                                                
                                                             
                                                               ?></span>
                                                                 <!-- CAt placed for Temp -->
                                                                 <span
                                                                     class="jl_menu_lb jl_lb_red"><?php echo $cat_namee; ?>
                                                                 </span>
                                                                 <!-- CAt placed for Temp -->

                                                             </span>
                                                         </div>
                                                     </div>
                                                 </div>

                                                 <?php } ?>
                                                 <!-- best Topics End -->

                                             </div> <span class="jl_none_space"></span>
                                         </div>
                                     </li>
                                 </ul>
                             </li>

                             <li class="menu-item"><a href="<?php echo base_url()?>home/about">About <span
                                         class="border-menu"></span></a>
                             </li>
                             <li class="menu-item"><a href="<?php echo base_url()?>home/contact">Contact<span
                                         class="border-menu"></span></a>
                             </li>



                         </ul>
                     </div>
                     <!-- end main menu -->
                     <div class="search_header_menu">
                         <div class="menu_mobile_icons"><i class="fa fa-bars"></i>
                         </div>
                         <div class="search_header_wrapper search_form_menu_personal_click"><i class="fa fa-search"></i>
                         </div>
                         <div class="menu_mobile_share_wrapper">
                             <ul class="social_icon_header_top">
                                 <li><a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                 </li>
                                 <li><a href="#" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                                 </li>
                                 <li><a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                 </li>
                                 <li><a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- end header -->
 <div id="content_nav" class="jl_mobile_nav_wrapper">
     <div id="nav" class="jl_mobile_nav_inner">
         <div class="menu_mobile_icons mobile_close_icons closed_menu"><span class="jl_close_wapper"><span
                     class="jl_close_1"></span><span class="jl_close_2"></span></span>
         </div>
         <ul id="mobile_menu_slide" class="menu_moble_slide">
             <li> <a href="<?php echo base_url()?>">Home<span class="border-menu"></span></a>

             </li>
             <li id="cat_scroll" class="menu-item menu-item-has-children"> <a href="#">Category's<span
                         class="jl_menu_lb jl_lb_blue">New</span><span class="border-menu"></span></a>
                 <ul id="cat_scroll" class="sub-menu">

                     <?php
                 $cat_head=$this->db->query("SELECT * FROM `blog_category` WHERE b_cat_status= '1' ");
                           foreach ($cat_head->result() as $cat){
                            $cat_name = $cat->b_cat_name;
                             $cat_url = $cat->b_cat_url;   
                     ?>

                     <li class="menu-item"><a
                             href="<?= base_url("blog-categories/".$cat_url)?>"><?php echo $cat_name;?><span
                                 class="border-menu"></span></a>
                     </li>

                     <?php } ?>

                 </ul>
             </li>

             <li class="menu-item"><a href="<?php echo base_url()?>home/about">About <span
                         class="border-menu"></span></a>
             </li>
             <li class="menu-item"><a href="<?php echo base_url()?>home/contact">Contact<span
                         class="border-menu"></span></a>
             </li>

         </ul> <span class="jl_none_space"></span>
         <div id="disto_about_us_widget-2" class="widget jellywp_about_us_widget">
             <div class="widget_jl_wrapper about_widget_content">
                 <div class="jellywp_about_us_widget_wrapper">
                     <div class="social_icons_widget">
                         <ul class="social-icons-list-widget icons_about_widget_display">
                             <li><a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                             </li>
                             <li><a href="#" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                             </li>
                             <li><a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                             </li>
                             <li><a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                             </li>
                         </ul>
                     </div>
                 </div> <span class="jl_none_space"></span>
             </div>
         </div>
     </div>
 </div>
 <div class="search_form_menu_personal">
     <div class="menu_mobile_large_close"><span class="jl_close_wapper search_form_menu_personal_click"><span
                 class="jl_close_1"></span><span class="jl_close_2"></span></span>
     </div>


     <?php
         $attributes = array('class' => 'searchform_theme', 'id' => 'myform');
         echo form_open('blog-search', $attributes); ?>

     <input type="text" placeholder="Search..." value="" required name="serchname" class="search_btn" />
     <span>
         <button type="submit" name='submit' value='Submit' class="btn btn-outline-primary btn-lg "
             style="margin-top:20px; margin-left:40%; ">Primary</button>

     </span>


     <?php  echo form_close();?>
 </div>