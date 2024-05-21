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
        <div class="layout__login">
            <div class="login__form-box">
                <header class="login__form-header">
                    <h1 class="login__title">INICIO DE SESIÓN</h1>
                </header>

                <form method="post" class="login__user-info" action="{{ route('procesar-formulario') }}">

                    @csrf <!-- Esto es equivalente a <input type="hidden" name="_token" value="<?/*php echo $token; */?>">-->

                    <div class="form__container">
                        <div class="form__group">
                            <input type="username" class="form__input" name="username" placeholder="Usuario"
                            autocomplete="off" required>
                            <label for="name" class="form__label">Usuario</label>
                        </div>

                        <div class="form__group">
                            <input type="password" class="form__input" name="password" placeholder="Contraseña"
                            autocomplete="off" required>
                            <label for="email" class="form__label">Contraseña</label>
                        </div>

                        <input type="submit" class="form__buttom" value="ENTRAR">
                    </div>
                </form>

                <div class="login__line"></div>

                <a href="/forget_password" class="login__forget-password">Recuperar Contraseña</a>
            </div>
        </div>

        <div class="layout__logo">
                <img src="{{asset('assets/img/logo.png')}}" class="container__img" alt="">
        </div>
    </div>
</body>
</html>
