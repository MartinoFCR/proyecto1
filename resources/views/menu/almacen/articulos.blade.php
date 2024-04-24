<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/reset.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
<script src="https://kit.fontawesome.com/6dd0aa23c2.js" crossorigin="anonymous"></script>
<!--<script src="https://cdn.tailwindcss.com"></script>-->
</head>
<body>


<div class="layout">

    <div class="layout__left">
        <div class="left__title">
            <h1 class="title_menu">MENÚ</h1>
        </div>

        <div class="left__container">
            <ul class="list__content">
                <!--
                <li>
                    
                    <div class="left__search-bar">
                        <input type="text">
                    </div>
                    
                </li>
            -->

                <li>
                    <a class="option__link" href="">
                        <i class="icono"></i>
                        <span class="option__title">ADMINISTRACIÓN</span>
                    </a>
                    <ul class="list__submenu">
                        <li><a href="#">Ajuste de empresa</a></li>
                        <li><a href="#">Categorias de prendas</a></li>
                        <li><a href="#">Sucursales</a></li>
                        <li><a href="#">Empleados</a></li>
                        <li><a href="#">Perfiles de usuario</a></li>
                        <li><a href="#">Usuarios</a></li>
                    </ul>
                </li>

                <li>
                    <a class="option__link" href="">
                        <i class="icono"></i>
                        <span class="option__title">VENTAS</span>
                    </a>
                    <ul class="list__submenu">
                        <li><a href="#">Factura</a></li>
                        <li><a href="#">Clientes</a></li>
                        <li><a href="#">Cotizacion</a></li>
                    </ul>
                </li>

                <li>
                    <a class="option__link" href="">
                        <i class="icono"></i>
                        <span class="option__title">COMPRAS</span>
                    </a>
                    <ul class="list__submenu">
                        <li><a href="#">Proveedores</a></li>
                        <li><a href="#">Compras</a></li>
                        <li><a href="#">Orden de compra</a></li>
                    </ul>
                </li>

                <li>
                    <a class="option__link" href="">
                        <i class="icono"></i>
                        <span class="option__title">ALMACEN</span>
                    </a>
                    <ul class="list__submenu">
                        <li><a href="#">Almacenes</a></li>
                        <li><a href="#">Kardex</a></li>
                        <li><a href="#">Traslados</a></li>
                        <li><a href="#">Ajustes</a></li>
                        <li><a href="#">Articulos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="layout__right">
        <div class="layout__header">
            <div class="header__name">
                <h1 class="header__title">ESTAMPADOS PERSONALIZADOS</h1>
            </div>

            <div class="header__content">
                <div class="header__user">
                    <div class="user__container-img">
                        <img class="user__img" src="{{ asset('assets/img/user.jpg') }}" alt="Foto del Usuario">
                    </div>

                    <h6 class="user__name">Usuario</h6>
                </div>

                <div class="header__log-out">
                    <a href="#" class="log-out__link">
                        <i class="log-out__icon fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                    <h6 class="log-out__name">Cerrar Sesion</h6>
                </div>
            </div>
        </div>

        <div class="layout__content">

            <h3 class="content__info">Almacen / Articulos</h3>

            <div class="center-content">
    <!-- AQUI EMPIEZA LO QUE CAMBIA EN CADA VISTA-->

                <div class="content__inputs">
                    <div class="inputs__group">
                        <input class="inputs__input" type="text" placeholder="Buscar" autocomplete="off">
                        <label class="inputs__label" for="">Buscar</label>
                    </div>
                    <button class="search__button"><i class=" fa-solid fa-magnifying-glass"></i></button>

                    <input type="submit" class="inputs__buttom" value="+ CREAR ARTICULO">
                </div>

                <div class="content__data">
                    AQUI YA PONEN SUS TABLAS Y DEMAS INFORMACIÓN
                </div>

        <!-- AQUI TERMINA LO QUE CAMBIA EN CADA VISTA-->
            </div>
        </div>


    </div>
</div>

<div class="footer">
    <div class="footer__info">
        <h3 class="info__text">Pie de página</h3>
    </div>
</div>
<script>
    function toggleSubMenu(option__submenuId) {
        let option__submenu = document.getElementById(option__submenuId);
        if (option__submenu.style.display === "block") {
            option__submenu.style.display = "none";
        } else {
            option__submenu.style.display = "block";
        }
    }
</script>

</body>
</html>