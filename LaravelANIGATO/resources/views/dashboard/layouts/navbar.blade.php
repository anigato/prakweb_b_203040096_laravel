<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="bi bi-window-sidebar"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
         <a href="/dashboard" class="nav-link">Home</a>
      </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
         <i class="bi bi-search"></i>
      </a>
      <div class="navbar-search-block">
         <form class="form-inline">
            <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
               <button class="btn btn-navbar" type="submit">
                  <i class="bi bi-search"></i>
               </button>
               <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="bi bi-x-lg"></i>
               </button>
            </div>
            </div>
         </form>
      </div>
      </li>

      <li class="nav-item">
         <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="bi bi-arrows-fullscreen"></i>
         </a>
      </li>
      <li class="nav-item">
         <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link border-0">
               Logout <i class="bi bi-box-arrow-right"></i>
            </button>
         </form>
      </li>
   </ul>
</nav>
<!-- /.navbar -->