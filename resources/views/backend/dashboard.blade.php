
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
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
</div><!-- End Page Title -->

<section class="section dashboard">

      
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


