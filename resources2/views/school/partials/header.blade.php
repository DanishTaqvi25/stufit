<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

   
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <!--<a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>-->
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url('assets/adminlte')}}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url('assets/adminlte/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url('assets/adminlte/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
     <!-- <li class="nav-item dropdown">
        <a class="nav-link" href="{{url('notification')}}">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        
      </li>-->
	  
      <!--<li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin-dashboard')}}" class="brand-link">
      <img src="{{url('assets/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Stufit</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">Welcome Admin</a>
        </div>
		
      </div>-->
	  
	  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
			<li class="nav-item">
			  <a href="{{url('school-dashboard')}}" class="nav-link <?php if($highlight=='dashboard'){echo 'active';} ?>">
			   <i class="nav-icon fas fa-tachometer-alt"></i>
			   <p>Dashboard</p>
			  </a>
			</li>
			
			
			<li class="nav-item">
			  <a href="{{url('school-student-list')}}" class="nav-link <?php if($highlight=='school-student-list'){echo 'active';} ?>">
			  <i class="nav-icon fa fa-user"></i>
			   <p>Students</p>
			   
			  </a>
			</li>
			
			
			
			
			<li class="nav-item">
			  <a href="{{url('school-logout')}}" class="nav-link">
			  <i class="nav-icon fa fa-lock"></i>
			   <p>Log Out</p>
			   
			  </a>
			</li>
			
			
			
			
			<!--<li class="nav-item has-treeview">-->
   <!--         <a href="#" class="nav-link">-->
   <!--           <i class="nav-icon fa fa-file"></i>-->
   <!--           <p>-->
   <!--             Reports -->
   <!--             <i class="right fas fa-angle-left"></i>-->
   <!--           </p>-->
   <!--         </a>-->
   <!--         <ul class="nav nav-treeview">-->
   
   <!--<li class="nav-item">
			  <a href="{{url('student-class')}}" class="nav-link <?php if($highlight=='student-class'){echo 'active';} ?>">
			   <i class="nav-icon fa fa-user"></i>
			   <p>Class</p>
			  </a>
			</li>
			
			
			<li class="nav-item">
			  <a href="{{url('student-section')}}" class="nav-link <?php if($highlight=='student-section-class'){echo 'active';} ?>">
			   <i class="nav-icon fa fa-user"></i>
			   <p>Section</p>
			  </a>
			</li>-->
              
			<!--  <li class="nav-item">-->
   <!--             <a href="{{url('coupan-reports')}}" class="nav-link <?php if($highlight=='coupan-reports'){echo 'active';} ?>">-->
   <!--               <i class="far fa-circle nav-icon"></i>-->
   <!--               <p>Coupon</p>-->
   <!--             </a>-->
   <!--           </li>-->
			  
			<!--  <li class="nav-item">-->
   <!--             <a href="{{url('customer-reports')}}" class="nav-link <?php if($highlight=='customer-reports'){echo 'active';} ?>">-->
   <!--               <i class="far fa-circle nav-icon"></i>-->
   <!--               <p>Customer</p>-->
   <!--             </a>-->
   <!--           </li>-->
			  
			<!--   <li class="nav-item">-->
   <!--             <a href="{{url('palpate-reports')}}" class="nav-link <?php if($highlight=='palpate-reports'){echo 'active';} ?>">-->
   <!--               <i class="far fa-circle nav-icon"></i>-->
   <!--               <p> Palpate Points</p>-->
   <!--             </a>-->
   <!--           </li>-->
			  
			<!--   <li class="nav-item">-->
   <!--             <a href="{{url('tag-reports')}}" class="nav-link <?php if($highlight=='tag-reports'){echo 'active';} ?>">-->
   <!--               <i class="far fa-circle nav-icon"></i>-->
   <!--               <p> Tag</p>-->
   <!--             </a>-->
   <!--           </li>-->
			  
			<!--  <li class="nav-item">-->
   <!--             <a href="{{url('sales-reports')}}" class="nav-link <?php if($highlight=='sales-reports'){echo 'active';} ?>">-->
   <!--               <i class="far fa-circle nav-icon"></i>-->
   <!--               <p> Sales </p>-->
   <!--             </a>-->
   <!--           </li>-->
			  
			<!--  <li class="nav-item">-->
   <!--             <a href="{{url('search-reports')}}" class="nav-link <?php if($highlight=='search-reports'){echo 'active';} ?>">-->
   <!--               <i class="far fa-circle nav-icon"></i>-->
   <!--               <p> Search  </p>-->
   <!--             </a>-->
   <!--           </li>-->
			  
			  
			<!--  <li class="nav-item">-->
   <!--             <a href="{{url('earning-reports')}}" class="nav-link <?php if($highlight=='earning-reports'){echo 'active';} ?>">-->
   <!--               <i class="far fa-circle nav-icon"></i>-->
   <!--               <p> Earning  </p>-->
   <!--             </a>-->
   <!--           </li>-->
			   
			  
			<!--   </ul>-->
   <!--       </li>-->
			
			
			<!--<li class="nav-item">
			  <a href="{{url('logout')}}" class="nav-link">
			   <p>Log Out</p>
			   
			  </a>
			</li> -->
         
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>