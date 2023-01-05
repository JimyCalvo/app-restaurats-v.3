
<x-layouts.app title="Inicio">
<h1>{{$restaurante->razon_social}}</h1>

<div id="xd">
    <form action="{{ route('restaurantes.update',$restaurante   ) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PATCH')
        <label>Razon social</label>
        <input type="text" name="RazonSocial" value="{{ old('RazonSocial',$restaurante->razon_social) }}">
        @error('RazonSocial')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <label>Nombre del Restaurante</label>
        <input type="text" name="nombreRestaurante" value="{{ old('nombreRestaurante',$restaurante->nombre_restaurante) }}">
        @error('nombreRestaurante')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <label>Direccion del local</label>
        <input type="text" name="direccionLocal" value="{{ old('direccionLocal',$restaurante->direccion_local) }}">
        @error('direccionLocal')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <label>Gerente del local</label>
        <input type="text" name="nombreGerente" value="{{ old('nombreGerente',$restaurante->gerente_local) }}">
        @error('nombreGerente')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <label>Foto</label>
        <img src="{{asset($restaurante->fotoDirec)}}" alt="    {{$restaurante->nombre_restaurante}}"   width="120 px">

        <input type="file" name="fotoLocal" value="{{$restaurante->fotoDirec }}">
        @error('fotoLocal')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <label>Tipo de Local</label>
        <br>
        <label> Restaurante:
            <input type="radio" name="categoriaLocal" value="Restaurante" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <label> Comida Rapida:
            <input type="radio" name="categoriaLocal" value="Comida Rapida" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <label> Cafeteria:
            <input type="radio" name="categoriaLocal" value="Cafeteria" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <label> Bar:
            <input type="radio" name="categoriaLocal" value="Bar" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <label> Miselanea:
            <input type="radio" name="categoriaLocal" value="Miselanea" value="{{ old('categoriaLocal',$restaurante->tipo_local) }}">
            @error('categoriaLocal')
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <label>Direccion de E-mail</label>
        <input type="text" name="correoLocal" value="{{ old('correoLocal',$restaurante->correo_local) }}">
        @error('correoLocal')
            <small style="color: red">{{ $message }}</small>
        @enderror
        <br>
        <div id="botones">
            <button class="btn btn-outline-success" type="submit">Registrar</button>
        </div>


    </form>
</div>

<a href="{{route('restaurantes.index')}}"><h1>Regresar</h1></a>

</x-layouts.app>