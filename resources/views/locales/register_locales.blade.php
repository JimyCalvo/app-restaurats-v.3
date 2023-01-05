
<x-layouts.app title="Registrar local">
    <h1>Registrar Local</h1>
    @auth
        <div id = "xd">
            <form action="{{ route('restaurantes.store') }}" method="POST" enctype="multipart/form-data">
                <label class="label-control">Razon social</label>
                <input  class="form-control" type="text" name="RazonSocial">
                @error('RazonSocial')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <br>
                <label>Nombre del Restaurante</label>
                <input  class="form-control" type="text" name="nombreRestaurante">
                @error('nombreRestaurante')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <br>
                <label>Direccion del local</label>
                <input  class="form-control" type="text" name="direccionLocal">
                @error('direccionLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <br>
                <label>Gerente del local</label>
                <input  class="form-control" type="text" name="nombreGerente">
                @error('nombreGerente')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <br>
                <label>Foto</label>
                <input type="file"  name="fotoLocal" value="{{ old('fotoLocal') }}" class="form-control">
                @error('fotoLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <br>
                <label><b>Tipo de Local</b></label>
                <br>
                <label> Restaurante:
                    <input type="radio" name="categoriaLocal" value="Restaurante">
                    @error('categoriaLocal')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </label>
                <label> Comida Rapida:
                    <input type="radio" name="categoriaLocal" value="Comida Rapida">
                    @error('categoriaLocal')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </label>
                <label> Cafeteria:
                    <input type="radio" name="categoriaLocal" value="Cafeteria">
                    @error('categoriaLocal')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </label>
                <label> Bar:
                    <input type="radio" name="categoriaLocal" value="Bar">
                    @error('categoriaLocal')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </label>
                <label> Miselanea:
                    <input type="radio" name="categoriaLocal" value="Miselanea">
                    @error('categoriaLocal')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </label>
                <br>
                <br>
                <label>Direccion de E-mail</label>
                <input  class="form-control" type="text" name="E-mail">
                @error('correoLocal')
                    <small style="color: red">{{ $message }}</small>
                @enderror
                <br>
                <div class="container text-center" id="botones">
                <button  class="btn btn-outline-success" type="submit">Registrar</button>
                <button class="btn btn-outline-danger" type="cleanForm">Borrar</button>
                <br>
                <br>
                <a href="{{ route('home') }}">
                    <h4>Regresar</h4>
                </a>
                </div>
            </form>
        </div>
    @endauth
    @guest
        <p>Para ver el contenido <a href="/login">Inicie Sesión</a></p>
    @endguest
</x-layouts.app>


