<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de pedidos para el restaurante luna verde">
    <meta name="author" content="Jhontabo">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Restaurante Luna verde</title>

    <?php
    $Username = null;
    if (!empty($_SESSION["Username"])) {
        $Username = $_SESSION["Username"];
    }
    ?>
</head>

<body>

    <header>
        <nav class="navbar">
            <a href="#inicio">Inicio</a>
            <a href="#nosotros">Nosotros</a>
            <span class="luna-verde">Luna <span>Verde</span></span>
            <a href="#menu">Menú</a>
            <a href="./administrador.php">Administrador</a>
            <div class="logo"><img src="./img/logoLunaVerde.png" alt="Logo" class="logo"></div>
        </nav>
    </header>

    <section class="sobre-restaurante">
        <div class="descripcion-restaurante">
            <p>El restaurante "Luna Verde" es un restaurante familiar donde se sirve comida casera dentro de un
                establecimiento y también hace entregas a domicilio. El restaurante se encuentra ubicado en el barrio
                San Ignacio en la ciudad de Pasto. Hace parte del sector privado colombiano y funciona hace más de 18
                años.</p>
            <button class="ver-menu">Ver Menú</button>
        </div>
        <div class="imagenes-platos">
            <!-- Añade aquí tus imágenes de los platos -->
            <img src="./img/platoSectionSobre.jpg" alt="Plato 1">
            <img src="./img/caldoDeCostilla.jpg" alt="Plato 2">
        </div>
    </section>


    </div>
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="luna-verde">
                    <h2>Luna <span class="verde">verde</span></h2>
                    <p>
                        Sumérgete en la auténtica tradición culinaria con nuestro delicioso
                        sabor casero, cuidadosamente elaborado para brindarte una experiencia
                        gastronómica reconfortante y llena de nostalgia. En cada bocado, encontrarás la esencia
                        de los sabores familiares, preparados con pasión y dedicación, como si estuvieras
                        disfrutando de una comida en casa.</p>
                    <p class="copyright">2009 - 2024</p>
                    <div class="redes-sociales">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="horarios">
                    <h4>Horarios</h4>
                    <ul>
                        <ul>
                            <li>Lunes</li>
                            <li>7:00 AM - 6:00 PM</li>
                            <li>Martes</li>
                            <li>7:00 AM - 6:00 PM</li>
                            <li>Miércoles</li>
                            <li>7:00 AM - 6:00 PM</li>
                            <li>Jueves</li>
                            <li>7:00 AM - 6:00 PM</li>
                            <li>Viernes</li>
                            <li>7:00 AM - 6:00 PM</li>
                            <li>Sábado</li>
                            <li>7:00 AM - 3:00 PM</li>
                            <li>Domingo</li>
                            <li>CERRADO</li>
                        </ul>
                    </ul>
                </div>
                <div class="direccion-telefono">
                    <div class="direccion">
                        <h4>Direccion</h4>
                        <p>Dirección: Cra 34 #14-12, Pasto, Nariño</p>
                        <div class="mapa">
                            <!-- Aquí iría el código para insertar el mapa -->
                        </div>
                    </div>
                    <div class="telefono">
                        <h4><i class="fas fa-phone"></i>Telefono</h4>
                        <p>+57 300 208 1134</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="creditos">
            <p>2022 - Diseñado por Juan Jose Pachajoa - Daniel Luna - Sara Valentina Macuace - Jhon Tajumbina - Cristian
                Ortega</p>
        </div>
    </footer>
</body>

</html>