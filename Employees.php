<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}

$title = "AMANTCOMPUTADORES";
$title2 = "Empleados";

function getCurrentDate() {
    return date("d-m-Y");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <span class="menu_desplegable" onclick="openMenu()">&#9776;</span>
        <h1 class="titulo_principal"><?php echo $title; ?></h1>
        <a class="close-btn" href="Logout.php">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </header>

    <div id="sideMenu" class="side-menu">
        <a href="javascript:void(0)" onclick="closeMenu()">&times;</a>
        <a href="Dashboard.php">Tablero</a>
        <a href="Spreadsheets.php">Planillas</a>
        <a href="Employees.php">Empleados</a>
        <a href="Customers.php">Clientes</a>
        <a href="Profile.php">Perfil</a>
        <a href="Configuration.php">Configuración</a>
    </div>  

    <main>
        <h1 class="titulo_secundario"><?php echo $title2; ?></h1>
        <div class="Container_Create_Browser">
            <button class="btn_Container_Create" onclick="window.location.href='./CreateEmployee.php';">Crear <br> Empleado</button>
            <button class="btn_Container_Browser" onclick="window.location.href='./BrowserEmployee.php';">Consultar <br> Empleado</button>
        </div>
    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> AA Mantenimiento a Computadores S.A.S</p>
    </footer>

    <script src="./Js/Menu.js"></script>
</body>
</html>