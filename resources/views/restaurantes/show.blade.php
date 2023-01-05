


<x-layouts.app title="Inicio">

<h1>{{ session('status') }}</h1>

<h1>{{$restaurante->razon_social}}</h1>

<h1>{{$restaurante->nombre_restaurante}}</h1>

<img src="{{asset($restaurante->fotoDirec)}}" alt="    {{$restaurante->nombre_restaurante}}"   width="120 px">

<h3>
    {{$restaurante->direccion_local}}
    {{$restaurante->gerente_local}}

    {{$restaurante->tipo_local}}
    {{$restaurante->correo_local}}
</h3>

<a href="{{route('restaurantes.index')}}"><h1>Regresar</h1></a>

</x-layouts.app>