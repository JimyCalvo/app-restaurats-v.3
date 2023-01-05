<x-layouts.app title="Buscar">
    <h1>Buscar</h1>
    @auth
        <h1>{{ session('status') }}</h1>
            <div class="col-xl-12">
                <form class="form-inline my-2 my-lg-0" action="">
                    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="{{$buscarpor}}">
                    <button type="sumbit" class="btn btn-success">Buscar</button>
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
    @endauth
    @guest
        <p>Para ver el contenido <a href="/login">Inicie Sesión</a></p>
    @endguest
</x-layouts.app>