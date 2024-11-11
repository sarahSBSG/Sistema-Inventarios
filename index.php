<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GREEN</title>
    <link rel="stylesheet" href="formats/css/estilos.css">
</head>
<body>

<div class="container">
    <div class="bubbles">
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
    </div>


    <div class="contenedor__todo">
        <div class="cuadro__trasero">
            <div class="cuadro__trasero-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la pagina</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>    
            </div>
            <div class="cuadro__trasero-registrar">
                <h3>¿Aun no tienes una cuenta?</h3>
                <p>Regístrate para que púedas iniciar sesión</p>
                <button id="btn__registrar">Regístrarse</button>    
            </div>
        </div>
            <!--FORMULARIO DE LOGIN  REGISTER-->
            <div class="cuadro__login-register">
                <!--LOGIN-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña"> 
                    <button>Entrar</button>
                </form>
                <!--REGISTRAR-->
                <form action="" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo">
                    <input type="text" placeholder="Correo Electronico">
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña"> 
                    <button>Registrarse</button>
                </form>
            </div>
    </div>
</div>

<script src="formats/js/script.js"></script>

</body>
</html>