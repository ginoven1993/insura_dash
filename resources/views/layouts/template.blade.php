<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard | @yield('title')</title>
    
</head>
<body>

@if (Session::has('flash_message_error'))
<script type="text/javascript" src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
<script type="text/javascript">;
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: "{{ session('flash_message_error') }}",
  showConfirmButton: false,
  timer: 1800
});
</script>
@endif
@if (Session::has('flash_message_success'))
<script type="text/javascript" src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
<script type="text/javascript">;
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: "{{ session('flash_message_success') }}",
  showConfirmButton: false,
  timer: 1800
});
</script>
@endif

      <!-- SIDEBAR -->
      @include('layouts.sidebar')
      <!-- SIDEBAR -->
    <section id="content">
        <!-- NAVBAR -->
             @include('layouts.header')
        <!-- NAVBAR -->

         <!-- start page content -->
             @yield('content') 
         <!-- end page content -->

    </section>

    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   <script src="{{asset('assets/js/script.js')}}"></script>
   
   <script src="{{asset('assets/js/sweetalert2.all.js')}}"></script>
</body>
</html>