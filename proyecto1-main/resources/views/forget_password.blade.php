<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menú con Submenú</title>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}">
<!--<script src="https://cdn.tailwindcss.com"></script>-->
</head>
<body>
    <div class="layout">
        <div class="layout__forget-password">
            <div class="forget-password__form-box">
                <header class="forget-password__form-header">
                    <h1 class="forget-password__title">RECUPERAR CONTRASEÑA</h1>
                </header>

                <form method="" class="forget-password__user-info">
                    <div class="form__container">
                        <div class="form__group">
                            <input type="email" class="form__input" name="email" placeholder="Correo Electronico"
                            autocomplete="off" required>
                            <label for="name" class="form__label">Correo Electronico</label>
                        </div>
                        
                        <input type="submit" class="form__buttom" value="ENVIAR">
                    </div>
                </form>

                <div class="forget-password__line"></div>
                
                <a href="/" class="forget-password__login">Iniciar Sesión</a>
            </div>
        </div>

        <div class="layout__logo">
                <img src="{{asset('assets/img/logo.png')}}" class="container__img" alt="">
        </div>
    </div>
</body>
</html>
