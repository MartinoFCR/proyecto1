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
                <a href="/home">
                    <h1 class="title_menu">MENÚ</h1>
                </a>
            </div>
    
            <div class="left__container">
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
>>>>>>> d460c9b06f49c0b4283be1ad9a945ee4044f5e91
                <ul class="dropdown" id="menu">
    
                    <li class="dropdown__list">
                        <a class="dropdown__link" href="">
                            <i class="dropdown__icon fa-solid fa-user-tie"></i>
                            <span class="dropdown__span">ADMINISTRACIÓN</span>
                            <i class="dropdown__arrow fa-solid fa-chevron-down"></i>
    
                            <input type="checkbox" class="dropdown__check">
                        </a>
                        
                        <div class="dropdown__content">
                            <ul class="dropdown__sub">
<<<<<<< HEAD
                                {{-- <li class="dropdown__li">
=======
                <nav></nav>


                <ul class="dropdown" id="menu">
                    <!--
                <li>
                    
                    <div class="left__search-bar">
                        <input type="text">
                    </div>
                    
                </li>
                -->

                    <li class="dropdown__list">
                        <a class="dropdown__link" href="">
                            <i class="dropdown__icon fa-solid fa-user-tie"></i>
                            <span class="dropdown__span">ADMINISTRACIÓN</span>
                            <i class="dropdown__arrow fa-solid fa-chevron-down"></i>

                            <input type="checkbox" class="dropdown__check">
                        </a>

                        <div class="dropdown__content">
                            <ul class="dropdown__sub">
                                <li class="dropdown__li">
>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
=======
                                {{--<li class="dropdown__li">
>>>>>>> d460c9b06f49c0b4283be1ad9a945ee4044f5e91
                                    <a class="dropdown__anchor" href="/config">Ajuste de empresa</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/categories">Categorias de prendas</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/offices">Sucursales</a>
<<<<<<< HEAD
                                </li> --}}
=======
                                </li>
>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/employees">Empleados</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/user_profile">Perfiles de usuario</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/users">Usuarios</a>
                                </li>
                            </ul>
                        </div>
                    </li>
    
                    <li class="dropdown__list">
                        <a class="dropdown__link" href="">
                            <i class="dropdown__icon fa-solid fa-cart-shopping"></i>
                            <span class="dropdown__span">VENTAS</span>
                            <i class="dropdown__arrow fa-solid fa-chevron-down"></i>
    
                            <input type="checkbox" class="dropdown__check">
                        </a>
<<<<<<< HEAD
                        
=======

>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
                        <div class="dropdown__content">
                            <ul class="dropdown__sub">
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/bills">Factura</a>
                                </li>
                                <li class="dropdown__li">
<<<<<<< HEAD
                                    <a class="dropdown__anchor" href="/clients">Clientes</a>
                                </li>
                                {{-- <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/quotes">Cotizacion</a>
                                </li> --}}
=======
                                    <a class="dropdown__anchor" href="{{ url('clients') }}">Clientes</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/quotes">Cotizacion</a>
                                </li>
>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
                            </ul>
                        </div>
                    </li>
    
                    <li class="dropdown__list">
                        <a class="dropdown__link" href="">
                            <i class="dropdown__icon fa-solid fa-cart-flatbed"></i>
                            <span class="dropdown__span">COMPRAS</span>
                            <i class="dropdown__arrow fa-solid fa-chevron-down"></i>
    
                            <input type="checkbox" class="dropdown__check">
                        </a>
    
                        <div class="dropdown__content">
                            <ul class="dropdown__sub">
                                <li class="dropdown__li">
<<<<<<< HEAD
                                    <a class="dropdown__anchor" href="/suppliers">Proveedores</a>
=======
                                    <a class="dropdown__anchor" href="{{ url('suppliers') }}">Proveedores</a>
>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/buys">Compras</a>
                                </li>
<<<<<<< HEAD
                                {{-- <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/buys_orders">Orden de compra</a>
                                </li> --}}
=======
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/buys_orders">Orden de compra</a>
                                </li>
>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
                            </ul>
                        </div>
                    </li>
    
                    <li class="dropdown__list">
                        <a class="dropdown__link" href="">
                            <i class="dropdown__icon fa-solid fa-shop"></i>
                            <span class="dropdown__span">ALMACEN</span>
                            <i class="dropdown__arrow fa-solid fa-chevron-down"></i>
    
                            <input type="checkbox" class="dropdown__check">
                        </a>
    
                        <div class="dropdown__content">
                            <ul class="dropdown__sub">
                                {{-- <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/storages">Almacenes</a>
                                </li>
<<<<<<< HEAD
<<<<<<< HEAD
                                {{-- <li class="dropdown__li">
=======
                                <li class="dropdown__li">
>>>>>>> d460c9b06f49c0b4283be1ad9a945ee4044f5e91
                                    <a class="dropdown__anchor" href="/kardex">Kardex</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/transfers">Traslados</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/storage_config">Ajustes</a>
                                </li> --}}
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/products">Articulos</a>
=======
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/kardex">Kardex</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/transfers">Traslados</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/storage_config">Ajustes</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="{{ url('products') }}">Articulos</a>
>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
                                </li>
                            </ul>
                        </div>
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
                        <a href="/" class="log-out__link">
                            <i class="log-out__icon fa-solid fa-arrow-right-from-bracket"></i>
                        </a>
                        <h6 class="log-out__name">Cerrar Sesion</h6>
                    </div>
                </div>
            </div>

            <div class="layout__content">

                <h3 class="content__info">Compras / Proveedores</h3>

                    <div class="center-content">
                        <form action="{{ url('/suppliers/'.$suppliers->supplier_id ) }}" method="post">
                            @csrf
                            {{ method_field('PATCH') }}
                            @include('menu/buys/form_suppliers', ['modo'=>'Editar'])
                        </form>
                    </div>
            </div>
<<<<<<< HEAD
        </div>
    </div>
=======

        </div>
    </div>

    <div class="footer">
        <div class="footer__info">
            <h3 class="info__text">Pie de página</h3>
        </div>
    </div>


>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
</body>

</html>