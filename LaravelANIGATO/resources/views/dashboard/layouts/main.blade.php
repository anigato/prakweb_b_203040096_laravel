<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ANIGATO Blogs | Dashboard</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Theme style -->
      <link rel="stylesheet" href="/css/adminlte.min.css">
      <!-- icon bootstrap -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         {{-- <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../img/anigatomini.png" alt="ANIGATO Blog" height="60" width="60">
            <h1>Please Waiting!!</h1>
         </div> --}}
         
         @include('dashboard.layouts.navbar')

         @include('dashboard.layouts.sidebar')

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            @yield('container')
         </div>
         <!-- /.content-wrapper -->

         <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://github.com/anigato">Khoerul Anam 203040096</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
               <b>Version</b> 1.17.1
            </div>
         </footer>
      </div>
      <!-- ./wrapper -->

   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <!-- jQuery UI -->
   <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>

   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
      $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
   </script>

   <!-- AdminLTE App -->
   <script src="/js/adminlte.min.js"></script>

   <!-- icon feather -->
   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
   </body>
</html>
