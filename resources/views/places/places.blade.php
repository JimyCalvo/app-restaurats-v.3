<x-layouts.app title="Ubicaciones">
    <h1>Ubicaciones</h1>
    @auth
        <div class="container text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6710.001773125848!2d-78.49213059641266!3d-0.21232374847242644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a107e1cd44b%3A0x88a284f66939ed4!2sESCUELA%20POLIT%C3%89CNICA%20NACIONAL!5e0!3m2!1ses-419!2sec!4v1671721365784!5m2!1ses-419!2sec" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    @endauth
    @guest
        <p>Para ver el contenido <a href="/login">Inicie Sesión</a></p>
    @endguest
</x-layouts.app>