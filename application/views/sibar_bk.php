<style type="text/css">
.sidebar-profile {
  width: 95%;
}

.sidebar-navs {
  border-top: 1px solid lightgrey;
  padding: 0px 0px 0px 0px;
  border-bottom: 1px solid lightgrey;
  margin-top: 10px;
}

.nav-pills-circle {
  position: relative;
  margin: 0 auto;
  text-align: center;
  justify-content: center;
}

.sidebar-navs .nav-pills-circle .nav-link {
  display: block;
  padding: 5px;
  font-size: 14px;
  border: 1px solid #e3e7ed;
  border-radius: 50%;
  line-height: 1.6;
  height: 34px;
  width: 34px;
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav>li {
  margin: 3px 6px;
}
</style>
<!-- Sidebar Start -->
<aside class="seipkon-main-sidebar">
  <nav id="sidebar">
    <!-- Sidebar Profile Start -->
    <div class="sidebar-profile clearfix">
      <div class="profile-avatar" style="border: 1px solid #0000000a; border-radius: 50%;">
        <?php
                    $user_img = base_url('assets/img/default-user0.png');
                    if (!empty($log_user_dtl[0]->m_admin_img)) {
                      if (file_exists('uploads/'.$log_user_dtl[0]->m_admin_img)){
                        $user_img = base_url('uploads/').$log_user_dtl[0]->m_admin_img;
                      }
                    }
                    ?> <img src="<?php echo $user_img; ?>" class="img-responsive" alt="profile" style="width: 100%; height: 100%;" /> </div>
      <div class="profile-info">
        <p>Welcome !</p>
        <h4> <?php echo $log_user_dtl[0]->m_admin_name; ?></h4> </div>
      <div class="clearfix"></div>
      <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
          <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Application Settings">
            <a style="background: #F44336; color: white;" class="nav-link text-center m-2" href="<?php echo site_url('Profile/application_settings'); ?>"> <i class="fa fa-cog"></i> </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Users">
            <a style="background: deepskyblue; color: white;" class="nav-link text-center m-2" href="<?php echo site_url('User'); ?>"> <i class="fa fa-user"></i> </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Listings">
            <a style="background: #3F51B5; color: white;" class="nav-link text-center m-2" href="<?php echo site_url('Listing'); ?>"> <i class="fa fa-list"></i> </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
            <a style="background: red; color: white;" class="nav-link text-center m-2" href="<?php echo Site_url('Logout')?>"> <i class="fa fa-power-off"></i> </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Sidebar Profile End -->
    <!-- Menu Section Start -->
    <div class="menu-section">
      <h3>General</h3>
      <ul class="list-unstyled components mynev-menus activation">
        <li class="">
          <a href="<?php echo site_url('Welcome') ?>" class="mynev-links"> <i class="fa fa-dashboard"></i> Dashboard </a>
        </li>
       
         <li>
          <a href="#Jobs" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-file"></i> Administration </a>
          <ul class="collapse list-unstyled mynev-submenus" id="Jobs">
            <li><a href="<?php echo site_url('Administration/add_user') ?>" class="mynev-links">Add User</a></li>
            <li><a href="<?php echo site_url('Administration?id=1') ?>" class="mynev-links">Board of Management </a></li>
            <li><a href="<?php echo site_url('Administration?id=2') ?>" class="mynev-linkss">Faculty</a></li>
            <li><a href="<?php echo site_url('Administration?id=3') ?>" class="mynev-linkss">Administrative Staff</a></li>
            <!-- <li><a href="<?php echo site_url('Administration?id=4') ?>" class="mynev-linkss">School Committee </a></li> -->

            <li><a href="<?php echo site_url('Committee') ?>" class="mynev-linkss">School Committee </a></li>
            <li><a href="<?php echo site_url('Administration?id=5') ?>" class="mynev-linkss">PTA</a></li>
          </ul>
        </li>
       
         <li>
          <a href="#Listings" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-sticky-note"></i> News and Events </a>
          <ul class="collapse list-unstyled mynev-submenus" id="Listings"><!-- 
            <li><a href="<?php echo site_url('') ?>" class="mynev-links">School Calendar</a></li> -->
            <li><a href="<?php echo site_url('School_Calendar') ?>" class="mynev-links">School Calendar</a></li>
            <li><a href="<?php echo site_url('News') ?>" class="mynev-links">News</a></li>
            <li><a href="<?php echo site_url('Events') ?>" class="mynev-links">Events</a></li>
            <li><a href="<?php echo site_url('Magazines') ?>" class="mynev-links">Magazines</a></li>
            <li><a href="<?php echo site_url('Events/Videos') ?>" class="mynev-links">Videos</a></li>
            
          </ul>
        </li>
        <li>
          <a href="#Lab" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-flask"></i> Infrastructure </a>
          <ul class="collapse list-unstyled mynev-submenus" id="Lab">
            <li><a href="<?php echo site_url('Lab') ?>" class="mynev-linkss">Infrastructure </a></li>
        <!--     <li><a href="<?php echo site_url('Campus') ?>" class="mynev-linkss">School Campus </a></li>
            <li><a href="<?php echo site_url('Library') ?>" class="mynev-linkss">Library </a></li> -->
            
          </ul>
        </li> 
        <li>
          <a href="#Pub" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-file-pdf-o"></i> Public Disclosure  </a>
          <ul class="collapse list-unstyled mynev-submenus" id="Pub">
            <li><a href="<?php echo site_url('Document')?>" class="mynev-links">Disclousre List  </a></li>
            <li><a href="<?php echo site_url('Document/add_document') ?>" class="mynev-links">Add Disclousre  </a></li>
           
          </ul>
        </li>
        <li>
          <a href="#Aca" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-book"></i> Academic   </a>
          <ul class="collapse list-unstyled mynev-submenus" id="Aca">
            <li><a href="<?php echo site_url('Academic?id=1') ?>" class="mynev-links"> Student Report   </a></li>
            <li><a href="<?php echo site_url('Academic?id=2') ?>" class="mynev-linkss">Result   </a></li>
            <li><a href="<?php echo site_url('Academic?id=3') ?>" class="mynev-linkss"> Student Achievement  </a></li>
            
          </ul>
        </li>
        <li>
          <a href="#Co" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-list"></i> Co-curricular Activities    </a>
          <ul class="collapse list-unstyled mynev-submenus" id="Co">
            <li><a href="<?php echo site_url('Activities') ?>" class="mynev-links"> Activities List    </a></li>
            <li><a href="<?php echo site_url('Activities/add_activities') ?>" class="mynev-links"> Add Activities    </a></li>
          </ul>
        </li>
        <li>
          <a href="#banner" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-picture-o"></i> Banner</a>
          <ul class="collapse list-unstyled mynev-submenus" id="banner">
            <li><a href="<?php echo site_url('Banner') ?>" class="mynev-links"> Banner    </a></li>
            <li><a href="<?php echo site_url('Banner/add_banner') ?>" class="mynev-links"> Add Banner    </a></li>
          </ul>
        </li>
        <li class="">
          <a href="<?php echo site_url('Star_performer') ?>" class="mynev-links"> <i class="fa fa-star-o"></i> Star Performer </a>
        </li>

        <li class="">
          <a href="<?php echo site_url('Fees') ?>" class="mynev-links"> <i class="fa fa-inr"></i> Fees Structure </a>
        </li>
        <li class="">
          <a href="<?php echo site_url('Enquiries') ?>" class="mynev-links"> <i class="fa fa-envelope-o"></i> Enquiries </a>
        </li>
      </ul>
    </div>
    <!-- Menu Section End -->
    <!-- Menu Section Start -->
    <div class="menu-section">
      <h3>Extra Settings</h3>
      <ul class="list-unstyled components mynev-menus">
        <li>
          <a href="#ex_components" data-toggle="collapse" aria-expanded="false"> <i class="fa fa-cog"></i> General Setting </a>
          <ul class="collapse list-unstyled mynev-submenus" id="ex_components">
            <li><a href="<?php echo site_url('Profile') ?>" class="mynev-links">Your Profile </a></li>
            <li><a href="<?php echo site_url('Profile/application_settings') ?>" class="mynev-links">Application</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('Logout') ?>" class="mynev-links"> <i class="fa fa-power-off"></i> Logout </a>
        </li>
      </ul>
    </div>
    <!-- Menu Section End -->
  </nav>
</aside>
<!-- End Sidebar -->