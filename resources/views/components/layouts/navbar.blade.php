
<div class="l-navbar bg-dark" id="nav-bar">
	<nav class="nav">
		<div>
			<a href="{{route('home')}}" class="nav_logo"> <i class='bx bx-restaurant  nav_logo-icon'></i> <span class="nav_logo-name">Star Restaurants</span> </a>
		
			<div class="nav_list">
				<a href="{{route('home')}}"  class="nav_link"> <i class='bx bx-home nav_icon'></i> <span class="nav_name">Inicio</span> </a>
				<a href="{{route('restaurantes.index')}}" class="nav_link"> <i class='bx bx-search nav_icon'></i> <span class="nav_name">Locales</span> </a>
				<a href="{{route('platos.index')}}" class="nav_link"> <i class=' bx bx-receipt nav_icon'></i> <span class="nav_name">Platos</span> </a>
				<a href="{{route('categorias.index')}}" class="nav_link"> <i class='bx bx-basket nav_icon'></i> <span class="nav_name">Categorias</span> </a>
				<a href="{{route('places')}}" class="nav_link"> <i class='bx bx-map nav_icon'></i> <span class="nav_name">Ubicaciones</span> </a>
				<a href="{{route('about')}}" class="nav_link"> <i class='bx bx-info-circle nav_icon'></i> <span class="nav_name">Acerca de Nosotros</span> </a>
				<a href="{{route('contact')}}" class="nav_link"> <i class='bx bx-phone nav_icon'></i> <span class="nav_name">Contactos</span> </a>
			</div>
		</div>
		@auth
			<a href="{{route('logout')}}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar Sesión</span> </a>
		@endauth
		@guest
		<a href="{{route('logout')}}" class="nav_link"> <i class='bx bx-log-in nav_icon'></i> <span class="nav_name">Iniciar Sesión</span> </a>
		@endguest
		
	</nav>
</div>
