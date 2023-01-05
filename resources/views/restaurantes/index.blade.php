



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

  
        @foreach ($restaurantes as $restaurante)
        <div style="display:flex; aling-items: baseline">
            <h2>
                <a href="{{ route('restaurantes.show', $restaurante) }}">
                    {{ $restaurante->nombre_restaurante }}  
                </a>
            </h2> &nbsp;
            <img src="{{asset($restaurante->fotoDirec)}}" alt="    {{$restaurante->nombre_restaurante}}"   width="120 px">


            &nbsp;

            <a href="{{route('restaurantes.edit', $restaurante)}}">Editar</a>

            &nbsp;

            <form action="{{route('restaurantes.destroy', $restaurante)}}" method="POST">
                @csrf
            @method('DELETE')

            <button type="submit">ELIMINAR</button>
            </form>
        </div>
        @endforeach
    
</x-layouts.app>