
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
            <h5 class="card-title">Add New Category</h5>
            @include('layouts.messages')
            <!-- Vertical Form -->
            <form class="row g-3" method="post">
                @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputNanme4" name="name" value="{{ old('name') }}" >
                <div style="color: red">{{ $errors->first('name') }}</div>
            </div>
            <div class="col-12">
                <label for="inputslug" class="form-label">SLUG</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" >
                <div style="color: red">{{ $errors->first('slug') }}</div>
            </div>
            <div class="col-12">
                <label for="inputTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="slug" name="title" value="{{ old('title') }}" >
                <div style="color: red">{{ $errors->first('title') }}</div>
            </div>
            <div class="col-12">
                <label for="inputMetaTitle" class="form-label">Meta Title</label>
                <input type="text" class="form-control" id="slug" name="meta_title" value="{{ old('meta_title') }}" >
                <div style="color: red">{{ $errors->first('meta_title') }}</div>
            </div>
            <div class="col-12">
                <label for="inputMetaDescription" class="form-label">Meta Description</label>
                <textarea class="form-control" id="slug" name="meta_description"  >{{ old('meta_description') }}</textarea>
                <div style="color: red">{{ $errors->first('meta_description') }}</div>
            </div>
            <div class="col-12">
                <label for="inputMetaKeywords" class="form-label">Meta Keywords</label>
                <input type="text" class="form-control" id="slug" name="meta_keywords" value="{{ old('meta_keywords') }}" >
                <div style="color: red">{{ $errors->first('meta_keywords') }}</div>
            </div>
            <div class="col-12">
                <label for="inputstatus" class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="col-12">
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


