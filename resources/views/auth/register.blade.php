<x-layouts.auth title="Registrar" class="text-center ms-2 me-5">
    <h3>Registrar</h3>
    <form class="container pe-5 ps-5 me-5 ms-2 text-center"action="/register" method="POST">
        @csrf
        <x-layouts.partials.messages class="container"/>
        <input type="text" placeholder="Nombre" name="name" class="form-control mb-3">
        <input type="email" placeholder="Correo Electronico" name="email" class="form-control mb-3">
        <input type="text" placeholder="Nombre de Usuario" name="username" class="form-control mb-2">
        <input type="password" placeholder="Contraseña" name="password" class="form-control mb-3">
        <input type="password" placeholder="Confirma Contraseña" name="password_confirmation" class="form-control mb-2">
        <div class="row container">
            <div class="col-3 text-end" >
                <label for="datenac"><b>Fecha de Nacimiento:</b></label>
            </div>
            <div class="col-9 form-switch text-start ps-5  pe-5">
                <input  class="form-control" type="date" name="birthday" id="datenac" max="{{date('Y-m-d',strtotime(date('Y-m-d').'-3 year'))}}">
            </div>
        </div>
        <div class="row container">
            <div class="col-3 text-end" >
            
                <label for="is_enabled"><b>Tipo de Usuario:  </b></label>
            </div>
            <div class="col-9 form-switch text-start ps-5  pe-5">
                <select name="type_user" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option  value="" selected>-- Elija una opción----</option>
                    <option value="Cliente">Cliente</option>
                    <option value="Afiliado">Afiliado</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>
        </div>
        <br>
        <input class="btn btn-dark mb-3" type="submit" value="Regisstrar">
    </form>
    
</x-layouts.auth>