<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('/css/estilosdashboard.css')}}">
</head>

<body>
    <input type="checkbox" id="check">
    <div class="navbar navbar-expand-lg">
        <div class="lado-derecho">
            <a href="">Good Accounts</a>
            <label for="check">
                <li class="fas fa-bars" id="#btn-sidebar"></li>
            </label>
        </div>
        <div class="lado-izquierdo">
            <ul>
               <a href=""><span>Cerrar Sesion</span></a>
            </ul>
        </div>
    </div>

    <div class="sidebar">
        <div class="opciones-sidebar">
            <a href=""><li class="fas fa-tachometer-alt"></li> <span>Tablero</span>
            </a>
            <a href=""><li class="fas fa-tags"></li> <span>Productos</span>
            </a>
            <a href=""><li class="fas fa-users"></li> <span>Clientes</span>
            </a>
            <a href=""><li class="fas fa-address-book"></li>  <span>Proveedores</span>
            </a>
            <a href=""><li class="fas fa-shopping-bag"></li> <span>Ventas</span>
            </a>
            <a href=""><li class="fas fa-boxes"></li> <span>Pedidos</span>
            </a>
            <a href=""><li class="fas fa-sign-out-alt"></li> <span>Salir</span>
            </a>
        </div>
    </div>

    <div class="content">
        <div class="fondo-cabecera-contenido">
        </div>
        <div class="contenedor-contenido-general">
            <div class="contenido-general">
                <div class="titulo-contenido">
                    <h4>Bienvenido (Nombre de usuario)</h4>
                    <p>¿Que deseas hacer?</p>
                </div>
                <div class="opciones-contenido">
                    <div class="col">
                        1
                    </div>
                    <div class="col">
                        2
                    </div>
                    <div class="col">
                        3
                    </div>
                </div>
                <div class="opciones-contenido">
                    <div class="col">
                        1
                    </div>
                    <div class="col">
                        2
                    </div>
                    <div class="col">
                        3
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
