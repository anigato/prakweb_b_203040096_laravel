@extends('dashboard.layouts.main')
@section('style')
{{-- hapus fungsi upload file pada trix editor --}}
<style>
   trix-toolbar [data-trix-button-group='file-tools']{
      display: none;
   }
</style>
@endsection
@section('container')
   <!-- Content Header (Page header) -->
   <div class="content mb-3">
      <div class="content-header">
         <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0">Edit Post</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                           <li class="breadcrumb-item"><a href="/dashboard/posts">My Posts</a></li>
                           <li class="breadcrumb-item active">Edit Post</li>
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
               <div class="col-lg-8">
                  <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
                     @method('put')
                     @csrf
                     <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
                        @error('title')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                        @enderror
                     </div>
                     <div class="form-group mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
                        @error('slug')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                        @enderror
                     </div>
                     <div class="form-group mb-3">
                        <label for="category_id">Category</label>
                        <select class="form-select" id="category_id" data-placeholder="category_id" name="category_id">
                           @foreach ($categories as $category)
                              <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="image" class="form-label">Image</label>
                        <input type="hidden" name="oldImage" value="{{ $post->image }}">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                        @if ($post->image)
                           <img src="{{ asset('storage/'.$post->image) }}" class="img-preview img-fluid mt-3 col-sm-5 d-block">
                        @else
                           <img class="img-preview img-fluid mt-3 col-sm-5">
                        @endif
                     </div>
                     <div class="form-group mb-3">
                        <label for="body">Body</label>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                        <trix-editor input="body"></trix-editor>
                     </div>

                     <button type="submit" class="btn btn-primary">Update Post</button>
                  </form>
               </div>
            </div>
            <!-- /.row -->
         </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>


@endsection
@section('script')
<script>
   // fech api js, untuk otomatis panggil method
   const title = document.querySelector('#title');
   const slug = document.querySelector('#slug');

   title.addEventListener('change', function() {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
   })

   // select 2
   $('#category_id').select2({
      theme: "bootstrap-5",
      width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
   });

   // hilangkan fungsi upload gambar trix editor
   document.addEventListener('trix-file-accept', function (e){
      e.preventDefault();
   })

   // preview image ketika baru dipilih
   function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview')

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent){
         imgPreview.src = oFREvent.target.result;
      }
   }
</script>
@endsection
