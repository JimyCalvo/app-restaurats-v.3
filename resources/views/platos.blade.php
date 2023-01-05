<x-layouts.app title="Ubicaciones">
    <h1>patos</h1>
    @auth
        <div class="card">
            <div class="card_landing" style="--i:url(img.jpg)">
                <h6>Ceviche</h6>
            </div>
            <div class="card_info">
                <div class="head">
                    <p class="title">Ceviche</p>
                    <div class="description">
                        <div class="item">
                            <i class="fa-regular fa-clock"></i>
                            <p>40 min</p>
                        </div>
                        <div class="item">
                            <i class="fa-regular fa-user"></i>
                            <p>4</p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <p class="title">Ingredientes:</p>
                    <ul class="list">
                        <li>1 kilogramo de pescado</li>
                        <li>1 cebolla cortada en julianas</li>
                        <li>1 taza de caldo de pescado</li>
                        <li>1 pizca de sal y pimienta</li>
                        <li>10 limones</li>
                        <li>1 ají amarillo picado</li>
                    </ul>
                </div>

                <div class="action">
                    <a href="#" class="btn">Ver Restaurante</a>
                </div>
            </div>
        </div>
    @endauth
    @guest
        <p>Para ver el contenido <a href="/login">Inicie Sesión</a></p>
    @endguest
</x-layouts.app>