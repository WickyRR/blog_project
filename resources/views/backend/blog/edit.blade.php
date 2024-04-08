
@extends('backend.layouts.app')

@section('styles')
      <!-- Vendor CSS Files -->
  <link href="{{ url('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('public/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('public/assets/css/style.css') }}" rel="stylesheet">

@endsection

@section('content')
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Blog</h5>
            @include('layouts.messages')
            <!-- Vertical Form -->
            <form class="row g-3" method="post" action="" enctype="multipart/form-data">
                @csrf
              <div class="col-12">
                <label for="inputTitle" class="form-label">Title * </label>
                <input type="text" class="form-control" id="inputTitle" name="title" value="{{ $getRecord->title }}" >
                <div style="color: red">{{ $errors->first('title') }}</div>
            </div>
            <div class="col-12">
                <label for="inputslug" class="form-label">Category</label>
                <select name="category_id"  class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($getCategory as $value )
                    <option value="{{ $value->id }}" >{{ $value->name }}</option>
                    @endforeach

                </select>
                <div style="color: red">{{ $errors->first('category') }}</div>
            </div>
            <div class="col-12">
                <label for="inputTitle" class="form-label">Image *</label>
                <input type="file" class="form-control"  name="image_file" >
                <div style="color: red">{{ $errors->first('title') }}</div>
            </div>

            <div class="col-12">
                <label for="inputDescription" class="form-label">Description</label>
                <textarea class="form-control tinymce-editor" name="description"  >{{ old('description') }}</textarea>
                <div style="color: red">{{ $errors->first('description') }}</div>
            </div>
            <div class="col-12">
                <label for="inputTags" class="form-label">Tags</label>
                <input type="text" class="form-control" id="slug" name="tags" value="{{ old('tags') }}" >
                <div style="color: red">{{ $errors->first('tags') }}</div>
            </div>
            <div class="col-12">
              <label for="inputMetaDescription" class="form-label">Meta Description</label>
              <textarea class="form-control" name="meta_description"  >{{ old('meta_description') }}</textarea>
              <div style="color: red">{{ $errors->first('meta_description') }}</div>
          </div>
          <div class="col-12">
            <label for="inputMetaKeywords" class="form-label">Meta Keywords</label>
            <input type="text" class="form-control"  name="meta_keywords" value="{{ old('meta_keywords') }}" >
            <div style="color: red">{{ $errors->first('meta_keywords') }}</div>
         </div>
            <div class="col-12">
                <label for="" class="form-label">Publish</label>
                <select name="is_published" class="form-control">
                    <option value="1" selected>Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="col-12">
                <label for="" class="form-label">Status</label>
                <select name = "status" class="form-control">
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="col-12" style="margin-top: 30px">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            </form><!-- Vertical Form -->

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('script')
    <!-- Vendor JS Files -->
  <script src="{{ url('public/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('public/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ url('public/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ url('public/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ url('public/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ url('public/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ url('public/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('public/assets/js/main.js') }}"></script>
@endsection


