


<x-layouts.app title="Inicio">

<h5>{{ session('status') }}</h5>

<h6>{{$restaurante->razon_social}}</h6>

<h6>{{$restaurante->nombre_restaurante}}</h6>

<img src="{{asset($restaurante->fotoDirec)}}" alt="    {{$restaurante->nombre_restaurante}}"   width="300 px">

<h6>
    {{$restaurante->direccion_local}}
    <br>
    {{$restaurante->gerente_local}}
    <br>
    {{$restaurante->tipo_local}}
    <br>
    {{$restaurante->correo_local}}
</h6>

<a href="{{route('restaurantes.index')}}"><h5>Regresar</h5></a>

</x-layouts.app>