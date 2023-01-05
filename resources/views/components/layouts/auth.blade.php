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
            </div>
        </div>
    </header>
    <x-layouts.navbar/>
    <div class="height-100">
        <main>
            <div class="row text-center">
                <div class="d-none d-sm-block col-sm-1 col-md-2 col-lg-3"></div>
                <div class="col-sm-10 col-md-8 col-lg-6">
                    <div class="container" >
                        {{$slot}}
                    </div>
                </div>
                <div class=" d-none d-sm-block col-sm-1 col-md-2 col-lg-3"></div>
            </div>
        </main>
        <hr>
        <footer class="container-fluid bg-dark text-light">
            <div class="row text-center">
                <hr>
               <p class="col">
               &copy;{{ now()->year }} Desarrollo de Aplicaciones Web | Todo los derechos Reservados
               </p>
            </div>
        </footer>
        
    </div>
     <!-- ========== Start Script ========== -->
     <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{url('assets/js/actionBarra.js')}}"></script>
     <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
     <!-- ========== End Script ========== -->
</body>
</html>