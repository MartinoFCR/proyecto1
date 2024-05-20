<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/reset.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
<script src="https://kit.fontawesome.com/6dd0aa23c2.js" crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
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

            <ul class="dropdown" id="menu">

                <li class="dropdown__list">
                    <a class="dropdown__link" href="">
                        <i class="dropdown__icon fa-solid fa-user-tie"></i>
                        <span class="dropdown__span">ADMINISTRACIÓN</span>
                        <i class="dropdown__arrow fa-solid fa-chevron-down"></i>

                        <input type="checkbox" class="dropdown__check">
                    </a>
=======
            <nav></nav>


            <ul class="dropdown" id="menu">
                <!--
                <li>
>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
                    
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
                    
<<<<<<< HEAD
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
=======
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
                                <a class="dropdown__anchor" href="/config">Ajuste de empresa</a>
                            </li>
                            <li class="dropdown__li">
                                <a class="dropdown__anchor" href="/categories">Categorias de prendas</a>
                            </li>
                            <li class="dropdown__li">
                                <a class="dropdown__anchor" href="/offices">Sucursales</a>
                            </li>
                            <li class="dropdown__li">
                                <a class="dropdown__anchor" href="/employees">Empleados</a>
                            </li>
                            <li class="dropdown__li">
                                <a class="dropdown__anchor" href="/user_profile">Perfiles de usuario</a>
                            </li>
                            <li class="dropdown__li">
                                <a class="dropdown__anchor" href="/users">Usuarios</a>
                            </li>
>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
                        </ul>
                    </div>
                </li>

                <li class="dropdown__list">
                    <a class="dropdown__link" href="">
<<<<<<< HEAD
                        <i class="dropdown__icon fa-solid fa-cart-flatbed"></i>
                        <span class="dropdown__span">COMPRAS</span>
=======
                        <i class="dropdown__icon fa-solid fa-cart-shopping"></i>
                        <span class="dropdown__span">VENTAS</span>
>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
                        <i class="dropdown__arrow fa-solid fa-chevron-down"></i>

                        <input type="checkbox" class="dropdown__check">
                    </a>
<<<<<<< HEAD

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
=======
                    
                    <div class="dropdown__content">
                        <ul class="dropdown__sub">
                            <li class="dropdown__li">
                                <a class="dropdown__anchor" href="/bills">Factura</a>
                            </li>
                            <li class="dropdown__li">
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
<<<<<<< HEAD
                        <i class="dropdown__icon fa-solid fa-shop"></i>
                        <span class="dropdown__span">ALMACEN</span>
                        <i class="dropdown__arrow fa-solid fa-chevron-down"></i>

=======
                        <i class="dropdown__icon fa-solid fa-cart-flatbed"></i>
                        <span class="dropdown__span">COMPRAS</span>
                        <i class="dropdown__arrow fa-solid fa-chevron-down"></i>

                        <input type="checkbox" class="dropdown__check">
                    </a>

                    <div class="dropdown__content">
                        <ul class="dropdown__sub">
                            <li class="dropdown__li">
                                <a class="dropdown__anchor" href="{{ url('suppliers') }}">Proveedores</a>
                            </li>
                            <li class="dropdown__li">
                                <a class="dropdown__anchor" href="/buys">Compras</a>
                            </li>
                            <li class="dropdown__li">
                                <a class="dropdown__anchor" href="/buys_orders">Orden de compra</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="dropdown__list">
                    <a class="dropdown__link" href="">
                        <i class="dropdown__icon fa-solid fa-shop"></i>
                        <span class="dropdown__span">ALMACEN</span>
                        <i class="dropdown__arrow fa-solid fa-chevron-down"></i>

