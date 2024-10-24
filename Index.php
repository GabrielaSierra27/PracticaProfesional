<?php

$title = "AMantComputadores";
$title2 = "Bienvenido a AA Mantenimiento a Computadores S.A.S";

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
    <title><?php echo $title; ?></title>
</head>

<body>
    <header>
        <img src="./Img/Logo.png" alt="Logo" class="logo_inicio">
        <nav>
            <ul class="menu_inicio">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#nosotros">Sobre Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contáctanos</a></li>
                <li><button onclick="window.location.href='./Login.php';">Iniciar Sesión</button></li>
            </ul>
        </nav>
    </header>

    <main class="inicio">
        <h1 class="title"><?php echo $title2; ?></h1>

        <section id="inicio" class="section_index">
            <h1 class="section_index_titulo">Inicio</h1>
            <p class="section_index_parrafo">Bienvenidos a AA Mantenimiento A Computadores S.A.S, su aliado confiable en soluciones tecnológicas. Desde 2009, brindamos servicios especializados en mantenimiento preventivo y correctivo para equipos de cómputo, redes y sistemas de comunicación. Nuestra misión es garantizar el óptimo funcionamiento de sus equipos tecnológicos, ofreciendo soporte técnico integral, adaptado a las necesidades de su empresa.<br>
            <br>Explore nuestros servicios y descubra cómo podemos ayudarle a mejorar la eficiencia y el rendimiento de su infraestructura tecnológica.</p>
        </section>

        <section id="nosotros" class="section_index">
            <h1 class="section_index_titulo">Sobre Nosotros</h1>
            <p class="section_index_parrafo">En AA Mantenimiento A Computadores S.A.S, nos dedicamos a ofrecer servicios de mantenimiento, reparación y asesoría técnica para equipos tecnológicos. Con más de una década de experiencia, hemos consolidado nuestra presencia en el sector, destacándonos por la calidad, puntualidad y confiabilidad de nuestros servicios.<br>
            <br>Nuestra especialidad abarca la atención a computadores de escritorio, portátiles, servidores, redes físicas e inalámbricas, y equipos de comunicaciones. Además, diseñamos e instalamos redes y centros de cómputo, proporcionando soluciones completas para su infraestructura tecnológica.</p>
        </section>

        <section id="servicios" class="section_index">
            <h1 class="section_index_titulo">Servicios</h1>
            <p class="section_index_parrafo">En AA Mantenimiento A Computadores S.A.S, ofrecemos una amplia gama de servicios diseñados para mantener sus equipos tecnológicos en las mejores condiciones:<br>
            <ul class="section_index_list">
                <li>Mantenimiento Preventivo</li>
                <li>Mantenimiento Correctivo</li>
                <li>Diseño e Instalación de Redes</li>
                <li>Asesoría Técnica</li>
            </ul>
            Nuestro equipo técnico está listo para brindar soluciones rápidas y efectivas, adaptadas a las necesidades específicas de su empresa..</p>
        </section>

        <section id="contacto" class="section_index">
            <h1 class="section_index_titulo">Contáctanos</h1>
            <p class="section_index_parrafo">¿Necesita asistencia técnica o desea obtener más información sobre nuestros servicios? ¡Estamos aquí para ayudarle!<br>
            <br>Dirección: Bogotá, Colombia
            <br>Teléfono: (+57) [Número de teléfono]
            <br>Correo Electrónico: [correo@empresa.com]
            <br>Horario de atención: Lunes a Viernes - 8:00 AM a 6:00 PM</p>
        </section>
    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> AA Mantenimiento a Computadores S.A.S</p>
    </footer>
</body>
</html>
