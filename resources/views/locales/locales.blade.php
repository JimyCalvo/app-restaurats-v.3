<x-layouts.app title="Locales">
    <h1>Locales</h1>
    
    @auth
        @switch(auth()->user()->type_user)
            @case("Administrador")
                <div class="container" >
                    <x-admin.localesAdmin/>
                </div>
                @break
            @case("Cliente")
                <h5>Vista- Generl </h5>
                @break
            @case("Afiliado")
                <h5>Editar local</h5>
                @break
            @default
                
                @break
        @endswitch
    @endauth
    @guest
        <p>Para ver el contenido <a href="/login">Inicie Sesión</a></p>
    @endguest
    
</x-layouts.app>