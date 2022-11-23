@extends('dashboard.layouts.main')
@section('container')
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
         @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
               {{ session('success') }}
            </div>
         @endif
         <div class="col-sm-6">
            <h1 class="m-0">My Posts</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">My Posts</li>
            </ol>
         </div><!-- /.col -->
      </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <!-- /.row -->
         <div class="row">
            <div class="col-12">
               <a href="/dashboard/posts/create" class="btn btn-success mb-3">Create new posts</a>
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">List of all my posts</h3>
                     <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">

                           <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                           <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                 <i class="bi bi-search"></i>
                              </button>
                           </div>
                        </div>
                        </div>
                     </div>
                  <!-- ./card-header -->
                  <div class="card-body table-responsive p-0" style="height: 28rem;">
                     <table class="table table-bordered table-hover table-head-fixed text-nowrap">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Title</th>
                           <th>Category</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($posts as $post)
                           <tr data-widget="expandable-table" aria-expanded="false">
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $post->title }}</td>
                              <td>{{ $post->category->name }}</td>
                              <td>Posted</td>
                              <td>
                                 <div class="badge bg-info">
                                    <a href="/dashboard/posts/{{ $post->slug }}"><i class="bi bi-eye-fill"></i></a>
                                 </div>
                                 <div class="badge bg-warning">
                                    <a href="/dashboard/posts/{{ $post->slug }}/edit"><i class="bi bi-pencil"></i></a>
                                 </div>
                                 <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this post?')"><i class="bi bi-trash"></i></button>
                                 </form>
                              </td>
                           </tr>
                           <tr class="expandable-body">
                              <td colspan="5">
                              <p>{{ $post->excerpt }}</p>
                              </td>
                           </tr>
                        @endforeach
                        
                     </tbody>
                     </table>
                  </div>
                  <!-- /.card-body -->
               </div>
            <!-- /.card -->
            </div>
         </div>
         <!-- /.row -->
      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
@endsection