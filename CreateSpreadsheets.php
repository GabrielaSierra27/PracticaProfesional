<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}

$title = "AMANTCOMPUTADORES";
$title2 = "Registrar Planilla";

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
        <div class="container_Crear">
            <h1 class="titulo_secundario"><?php echo $title2; ?></h1>
            <form action="Creation.php" method="POST">
                <div class="form_row_Crear">
                    <div class="form_column_Crear">
                        <label for="ticked">Número de Ticked:</label><br>
                        <input type="number" id="ticked" name="ticked" required><br><br>

                        <label for="entity">Entidad:</label><br>
                        <select id="entity" name="entity" required>
                            <option value="CC">Cédula de Ciudadanía</option>
                            <option value="TI">Tarjeta de Identidad</option>
                            <option value="CE">Cédula de Extranjería</option>
                            <option value="PA">Pasaporte</option>
                            <option value="RC">Registro Civil</option>
                        </select><br><br>

                        <label for="unit">Dependencia:</label><br>
                        <input type="text" id="unit" name="unit" required><br><br>

                        <label for="contac">Contacto:</label><br>
                        <input type="text" id="contac" name="contac" required><br><br>

                        <label for="diagnostic">Contador Diagnostico:</label><br>
                        <input type="text" id="diagnostic" name="diagnostic" required><br><br>

                        <label for="closing">Contador Cierre:</label><br>
                        <input type="text" id="closing" name="closing" required><br><br>

                        <label for="brand">Marca:</label><br>
                        <input type="text" id="brand" name="brand" required><br><br>

                        <label for="serial">Serial:</label><br>
                        <input type="text" id="serial" name="serial" required><br><br>
                    </div>

                    <div class="form_column_Crear">
                        <label for="dateCreate">Fecha:</label><br>
                        <input type="date" id="dateCreate" name="dateCreate" required><br><br>
                        
                        <label for="headquarters">Sede:</label><br>
                        <input type="text" id="headquarters" name="headquarters" required><br><br>

                        <label for="office">Piso/Oficina:</label><br>
                        <input type="text" id="office" name="office" required><br><br>

                        <label for="phone">Teléfono:</label><br>
                        <input type="number" id="phone" name="phone" required><br><br>

                        <label for="ext">Extensión:</label><br>
                        <input type="number" id="ext" name="ext" required><br><br>

                        <label for="headquarters">Tipo:</label><br>
                        <input type="text" id="headquarters" name="headquarters" required><br><br>

                        <label for="office">Modelo:</label><br>
                        <input type="text" id="office" name="office" required><br><br>

                        <label for="imv">Número Invima:</label><br>
                        <input type="number" id="imv" name="imv" required><br><br>
                    </div>
                </div>

                <label for="problem">Problema Reportado:</label><br>
                <textarea id="problem" name="problem" class="full_width" required></textarea><br><br>

                <div class="form_row_Crear">
                    <div class="form_column_Crear">
                        <label for="dateDiagnostic">Fecha Diagnostico:</label><br>
                        <input type="date" id="dateDiagnostic" name="dateDiagnostic" required><br><br>

                        <label for="StartTime">Hora Inicio:</label><br>
                        <input type="time" id="StartTime" name="StartTime" required><br><br>
                    </div>

                    <div class="form_column_Crear">
                        <label for="technician">Técnico:</label><br>
                        <input type="text" id="technician" name="technician" required><br><br>
                        
                        <label for="endTime">Hora Fin:</label><br>
                        <input type="time" id="endTime" name="endTime" required><br><br>
                    </div>
                </div>

                <label for="diagnonstic">Diagnostico:</label><br>
                <textarea id="diagnonstic" name="diagnonstic" class="full_width" required></textarea><br><br>

                <div class="form_row_Crear">
                    <div class="form_column_Crear">
                        <label for="ClearName">Nombre Claro Diagnostico:</label><br>
                        <input type="text" id="ClearName" name="ClearName" required><br><br>
                    </div>

                    <div class="form_column_Crear">
                        <label for="cc">CC:</label><br>
                        <input type="number" id="cc" name="cc" required><br><br>
                    </div>
                </div>

                <div class="form_full_width">
                    <table class="tabla_Planillas_Crear" id="dynamicTable">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Descripción de Labor Efectuado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="date" name="date[]" class="table-input-date" required></td>
                                <td><textarea name="description[]" class="table-input-description" required></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="date" name="date[]" class="table-input-date" required></td>
                                <td><textarea name="description[]" class="table-input-description" required></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="date" name="date[]" class="table-input-date" required></td>
                                <td><textarea name="description[]" class="table-input-description" required></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="date" name="date[]" class="table-input-date" required></td>
                                <td><textarea name="description[]" class="table-input-description" required></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form_full_width">
                    <label for="Repuestos">Repuestos Instalados:</label>
                    <table class="tabla_Planillas_Crear" id="dynamicTable2">
                        <thead>
                            <tr>
                                <th>N/P</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="text[]" class="table-input-text" required></td>
                                <td><textarea name="description[]" class="table-input-description" required></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="text[]" class="table-input-text" required></td>
                                <td><textarea name="description[]" class="table-input-description" required></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="text[]" class="table-input-text" required></td>
                                <td><textarea name="description[]" class="table-input-description" required></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="text[]" class="table-input-text" required></td>
                                <td><textarea name="description[]" class="table-input-description" required></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <label for="comments">Observaciones:</label><br>
                <textarea id="comments" name="comments" class="full_width" required></textarea><br><br>

                <div class="form_row_Crear">
                    <div class="form_column_Crear">
                        <label for="endDate">Fecha Solución:</label><br>
                        <input type="date" id="endDate" name="endDate" required><br><br>
                    </div>

                    <div class="form_column_Crear">
                        <label for="option">Equipo Queda Funcionando:</label><br>
                        <select id="option" name="option" required>
                            <option value="yes">Si</option>
                            <option value="no">No</option>
                        </select><br><br>
                    </div>
                </div>

                <div class="form_actions_Crear">
                    <input type="submit" value="Registrar">
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> AA Mantenimiento a Computadores S.A.S</p>
    </footer>

    <script src="./Js/Menu.js"></script>
</body>
</html>