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

    <div class="title-mision-vision">
        <h2>
            <span class="mision">Misión</span>
            <span class="y">y</span>
            <span class="vision">Visión</span>
        </h2>
    </div>

    <section class="container-mision-vision">
        <div class="descripcion-mision-vision">
            <h3>Misión</h3>
            <p>El restaurante es una empresa familiar colombiana dedicada a la preparación de comida casera, con un
                enfoque centrado en la satisfacción del cliente y el constante mejoramiento de sus procesos.</p>

            <h3 class="vision">Visión</h3>
            <p>Visión del restaurante: Para el año 2025, el restaurante tiene previsto la implementación de nuevas
                tecnologías con el fin de automatizar y simplificar algunas tareas que actualmente demandan mucho tiempo
                a las propietarias de la empresa. Además, se ofrecerá a los clientes la posibilidad de realizar sus
                pedidos de manera sencilla a través de una plataforma digital.</p>
        </div>
        <div class="imagenes-plato vision-mision">
            <img src="https://s3-alpha-sig.figma.com/img/4cc2/7d9d/8079ace02f711626f24fb08c91742200?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=m1Lnq27H4uLNrASvLokmq3HWATyo7ofjldXC9DoBwikn9~ZPOrRjtSrh7PVQ1NLJjm0hIX5eGZhw~IRerxbiCn7WfQKvgWr3lQW0whvGf064YKHWlcb9mSYNeHAdL7zHceN2ix-Omn-7oI67L8ogvqig6oND9MXUCEckja-a0YhezR6nKm7RZHkWONRhBM9A6kMjKtH1mnDJLFTExaPh18BsOGos2Ypv7g0c7gkbEo0jg0lY0VSINlKuyOH52wV2YhxAQADNXlPuaDziN7MpcE2o2YZ~nnkxov9df6B7AQEZCXf~fSLlLW~Fhm6GXXh4E70jKXp~xuUVxTNV2UWM1w__"
                alt="Plato 1">
        </div>
    </section>



    <div class="title-menu">
        <h2>Menu</h2>
    </div>
    <section class="menu">
        <div class="menu-container">
            <div class="menu-column">
                <h3>Desa<span class="desayunos">yunos</span></h3>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/7790/1b3e/51303a79b3c9fafda46ad3a29e59e745?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=EkIrGCIQSSouKfmSLQXjalpxy3xK7OmylUWBxDBbSNoP5xUrEuqVralRGO9rP94DvnJPBTm7kI5XGPD4HuRYTHwPDSXC46F1r0INLEHnPsO-~53wdqnwzpC9Tf2kcgMqxkSxsGGy8Qp4g2yLDqKLCcFjoehOsCE8i3IKQqKj~S8jkeE5A6fG7pFxQRRIfVBOOZiYSAI1Cry4RgR36fOTwn1Xo-SH6hEF1je6sevCN3odlLefffUMyTc5wIBYjS5GclDaSuqQ-NXVSUe4gypGJT3Lw1jHHupdB91TJIuYQK4qHvhHJwuGCwwcBFM20Lioj273vH9MCJFScJN7HvXYow__"
                        alt="Desayuno completo">
                    <div class="item-info">
                        <h4>Desayuno completo</h4>
                        <p>$7.500</p>
                        <p>Incluye huevo,arroz carne,tajas y ensalada, tambien incluye bebida
                            caliente como cafe.</p>
                        <button>Pedir</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/fe22/7f8b/0eb5c105df5540ec0925958e4c552ec0?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=AXDx9X-ux~tnlvEOx3BqUNl-ntL0QAeU8QWdgRJhJRFZWnAupSnF3cszQmdDJHbWIkZzwjdu-kvrllSHuhqeyhqbctZYsHKR2Yl7Cle9Wq0WGUoh6ai~u-4yMxeucv8zbDhnyZGkJOYeyYSL6XMcKdIMd~gxceqVPpPECJO10hp5o6hJ0kMWNSlxRfSxHIqupjAX8ewN6z1gIzNWdH5U4AncLSrEPsV9Ibf1Wk4XlWc6jZiVzm2cpKbb6s~0Go5Tmd0~RQsS6C1KxD6iNmAWZRz8IVnzia8ZCWje2jDcUPONadJ5kyPEfz3kD~EUHtwqCasatDpCMLbvoIXvoqrLfg__"
                        alt="Desayuno intermedio">
                    <div class="item-info">
                        <h4>Desayuno intermedio</h4>
                        <p>$5.000</p>
                        <p>Incluye huevo,arroz y tajas, tambien incluye bebida caliente como cafe.</p>
                        <button>Pedir</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/015a/dc9f/22748aed26a4c461f04668909941b80d?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=gpog~nUlMpxxP0Gbh~RkHT5~yI3d5QsMMRxwnGQceu8Opv0Ce-vdSYIg564SgODwZAT5-VTnj0sXobhlymzuZ6cbsSb5kqJo5brtigD6tw~Hkmax5z5AEOWCxV9FJ4aegGsv-5Rv2QX3tUGH7Sam~-v5Uy3oDJzqcBjv6mCnsvDaYCzzNVATZDjYmH6tzqdmQkAsDSCfKqBmnBdyWGkrzmghhzOXSTK4R6QRvyx01f5qqq1zNaoc5a0Dm~NWW7PeALXtqkUFQeyAJTFwNA8cOXUjv7yR2qj8VUOuuVDoqGEkFvlz~2pXiuHui93HvYwuLo6~0QJ6Ophgp~ctds-51g__"
                        alt="Desayuno básico">
                    <div class="item-info">
                        <h4>Desayuno básico</h4>
                        <p>$4.000</p>
                        <p>Incluye huevo,arroz y tajas</p>
                        <button>Pedir</button>
                    </div>
                </div>
            </div>
            <div class="menu-column">
                <h3><span class="almuerzos">Almu</span>erzos</h3>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/fa2f/8982/5d699a5d1965aa5b16dc720c7fc9bd15?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=DF4xwNJFYqWJitHHbtHVeJ26sF4cyjhV5VcQl1FtK8cjRbfYhmoSAUGH-pzCR-RjkVdVxNJp0~8JaY8hYKp5QaCzYnX3ImPMB3vSkX6RqH~mFUZ-dXu0DcD7UHsup0-B63Or0b~vM40JedHwf6AUqh21gUwSe2qCsVlKShiXxhV3QXIUm~yu0xizdCpPKEVvTImW278s~G1ORAUXZcBkMxr0QRtrWRFDgDqxt2Y6Zu9sMre0U3fm6LrXZVbgrApSo0raojvOvrBRRix8i9aNagRTzQMto-~HTVo2OXIsXOSOyX9Q6Gj0eRG0Knl4-NfvzcvJrQ7DzgIJfGpyL53jLw__"
                        alt="Sopa del día">
                    <div class="item-info">
                        <h4>Sopa del día</h4>
                        <p>$4.000</p>
                        <p>Incluye unicamente sopa del dia.</p>
                        <button>Pedir</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/a48b/1a15/8dc1ad06f9428044dc7ecbbd53fd695d?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=EERJAeuSg6x3jsgi-kR98HmMFmIQHMr66GIDjA5Dq2pnL~Q0g~YC97WJRV4ykiYpPqlm2XyLwhJSw~EN~c1iQBnl6T8JghZXg4vGPox2DSSCYdlb9cTWOODeVxWE6OpB--bkYcWbCuPAfDQGUyoM2h-hhsq8AB7gPHmnZciR-kUclWyrl2fb-lJ2LGs0c~VkW5LQK5l7A2Q8M0bQPa5bzDETkoBrNG~OOtkCit1fwIqqgZt-hbWIEC-0YX5mlYF~LdkJaTHkHQStz8E~b6vJwQeOpYaEw~dnDBWob6kJABUVyw4nEFNMBXMueE7VzHaqpbkUFk4mFhFye9ffKfVOew__"
                        alt="Bandeja">
                    <div class="item-info">
                        <h4>Bandeja</h4>
                        <p>$8.500</p>
                        <p>Incluye arroz,carne, tajas, principio y ensalada, tambien incluye jugo y postre.</p>
                        <button>Pedir</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/a8ba/ab77/8b0c7925e67ae91a311e7d12f27a2cf2?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ST9vl1j2RMP6VspwwQFpcbtNTKsKgaQSV1EWIiNZcAa1EJIphoV1v3AV6o4ZzmoPYG-L7CuzsKc2D6lDQu~TIYfKare9cDx7zOVW9vEejpQnVl-rpn9tAhPeV41RwggHMI49wFk02Psr3d1n7YXUs1RaotfAVo9n9pyAPbKdM8KV6-NNWpTZCTh-5NJK1mNK9B09VaB6esaOh3NKZJU2bE7b2RHJELxQQp2YdYXS8R8qlS2HGl6A~1bmaDGxB-VwchPiD49N1TlSXl3AlQpunsXvvlCDf0PIphd4DzculGq8s24JqbzaEwA3HPhSRgCFvNztGfi1LfXwNsjXJQLLOQ__"
                        alt="Almuerzo completo">
                    <div class="item-info">
                        <h4>Almuerzo completo</h4>
                        <p>$10.00</p>
                        <p>Incluye sopa y bandeja.</p>
                        <button>Pedir</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="title-consumidorFeliz">
        <h2>Eslo<spanc class="feliz" >gan</spanc></h2>
    </div>
    <section class="testimonial-section">
        <div class="testimonial-container">
            <blockquote>
                "Sumérgete en la auténtica tradición culinaria con nuestro delicioso sabor casero, cuidadosamente
                elaborado para brindarte una experiencia gastronómica reconfortante y llena de nostalgia. En cada
                bocado, encontrarás la esencia de los sabores familiares, preparados con pasión y dedicación, como si
                estuvieras disfrutando de una comida en casa."
            </blockquote>
            <div class="testimonial-navigation">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>




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