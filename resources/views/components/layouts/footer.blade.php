<footer class=" text-white py-4 bg-dark">
    <div class="container">
        <nav class="row">
            <ul class="col-12 col-md-5 list-unstyled">
                <li><h5> Escuela politecnica Nacional</h5></li>
                <li>{{ date('Y-m-d') }}</li>
            </ul>
            <ul class="col-18 col-md-4 list-unstyled">
                <h4>Miembros del equipo: </h4>
                <li>Jimy Calvo</li>
                <li>Martin Rosero</li>
                <li>Kevin Moreno</li>
            </ul>

            <ul class="col-12 col-md-3 list-unstyled">
                <h4>Laboratorio Laravel </h4>
            </ul>
            <div class="row text-center">
                <hr>
               <p class="col">
               &copy;{{ now()->year }} Desarrollo de Aplicaciones Web | Todo los derechos Reservados
               </p>
            </div>

        </nav>
    </div>
</footer>