<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="titulo text-center py-4">
            <h1>LARAVEL LIMPIO PARA HACER PRUEBAS</h1>
        </div>
        <div class="links">
            {{-- <a href="{{ route('users.index') }}">Usuarios</a>
            <a href="{{ route('posts.index') }}">Posts</a>
            <a href="{{ route('comments.index') }}">Comentarios</a> --}}
        </div>
        <div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Celular</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Andersson</td>
                        <td>Pérez</td>
                        <td>anndersson.perez@hotmail.es</td>
                        <td>58426090</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
