<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Star Restaurants - {{$title}}</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-modi.css')}}">
    <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css')}}">

</head>
<body id="body-pd">
    <header class="header bg-dark" id="header">
        <div class= "container-fluid  ms-5 ps-5">
            <div class="row align-items-center p-1">
                <div class="col-1 col-md-3 col-lg-2 text-end">
                    <div class="header_toggle text-light"> <i class='bx bx-menu' id="header-toggle"></i> </div>
                </div>
                <div class="d-none d-md-block col-md-6 col-lg-8 text-center">
                    <h4 class="text-light">Star Restaurants</h4>
                </div>
                <div class="col-11 col-md-3 col-lg-2 text-end text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle"  viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                    </svg>
                    @auth
                        <label> {{auth()->user()->name}}  {{auth()->user()->lastname}}</label>
                    @endauth
            </div>
        </div>
    </header>
    <x-layouts.navbar/>
    <div class="height-100">
        <main>
            {{$slot}}
        </main>
        <br>
        <br>
        <x-layouts.footer/>
        
    </div>



    <!-- ========== Start Script ========== -->
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/actionBarra.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <!-- ========== End Script ========== -->
</body>
</html>