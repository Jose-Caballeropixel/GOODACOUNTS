<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/estilosdashboard.css') }}">
    <script src="{{ asset('/js/menuhorizontal.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/estilosadmin.css') }}">
</head>

<body>

    <input type="checkbox" id="check">
    <header>
        <div class="menu_bar">
            <div class="interiorbar">
                <h3>Goodacount</h3>
            </div>
        </div>
        <nav style="text-align: right;">
            <ul>
                <li><a href="#">Goodacount</a></li>
                <li></li>
                <li style="float: right;"><a href="#">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>

    <div class="contenido-general">
        <div class="sidebar">
            <div class="titul">
                <a href="{{ route('administrador.index') }}">
                    <li class="fas fa-tachometer-alt"></li> <span>Tablero</span>
                </a>
                {{-- <a href="{{ route('gerente.sucursal.index') }}">
                    <li class="fas fa-store-alt"></li> <span>Sucursales</span>
                </a> --}}
                <a href="{{ route('administrador.usuarios.index') }}">
                    <li class="fas fa-users"></li> <span>Empresarios</span>
                </a>
                {{-- <a href="">
                    <li class="fas fa-users"></li> <span>Clientes</span>
                </a>
                <a href="">
                    <li class="fas fa-address-book"></li> <span>Proveedores</span>
                </a>
                <a href="">
                    <li class="fas fa-shopping-bag"></li> <span>Ventas</span>
                </a>
                <a href="">
                    <li class="fas fa-boxes"></li> <span>Pedidos</span>
                </a>
                <a href="">
                    <li class="fas fa-box"></li> <span>Bodegas</span>
                </a>
                <a href="">
                    <li class="fas fa-sign-out-alt"></li> <span>Salir</span>
                </a> --}}
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="fondo"></div>
                <div class="cont-dashboard">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
