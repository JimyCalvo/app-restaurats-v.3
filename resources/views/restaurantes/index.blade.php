


<x-layouts.app title="Inicio">
   
    <h1>Locales Busqueda e información</h1>

    <a href="{{ route('restaurantes.create') }}">Crear nuevo Local</a>

    <h4>{{ session('status') }}</h4>


        <div class="contaier ms-5 me-5 ps-5 pe-5 ">
            <form class="input-group" action="">
                <input name="buscarpor" class="form-control rounded" type="search" placeholder="Buscar" aria-label="Search" value="{{$buscarpor}} " search-addon>
                <button type="sumbit" class="btn btn-outline-dark">Buscar</button>
            </form>
        </div>

            <br>
            <br>


        @foreach ($restaurantes as $restaurante)
        <div class="container row justify-content-md-center">
            <div class="card" style="width: 50%;">
                <img src="{{asset($restaurante->fotoDirec)}}" class="card-img-top" alt="    {{$restaurante->nombre_restaurante}}">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{ route('restaurantes.show', $restaurante) }}">
                        {{ $restaurante->nombre_restaurante }}  
                    </a>
                </h5> 
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint facere possimus ipsum totam perferendis recusandae, corrupti labore nostrum vel doloremque cum aut ut quam exercitationem saepe asperiores repudiandae nisi iure.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dirección:      {{$restaurante->direccion_local}}</li>
                    <li class="list-group-item" >Dueño/Gerente: {{$restaurante->gerente_local}}</li>
                    <li class="list-group-item">Tipo de local:  {{$restaurante->tipo_local}}</li>
                    <li class="list-group-item">Correo:         {{$restaurante->correo_local}}</li>
                </ul>
                <div class="container p-2 text-center">
                    <a name="editas" id="editar" class="btn btn-primary" href="{{route('restaurantes.edit', $restaurante)}}" role="button" style="width: 130px">Editar</a>
                    <form action="{{route('restaurantes.destroy', $restaurante)}}" method="POST">
                        @csrf
                         @method('DELETE')
                        <button type="submit" class="btn btn btn-danger mt-3" style="width: 130px" >Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    
</x-layouts.app>