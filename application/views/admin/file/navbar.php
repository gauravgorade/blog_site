   <div class="navigation">
       <div class="navigation-header">
           <span>Navigation</span>
           <a href="#">
               <i class="ti-close"></i>
           </a>
       </div>
       <div class="navigation-menu-body">
           <ul>
               <li>
                   <a href="<?php echo base_url();?>admin">
                       <span class="nav-link-icon">
                           <i data-feather="pie-chart"></i>
                       </span>
                       <span>Dashboard</span>
                   </a>
               </li>


               <!-- <li>
                   <a href="<?php echo base_url();?>Website/edit">
                       <span class="nav-link-icon">
                           <i data-feather="hexagon"></i>
                       </span>
                       <span>Website Details</span>
                   </a>
               </li> -->

               <?php 
                  $admin_type = $this->session->userdata('admin_type');
                  if ($admin_type =='1') { ?>

               <li>
                   <a href="#"> <span class="nav-link-icon">
                           <i data-feather="key"></i> </span>
                       <span> Admin User</span>
                   </a>
                   <ul>
                       <li>
                           <a href="<?php echo base_url();?>admin/users"> View Admin </a>
                       </li>
                       <li>
                           <a href="<?php echo base_url();?>admin/add"> Add Admin</a>
                       </li>

                   </ul>
               </li>



               <?php  }   ?>

               <li>
                   <a href="#"> <span class="nav-link-icon">
                           <i data-feather="message-square"></i> </span>
                       <span> Contact us</span>
                   </a>
                   <ul>
                       <li>
                           <a href="<?php echo base_url();?>admin/contact/view_inquiry"> View Contact </a>
                       </li>
                       <li>
                           <a href="<?php echo base_url();?>admin/contact/export_inquiry"> Export Contact</a>
                       </li>

                   </ul>
               </li>



               <li><a href="<?php echo base_url();?>admin/blog/view_blog"> <span class="nav-link-icon">
                           <i data-feather="grid"></i> </span>
                       View Blogs</a></li>
               <li><a href="<?php echo base_url();?>admin/blog/add_blog"><span class="nav-link-icon">
                           <i data-feather="cpu"></i> </span>
                       Add Blog</a></li>
               <li><a href="<?php echo base_url();?>admin/blog/view_category"> <span class="nav-link-icon">
                           <i data-feather="filter"></i> </span>Blog Category</a> </li>
               <li><a href="<?php echo base_url();?>admin/blog/view_tag"><span class="nav-link-icon">
                           <i data-feather="droplet"></i> </span>Blog Tag's</a></li>
                           
               <li>
                   <a href="<?php echo base_url() .'Admin/logout' ?>">
                       <span class="nav-link-icon">
                           <i data-feather="log-out"></i>
                       </span>
                       <span>Sign Out</span>
                   </a>
               </li>




           </ul>
       </div>
   </div>
   <!-- end::navigation -->