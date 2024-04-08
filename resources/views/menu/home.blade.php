<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">
<!--<script src="https://cdn.tailwindcss.com"></script>-->
</head>
<body>


<div class="layout">

    <div class="layout__left">
        <ul>
            <li onclick="toggleSubMenu('submenu1')">Administración</li>
            <div class="submenu" id="submenu1">
                <ul>
                    <li><a href="#">Perfiles de usuarios</a></li>
                    <li><a href="#">Usuario</a></li>
                    <li><a href="#">Empleados</a></li>
                </ul>
            </div>
            <li onclick="toggleSubMenu('submenu2')">Compras</li>
            <div class="submenu" id="submenu2">
                <ul>
                    <!-- Opciones de submenú para Compras -->
                </ul>
            </div>
            <li onclick="toggleSubMenu('submenu3')">Ventas</li>
            <div class="submenu" id="submenu3">
                <ul>
                    <!-- Opciones de submenú para Ventas -->
                </ul>
            </div>
            <li onclick="toggleSubMenu('submenu4')">Almacén</li>
            <div class="submenu" id="submenu4">
                <ul>
                    <!-- Opciones de submenú para Almacén -->
                </ul>
            </div>
        </ul>
    </div>

    <div class="layout__right">
        <div class="layout__header">
            <h1>ESTAMPADOS PERSONALIZADOS</h1>
        </div>
        
        <div>
            <div class="center-content">
                <!-- Contenido central -->
            </div>
            <div class="right-content">
                <!-- Contenido derecho -->
            </div>
        </div>
    </div>
</div>
<div class="footer">
    Pie de página
</div>

<script>
    function toggleSubMenu(submenuId) {
        var submenu = document.getElementById(submenuId);
        if (submenu.style.display === "block") {
            submenu.style.display = "none";
        } else {
            submenu.style.display = "block";
        }
    }
</script>

</body>
</html>
