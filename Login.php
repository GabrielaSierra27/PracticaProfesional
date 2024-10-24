<?php

$title = "AMantComputadores";
$title2 = "Iniciar Sesión";

function getCurrentDate() {
    return date("d-m-Y");
}

if (isset($_GET['error'])) {
    echo '<p style="color:red;">Usuario o contraseña incorrectos</p>';
}
?>

<!DOCTYPE html>
<html lang="es" class="html_lp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/Style.css">
    <title><?php echo $title; ?></title>
</head>

<body class="body_lp">
    <header>
        <img src="./Img/Logo.png" alt="Logo" class="logo_inicio">
        <nav>
            <ul class="menu_inicio">
                <li><a href="./Index.php#inicio">Inicio</a></li>
                <li><a href="./Index.php#nosotros">Sobre Nosotros</a></li>
                <li><a href="./Index.php#servicios">Servicios</a></li>
                <li><a href="./Index.php#contacto">Contáctanos</a></li>
                <li><button onclick="window.location.href='./Login.php';">Iniciar Sesión</button></li>
            </ul>
        </nav>
    </header>

    <main class="main_lp">
        <div class="container_lp">
            <h1 class="title"><?php echo $title2; ?></h1>
            <form class="form_lp" action="Verification.php" method="POST">
                <label for="username">Usuario:</label><br>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password" required><br><br>

                <div class="form_actions_lp">
                    <input type="submit" value="Ingresar">
                    <a href="./PasswordRecovery.php">¿Olvido su contraseña?</a>
                </div>
            </form>
        </div>
    </main>


    <footer>
        <p>© <?php echo date("Y"); ?> AA Mantenimiento a Computadores S.A.S</p>
    </footer>
</body>
</html>


