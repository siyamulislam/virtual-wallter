<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vitrual Wallter-@yield('title')</title>

    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
@include('front.include.nav')
@yield('body')

<section class="py-2 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center"> &copy; Vitrual Wallter 1999-{{date('Y')}}  | All rights reserved |  by  <span> <a href="https://siyamul.com">siyamul.com</a></span> </p>
            </div>
        </div>
    </div>

</section>

<script src="{{asset('/')}}front/js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}front/js/jquery-3.6.1.min.js"></script>




{{--toastr--}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@yield('script')




@if(Session::has('error'))
    <script>
        toastr.error("{{Session::get('error')}}");
    </script>
    {Session::forget('error')}}
@endif
@if(Session::has('success'))
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.success("{{Session::get('success')}}","Congratulation!")
    </script>
    {Session::forget('success')}}
@endif

</body>
</html>
