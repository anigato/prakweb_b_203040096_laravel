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
                     <h1 class="m-0">Create new Posts</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="/">Home</a></li>
                           <li class="breadcrumb-item"><a href="/dashboard/posts">My Posts</a></li>
                           <li class="breadcrumb-item active">Create new Posts</li>
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
                  <form action="/dashboard/posts" method="post">
                        @csrf
                        <div class="form-group mb-3">
                           <label for="title">Title</label>
                           <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" name="title" required autofocus value="{{ old('title') }}">
                           @error('title')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                           @enderror
                        </div>
                        <div class="form-group mb-3">
                           <label for="slug">Slug</label>
                           <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" name="slug" required value="{{ old('slug') }}">
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
                                 <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group mb-3">
                           <label for="body">Body</label>
                           @error('body')
                           <p class="text-danger">{{ $message }}</p>
                           @enderror
                           <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                           <trix-editor input="body"></trix-editor>
                        </div>

                        <button type="submit" class="btn btn-primary">Create new post</button>
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
   {{-- fech api js, untuk otomatis panggil method --}}
   <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');

      title.addEventListener('change', function() {
         fetch('/dashboard/posts/checkSlug?title=' + title.value)
               .then(response => response.json())
               .then(data => slug.value = data.slug)
      })
   </script>

   {{-- select 2 --}}
   <script>
      $('#category_id').select2({
         theme: "bootstrap-5",
         width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
      });
   </script>

   {{-- hilangkan fungsi upload gambar trix editor --}}
   <script>
      document.addEventListener('trix-file-accept', function (e){
         e.preventDefault();
      })
   </script>
@endsection
