<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}

$title = "AMANTCOMPUTADORES";
$title2 = "Consultar Clientes";

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
    <link rel="stylesheet" href="./Css/prueba.css">
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

    <div class="wrapper">
        <main>
            <h1 class="titulo_secundario"><?php echo $title2; ?></h1>
            <div class="consulta-modulo">
                <div class="buscador">
                    <input type="text" id="searchBar" placeholder="Buscar por Documento..." class="input-busqueda">
                    <button id="searchButton" class="btn-busqueda">Buscar</button>
                </div>

                <table class="tabla-resultados">
                    <thead>
                        <tr>
                            <th>Entidad</th>
                            <th>Nit</th>
                            <th>Correo Electrónico</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    
    <footer>
        <p>© <?php echo date("Y"); ?> AA Mantenimiento a Computadores S.A.S</p>
    </footer>

    <script src="./Js/Menu.js"></script>
</body>
</html>