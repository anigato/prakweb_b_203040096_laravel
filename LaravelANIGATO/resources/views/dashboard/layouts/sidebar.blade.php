<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="/dashboard" class="brand-link">
      <img src="{{ asset('img/anigatomini.png') }}" alt="ANIGATO Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
      <span class="brand-text font-weight-light">ANIGATO Blog</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
               <img src="https://source.unsplash.com/100x100?person" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
               <a href="#" class="d-block">{{ auth()->user()->name }}</a>
         </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
               <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
               <div class="input-group-append">
                  <button class="btn btn-sidebar">
                     <i class="bi bi-search"></i>
                  </button>
               </div>
         </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
                  <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                     <i class="bi bi-speedometer"></i> Dashboard
                  </a>
               </li>
               <li class="nav-item">
                  <a href="/dashboard/posts" class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                     <i class="bi bi-file-earmark-text"></i> My Posts
                  </a>
               </li>


               {{-- <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="bi bi-speedometer"></i>sasasa <i class="bi bi-caret-left right"></i>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link">
                     <i class="bi bi-circle"></i>
                     <p>Top Navigation</p>
                  </a>
               </li>
            </ul>
         </li> --}}
         </ul>

         @can('admin')
               <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Administrator</span>
               </h6>
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <li class="nav-item">
                     <a href="/dashboard/categories"
                           class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
                           <i class="bi bi-grid-fill"></i> Post Categories
                     </a>
                  </li>
               </ul>
         @endcan
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>
