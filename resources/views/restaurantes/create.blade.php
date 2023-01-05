
<x-layouts.app title="Inicio">
    <h1>REGISTRO</h1>





    <div id="xd">
        <form action="{{ route('restaurantes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Razon social</label>
            <input type="text" name="RazonSocial" value="{{ old('RazonSocial') }}" class="form-control">
            @error('RazonSocial')
                <small class="form-control" style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Nombre del Restaurante</label>
            <input type="text" name="nombreRestaurante" value="{{ old('nombreRestaurante') }}" class="form-control">
            @error('nombreRestaurante')
                <small class="form-control" style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Direccion del local</label>
            <input type="text" name="direccionLocal" value="{{ old('direccionLocal') }}" class="form-control">
            @error('direccionLocal')
                <small class="form-control" style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Gerente del local</label>
            <input type="text" name="nombreGerente" value="{{ old('nombreGerente') }}" class="form-control">
            @error('nombreGerente')
                <small  class="form-control"style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <label>Foto</label>
            <input type="file"  name="fotoLocal" value="{{ old('fotoLocal') }}" class="form-control">
            @error('fotoLocal')
                <small class="form-control" style="color: red">{{ $message }} </small >
            @enderror
            <br>
            <label>Tipo de Local</label>
            <br>
            <label> Restaurante:
                <input type="radio" name="categoriaLocal" value="Restaurante" value="{{ old('categoriaLocal') }}" >
                @error('categoriaLocal')
                    <small class="form-control" style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Comida Rapida:
                <input type="radio" name="categoriaLocal" value="Comida Rapida" value="{{ old('categoriaLocal') }}">
                @error('categoriaLocal')
                    <small class="form-control" style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Cafeteria:
                <input type="radio" name="categoriaLocal" value="Cafeteria" value="{{ old('categoriaLocal') }}">
                @error('categoriaLocal')
                    <small class="form-control" style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Bar:
                <input type="radio" name="categoriaLocal" value="Bar" value="{{ old('categoriaLocal') }}">
                @error('categoriaLocal')
                    <small class="form-control" style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <label> Miselanea:
                <input type="radio" name="categoriaLocal" value="Miselanea" value="{{ old('categoriaLocal') }}">
                @error('categoriaLocal')
                    <small class="form-control" style="color: red">{{ $message }}</small>
                @enderror
            </label>
            <br>
            <label>Direccion de E-mail</label>
            <input type="text" name="correoLocal" value="{{ old('correoLocal') }}" class="form-control" >
            @error('correoLocal')
                <small  class="form-control" style="color: red">{{ $message }}</small>
            @enderror
            <br>
            <div id="botones">
                <button class="btn btn-outline-success" type="submit">Registrar</button>
            </div>


        </form>
    </div>

    <a href="{{ route('restaurantes.index') }}">
        <h1>Regresar</h1>
    </a>
</x-layouts.app>
