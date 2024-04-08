<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('../assets/img/favicon.png') }}" rel="icon">
  <link href="{{ url('../assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 @yield('styles')
  </head>

<body>
    @include('backend.layouts.header')
    @include('backend.layouts.sidebar')
   <main id ="main" class="main">
        @yield('content')
   </main>
   @include('backend.layouts.footer')



   @yield('script')
</body>

</html>
