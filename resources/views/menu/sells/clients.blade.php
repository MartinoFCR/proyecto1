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
                                {{--<li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/config">Ajuste de empresa</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/categories">Categorias de prendas</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/offices">Sucursales</a>
                                </li> --}}
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
                        
                        <div class="dropdown__content">
                            <ul class="dropdown__sub">
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/bills">Factura</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/clients">Clientes</a>
                                </li>
                                {{-- <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/quotes">Cotizacion</a>
                                </li> --}}
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
                                    <a class="dropdown__anchor" href="/suppliers">Proveedores</a>
                                </li>
                                <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/buys">Compras</a>
                                </li>
                                {{-- <li class="dropdown__li">
                                    <a class="dropdown__anchor" href="/buys_orders">Orden de compra</a>
                                </li> --}}
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
                                <li class="dropdown__li">
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

                <h3 class="content__info">Ventas / Cliente</h3>

                <div class="center-content">
                    <!-- AQUI EMPIEZA LO QUE CAMBIA EN CADA VISTA-->

                    <div class="content__inputs">
                        <div class="inputs__group">
                            <input class="inputs__input" type="text" placeholder="Buscar" autocomplete="off">
                            <label class="inputs__label" for="">Buscar</label>
                        </div>
                        <button class="search__button"><i class=" fa-solid fa-magnifying-glass"></i></button>
                        <a href="{{ url('clients/create') }}">
                            <input type="submit" class="inputs__buttom" value="+ CREAR CLIENTE">
                        </a>
                    </div>

                    <div class="content__data">
                        @if(Session::has('mensaje'))
                        {{ Session::get('mensaje') }}
                        @endif
                        <table class="products__table">
                            <thead class="table__th">
                                <tr>
                                    <th class="th__title">Cedula</th>
                                    <th class="th__title">Nombre</th>
                                    <th class="th__title">Apellidos</th>
                                    <th class="th__title">Telefono</th>
                                    <th class="th__title">Ciudad</th>
                                    <th class="th__title">Fecha de nacimiento</th>
                                    <th class="th__title">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="table__td">
                                @foreach($customers as $client)
                                <tr>
                                    <td class="td__data clients-id">{{ $client->id }}</td>
                                    <td class="td__data clients-name">{{ $client->name_customer }}</td>
                                    <td class="td__data clients-lastname">{{ $client->lastname_customer }}</td>
                                    <td class="td__data clients-phone">{{ $client->phone }}</td>
                                    <td class="td__data clients-city">{{ $client->city }}</td>
                                    <td class="td__data clients-date">{{ $client->date }}</td>
                                    <td class="td__data clients-buttoms">
                                        <a href="{{ url('clients/'.$client->id.'/edit') }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ url('/clients/'.$client->id) }}" class="d-inline" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <i class="delete__icon fa-solid fa-trash-can" onclick="return confirm('¿Quieres Eliminar el producto?')"></i>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>