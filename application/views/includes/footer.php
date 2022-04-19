 <!-- Start footer -->
 <footer id="footer-container" class=" enable_footer_columns_dark">
     <div class="footer-columns">
         <div class="container">
             <div class="row">
                 <div class="col-md-4"> <span class="jl_none_space"></span>
                     <div id="disto_about_us_widget-3" class="widget jellywp_about_us_widget">
                         <div class="widget_jl_wrapper about_widget_content"> <span class="jl_none_space"></span>
                             <div class="widget-title">
                                 <h2>About us</h2>
                             </div>
                             <div class="jellywp_about_us_widget_wrapper">
                                 <p>
                                     Welcome to Earn Money, your number one source for all things earn money. We’re
                                     dedicated to providing you the best of information, with a focus on dependability.
                                     <br>
                                     We hope
                                     you enjoy our service as much as we enjoy offering them to you.
                                     <br>
                                     Sincerely,
                                     <br>
                                     Earn Money
                                 </p>
                                 <div class="social_icons_widget">
                                     <ul class="social-icons-list-widget icons_about_widget_display">
                                         <li><a href="#" class="facebook" target="_blank"><i
                                                     class="fa fa-facebook"></i></a>
                                         </li>
                                         <li><a href="#" class="instagram" target="_blank"><i
                                                     class="fa fa-instagram"></i></a>
                                         </li>
                                         <li><a href="#" class="twitter" target="_blank"><i
                                                     class="fa fa-twitter"></i></a>
                                         </li>
                                         <li><a href="#" class="linkedin" target="_blank"><i
                                                     class="fa fa-linkedin"></i></a>
                                         </li>


                                     </ul>
                                 </div>
                             </div> <span class="jl_none_space"></span>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4"> <span class="jl_none_space"></span>
                     <div id="disto_recent_post_widget-3" class="widget post_list_widget">
                         <div class="widget_jl_wrapper"> <span class="jl_none_space"></span>
                             <div class="widget-title">
                                 <h2>Posts</h2>
                             </div>
                             <div>
                                 <ul class="feature-post-list recent-post-widget">

                                     <?php 

                                     $recent_blogs=$this->db->query("SELECT * FROM `blog_tbl` WHERE blog_status= '1' ORDER BY RAND() LIMIT 2");
                                     
                                     foreach ($recent_blogs->result() as $brow) {
                                     $blog_url= $brow->blog_url; $blog_idd= $brow->blog_id; $blog_imagee= $brow->small_img;
                                     $blog_name= $brow->blog_name;  ?>

                                     <li>
                                         <a href="<?php echo base_url()."blog/".$blog_url?>"
                                             class="jl_small_format feature-image-link image_post featured-thumbnail"
                                             title="<?php echo $blog_name ;?>">
                                             <img width="120" height="120"  style="max-height:90px; min-height:90px"
                                                 src="<?php echo base_url()."assets/img/blog/".$blog_imagee?>"
                                                 class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                                                 alt="<?php echo $blog_name ;?>" />
                                             <div class="background_over_image"></div>
                                         </a>
                                         <div class="item-details">
                                             <?php  $_cat = $this->db->query("SELECT * FROM `blog_category` WHERE  b_cat_id =$brow->category_id");
            
                                             foreach ($_cat->result() as $cat) {
                                                   $cat_name = $cat->b_cat_name;
                                                    $cat_url = $cat->b_cat_url;
                                                 }
                                            ?>
                                             <span class="meta-category-small"><a class="post-category-color-text"
                                                     style="background:#d800f9"
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
                             </div> <span class="jl_none_space"></span>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div id="categories-4" class="widget widget_categories">
                         <div class="widget-title">
                             <h2>Categories</h2>
                         </div>
                         <ul>

                         <?php

                           $cat_foot=$this->db->query("SELECT * FROM `blog_category` WHERE b_cat_status= '1' ORDER BY RAND() LIMIT 7");
                           foreach ($cat_foot->result() as $cat) {
                            $b_cat_id = $cat->b_cat_id;
                            $cat_name = $cat->b_cat_name;
                             $cat_url = $cat->b_cat_url;
                             $cat_desc = $cat->cat_desc;
                        
                     ?>
                         
                         
                         

                             <li class="cat-item cat-item-2"><a href="<?= base_url("blog-categories/".$cat_url)?>"
                                     title=" <?php echo $cat_desc ; ?>"><?= ucfirst($cat->b_cat_name)?></a> <span><?php  $count=   $this->Blog_model->count_blogs_by_cati_id($b_cat_id);
									
                                    print_r($count);?></span>
                             </li>
                             <?php } ?>
                          
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-bottom enable_footer_copyright_dark">
         <div class="container">
             <div class="row bottom_footer_menu_text">
                 <div class="col-md-6 footer-left-copyright">© Copyright 2019 Jellywp. All Rights Reserved
                     Powered
                     by Jellywp</div>
                 <div class="col-md-6 footer-menu-bottom">
                     <ul id="menu-footer-menu" class="menu-footer">

                         <li class="menu-item menu-item-11"><a href="<?php echo base_url()?>home/privacy_policy">Privacy
                                 policy</a>
                         </li>
                         <li class="menu-item menu-item-11"><a href="<?php echo base_url()?>home/terms">Terms and
                                 Conditions</a>
                         </li>
                         <li class="menu-item menu-item-11"><a href="<?php echo base_url()?>home/disclaimer">Disclaimer
                             </a>
                         </li>

                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- End footer -->