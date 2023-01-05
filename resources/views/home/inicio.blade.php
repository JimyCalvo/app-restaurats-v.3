<x-layouts.app title="Inicio">
    <h1>Inicio</h1>
    <section>
        <div>
            @auth
                <h5>Bievenido {{auth()->user()->name}} </h5>
                @switch(auth()->user()->type_user)
                    @case("Administrador")
                        <h5> Administrador </h5>
                        @break
                    @case("Cliente")
                        <h5> Cliente </h5>
                        @break
                    @case("Afiliado")
                        <h5>Afiliado</h5>
                        @break
                    @default
                        
                        @break
                @endswitch
            @endauth
        </div>
    </section>
    <section>
        <div class="container">
                <div class="row py-3">
                    <div class="col">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://www.sabervivirtv.com/medio/2022/06/09/6-beneficios-del-cafe-para-tu-salud-que-quiza-no-conozcas_532ab4fd_1280x720.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block"  style="background-color: rgba(12, 12, 12, 0.596); height=500px;">
                                        <h5>Cafe Toscana</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem nemo, voluptate nulla illum, labore possimus soluta veniam</p> 
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.clarin.com/img/2021/06/17/LC25eDtCT_1200x630__1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(12, 12, 12, 0.596); height=500px;">
                                        <h5>PoliBurger</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem nemo, voluptate nulla illum, labore possimus soluta veniam</p> 
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cdn.colombia.com/gastronomia/2011/08/25/pizza-margarita-3684.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block"  style="background-color: rgba(12, 12, 12, 0.596); height=500px;">
                                        <h5>Pizza la Torre</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem nemo, voluptate nulla illum, labore possimus soluta veniam</p> 
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section>
            <div id="public" class="carousel slide text-center bg-dark" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item ">
                        <img title="Publicidad" src="https://img.freepik.com/psd-gratis/plantilla-banner-horizontal-comida-rapida_23-2149058364.jpg?size=626&ext=jpg"  alt="Publicidad" width='500' height='200'/>
                    </div>
                    <div class="carousel-item active">
                        <img title="Publicidad" src="https://img.freepik.com/psd-premium/plantilla-banner-comida-rapida_23-2148609079.jpg"  alt="Publicidad" width='500' height='200' />
                    </div>
                    <div class="carousel-item ">
                        <img title="Publicidad" src="https://img.freepik.com/psd-premium/plantilla-anuncio-banner-comida-rapida_23-2148747067.jpg"  alt="Publicidad" width='500' height='200'/>
                    </div>
                    <div class="carousel-item ">
                        <img title="Publicidad" src="https://img.freepik.com/psd-premium/plantilla-banner-comida-rapida_23-2148609079.jpg"  alt="Publicidad" width='500' height='200'/>
                    </div>
                </div>
          </div>
    </section>


    <section>
        <div class="container-fluid">
            <div class="container-fluid card-group mt-4 " >
              <div class="card text-center" style="width: 18rem;">
                <img src="https://lanoticia.com/wp-content/uploads/2022/02/como-preparar-alitas-de-pollo-con-salsas-deliciosas-scaled.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h4 class="card-title">Alitas en Salsa</h4>
                  <p class="card-text">unas alitas acompañadas de salsa bbq y un toque de picante son la esencia de uno de los platillos más sabrosos preparados con pollo. Contamos con diferentes Salsas las cuales quedan a su eleccion. </p>
                  
      
                </div>
              </div>
      
              <div class="card text-center ">
                <div class="card-body">
                  <h4 class="card-title">Hot Dog</h4>
                  <p class="card-text">Panecillo largo lleno con una salchicha de Frankfurt, que se consume caliente, y untado de mostaza ligeramente dulce. Esta expresión estadounidense, aparecida hacia 1930, significa “perro caliente”.</p>
                </div>
                <img src="https://www.latam.aviko.com/media/7625157/hotdog1.jpg?height=400&width=610&scale=both&mode=crop-up" class="card-img-top" alt="..." />
              </div>
      
              <div class="card text-center">
                <img src="https://progcarne.com/storage/app/uploads/public/608/6d1/8b0/6086d18b065a7811052900.jpg" class="card-img-top" alt="..."\>
                <div class="card-body">
                  <h4 class="card-title">Hamburguesa Doble</h4>
                  <p class="card-text">Hamburguesa de Res Doble Carne, lechuga, tomate, mayonesa de la casa, salsa de tomate, Acompañado de una rica salsa BBQ o a su eleccion entre diferentes tipos.
                    Acompañado de papas fritas.</p>
                  
      
                </div>
              </div>
      
            </div>
          </div>
    </section>
    
</x-layouts.app>