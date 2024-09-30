<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Zapateria La Sangileña - Registro e Inicio de Sesión</title>
</head>

<body>

    <div class="container" id="container">
        <!-- Sign-up form -->
        <div class="form-container sign-up">
            <form>
                <h1>Crear Cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <span>Utilice Su Correo Electrónico Para Registrarse</span>
                <input type="text" placeholder="Nombre">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Contraseña">
                <button>Crear Cuenta</button>
            </form>
        </div>

        <!-- Sign-in form (Login) -->
        <div class="form-container sign-in">
            <form action="modelo/loguear.php" method="post">
                <h1>ZAPATERIA LA SANGILEÑA</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <span>Utilice su usuario y contraseña para ingresar</span>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
                <br>
                <input type="password" name="clave" id="clave" placeholder="Contraseña" required>
                <br>
                <a href="#">¿Has Olvidado Tu Contraseña?</a>
                <button type="submit">Ingresar</button>
            </form>
        </div>

        <!-- Toggle panel -->
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>¡Hola, Bienvenido!</h1>
                    <p>Regístrate con tus datos personales para ingresar a nuestra zapatería.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>
