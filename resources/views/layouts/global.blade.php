<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('admin/img/logo/logo.png')}}" rel="icon">
  <title>@yield('title')</title>
  <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

  {{-- datatables --}}
  <link rel="stylesheet" href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}">
  {{-- end datatables --}}

  {{-- clock picker --}}
  <link rel="stylesheet" href="{{asset('admin/vendor/clock-picker/clockpicker.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendor/clock-picker/standalone.css')}}">
  {{-- end Clock Picker --}}

  {{-- datepicker --}}
  <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
  {{-- datepicker --}}
  <link href="{{asset('admin/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>
<body>
  <div id="wrapper">
    {{-- sidebar --}}
    @include('layouts.sidebar')
    {{-- end sidebar --}}

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        {{-- top bar --}}
        @include('layouts.topbar')
        {{-- end top bar --}}

        @yield('content')
      </div>
      @include('layouts.footer')
    </div>
  </div>

  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  {{-- DataTables --}}
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  {{-- End Datatables --}}

  {{-- clock picker --}}
  <script src="{{asset('admin/vendor/clock-picker/clockpicker.js')}}"></script>
  {{-- end clock picker --}}

  {{-- datepicker --}}
  <script src="{{asset('admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  {{-- end datepicker --}}
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <script src="{{asset('admin/js/ruang-admin.min.js')}}"></script>
  @stack('script')
</body>
</html>