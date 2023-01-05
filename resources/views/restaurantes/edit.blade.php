
<x-layouts.app title="Inicio">
<h1>{{$restaurante->razon_social}}</h1>

<div id="xd">
    <form action="{{ route('restaurantes.update',$restaurante   ) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PATCH')
        <label>Razon social</label>
        <input class="form-control" type="text" name="RazonSocial" value="{{ old('RazonSocial',$restaurante->razon_social) }}">
        @error('RazonSocial')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <label>Nombre del Restaurante</label>
        <input class="form-control"  type="text" name="nombreRestaurante" value="{{ old('nombreRestaurante',$restaurante->nombre_restaurante) }}">
        @error('nombreRestaurante')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <label>Direccion del local</label>
        <input class="form-control" type="text" name="direccionLocal" value="{{ old('direccionLocal',$restaurante->direccion_local) }}">
        @error('direccionLocal')
            <small style="color: red">{{ $message }}</small>
        @enderror

        <label>Gerente del local</label>
        <input class="form-control" type="text" name="nombreGerente" value="{{ old('nombreGerente',$restaurante->gerente_local) }}">
        @error('nombreGerente')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <img src="{{asset($restaurante->fotoDirec)}}" alt="    {{$restaurante->nombre_restaurante}}"   width="120 px">
        <br>
        <br>
        <input  class="form-control" type="file" name="fotoLocal" value="{{$restaurante->fotoDirec }}">
        @error('fotoLocal')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <label>Tipo de Local</label>
        <br>
        <label> Restaurante:
            <input  class="form-check-input" type="radio" name="categoriaLocal" value="Restaurante" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <label> Comida Rapida:
            <input class="form-check-input"  type="radio" name="categoriaLocal" value="Comida Rapida" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <label> Cafeteria:
            <input  class="form-check-input" type="radio" name="categoriaLocal" value="Cafeteria" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <label> Bar:
            <input  class="form-check-input" type="radio" name="categoriaLocal" value="Bar" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <label> Miselanea:
            <input class="form-check-input" type="radio" name="categoriaLocal" value="Miselanea" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <label>Direccion de E-mail</label>
        <input class="form-control" type="text" name="correoLocal" value="{{ old('correoLocal',$restaurante->correo_local) }}">
        @error('correoLocal')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <div id="botones" class="container text-center">
            <button class="btn btn-outline-success" type="submit">Editar</button>
            <br>
            <br>
            <a href="{{ route('home') }}">
                <h4>Regresar</h4>
            </a>
        </div>


    </form>
</div>


</x-layouts.app>