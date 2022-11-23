@extends('dashboard.layouts.main')
@section('container')
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0">My Post</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">My Post</li>
            </ol>
         </div><!-- /.col -->
      </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="container">
            <div class="row my-3">
               <div class="col-lg-8">
                  <h1 class="mb-3">{{ $post->title }}</h1>
         
                  <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to all my posts</a>
                  <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                  <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                     @method('delete')
                     @csrf
                     <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this post?')"><i class="bi bi-trash"></i> Delete</button>
                  </form>
                  
                  <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
         
                  <article class="my-3 fs-5">
                     {!! $post->body !!}
                  </article>
               </div>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
@endsection