>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
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

            <h3 class="content__info">Bienvenido</h3>

            <div class="center-content home">
                <div class="figures">
                    <figure class="highcharts-figure">
                        <div id="container">
                            <script>
                                Highcharts.chart('container', {
                                chart: {
                                    type: 'pie'
                                },
                                title: {
                                    text: 'Egg Yolk Composition'
                                },
                                tooltip: {
                                    valueSuffix: '%'
                                },
                                subtitle: {
                                    text:
                                    'Source:<a href="https://www.mdpi.com/2072-6643/11/3/684/htm" target="_default">MDPI</a>'
                                },
                                plotOptions: {
                                    series: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: [{
                                            enabled: true,
                                            distance: 20
                                        }, {
                                            enabled: true,
                                            distance: -40,
                                            format: '{point.percentage:.1f}%',
                                            style: {
                                                fontSize: '1.2em',
                                                textOutline: 'none',
                                                opacity: 0.7
                                            },
                                            filter: {
                                                operator: '>',
                                                property: 'percentage',
                                                value: 10
                                            }
                                        }]
                                    }
                                },
                                series: [
                                    {
                                        name: 'Percentage',
                                        colorByPoint: true,
                                        data: [
                                            {
                                                name: 'Water',
                                                y: 55.02
                                            },
                                            {
                                                name: 'Fat',
                                                sliced: true,
                                                selected: true,
                                                y: 26.71
                                            },
                                            {
                                                name: 'Carbohydrates',
                                                y: 1.09
                                            },
                                            {
                                                name: 'Protein',
                                                y: 15.5
                                            },
                                            {
                                                name: 'Ash',
                                                y: 1.68
                                            }
                                        ]
                                    }
                                ]
                                });
                            </script>
                        </div>
                    </figure>

                    <figure class="highcharts-figure">
                        <div id="container2">
                            <script>
                                Highcharts.chart('container2', {

                                title: {
                                    text: 'U.S Solar Employment Growth',
                                    align: 'left'
                                },

                                subtitle: {
                                    text: 'By Job Category. Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>.',
                                    align: 'left'
                                },

                                yAxis: {
                                    title: {
                                        text: 'Number of Employees'
                                    }
                                },

                                xAxis: {
                                    accessibility: {
                                        rangeDescription: 'Range: 2010 to 2020'
                                    }
                                },

                                legend: {
                                    layout: 'vertical',
                                    align: 'right',
                                    verticalAlign: 'middle'
                                },

                                plotOptions: {
                                    series: {
                                        label: {
                                            connectorAllowed: false
                                        },
                                        pointStart: 2010
                                    }
                                },

                                series: [{
                                    name: 'Installation & Developers',
                                    data: [
                                        43934, 48656, 65165, 81827, 112143, 142383,
                                        171533, 165174, 155157, 161454, 154610
                                    ]
                                }, {
                                    name: 'Manufacturing',
                                    data: [
                                        24916, 37941, 29742, 29851, 32490, 30282,
                                        38121, 36885, 33726, 34243, 31050
                                    ]
                                }, {
                                    name: 'Sales & Distribution',
                                    data: [
                                        11744, 30000, 16005, 19771, 20185, 24377,
                                        32147, 30912, 29243, 29213, 25663
                                    ]
                                }, {
                                    name: 'Operations & Maintenance',
                                    data: [
                                        null, null, null, null, null, null, null,
                                        null, 11164, 11218, 10077
                                    ]
                                }, {
                                    name: 'Other',
                                    data: [
                                        21908, 5548, 8105, 11248, 8989, 11816, 18274,
                                        17300, 13053, 11906, 10073
                                    ]
                                }],

                                responsive: {
                                    rules: [{
                                        condition: {
                                            maxWidth: 500
                                        },
                                        chartOptions: {
                                            legend: {
                                                layout: 'horizontal',
                                                align: 'center',
                                                verticalAlign: 'bottom'
                                            }
                                        }
                                    }]
                                }

                                });

                            </script>
                        </div>
                    </figure>
                </div>
            </div>
        </div>

    </div>
</div>
<<<<<<< HEAD
=======

<div class="footer">
    <div class="footer__info">
        <h3 class="info__text">Pie de página</h3>
    </div>
</div>


>>>>>>> 83f6fec6d9cc77be5dc238f9bd942e70ae75f8c9
</body>
</html>