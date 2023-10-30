<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/Style.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tiene cuenta?</h3>
                    <p>Inicia sesión para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Iniciar sesion</button>
                </div>
            </div>
            <!-- Formulario de login y registro -->
            <div class="contenedor__login-register">
                <!-- Formulario Login -->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo electronico" name="correo" id="">
                    <input type="password" placeholder="Contraseña" name="contrasena" id="">
                    <button type="submit">Entrar</button>
                </form>
                <!-- Formulario registro -->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" id="">
                    <input type="text" placeholder="Correo electronico" name="correo" id="">
                    <input type="text" placeholder="Usuario" id="" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena" id="">
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="./assets/js/Index.js"></script>

</body>
</html>