
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

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Users List
                <a href="{{ url('panel/user/add') }}" class="btn btn-primary" style="float:right; margin-top:-10px; margin-left:-20px;">Add New</a>
            </h5>
            @include('layouts.messages')

            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Email Verified</th>
                  <th scope="col">Status</th>
                  <th scope="col">Created Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($getRecord as $value)
                    <tr>
                        <th scope="row">{{ $value->id }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ !empty($value->email_verified_at)?'Yes':'No' }}</td>
                        <td>{{ !empty($value->status)? 'Verified':'No' }}</td>
                        <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                        <td>
                            <a href="{{ url('panel/user/edit/'.$value->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a onclick = "return confirm('Are you want to delete record?')" href="{{ url('panel/user/delete/'.$value->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>

                @empty
                <tr>
                    <td colspan="100%">Record not found.</td>
                </tr>
                @endforelse


              </tbody>
            </table>
            {{  $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() }}

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


