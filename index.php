<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de pedidos para el restaurante luna verde">
    <meta name="author" content="Jhontabo">
    <link rel="icon" type="image/x-icon" href="img/Logo.ico" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Restaurante Luna verde</title>

    <?php
        //conexion con la base de datos y servidor 
        $mysqli = new mysqli("localhost","root","", "restaurante-lunaverde");

        if ($mysqli->connect_errno)
        {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            exit();
        }

        $consulta= "SELECT * FROM informacion";
        $resultado= array();
        $resultado= $mysqli->query($consulta);

        /* recorrer los resultados  */
        while ( $fila = $resultado->fetch_assoc() ) 
        {
            $descripcion[]= $fila["descripcion"];
            $nombre[]= $fila["nombre"];
        }

        $consulta= "SELECT * FROM menu";
        $resultado= array();
        $resultado= $mysqli->query($consulta);

        /* recorrer los resultados  */
        while ( $fila = $resultado->fetch_assoc() ) 
        {
            $descripcion[]= $fila["descripcion"];
            $precio[]= $fila["precio"];
        }

        $consulta= "SELECT * FROM equipo";
        $resultado= array();
        $resultado= $mysqli->query($consulta);

        /* recorrer los resultados  */
        while ( $fila = $resultado->fetch_assoc() ) 
        {
            $nombre[]= $fila["nombre"];
            $cargo[]= $fila["cargo"];
        }

        $consulta= "SELECT * FROM horario";
        $resultado= array();
        $resultado= $mysqli->query($consulta);

        /* recorrer los resultados  */
        while ( $fila = $resultado->fetch_assoc() ) 
        {
            $dia[]= $fila["dia"];
            $hora[]= $fila["hora"];
        }
    ?>
</head>

<body>

    <header>
        <nav class="navbar">
            <a href="#inicio">Inicio</a>
            <a href="#container-mision-vision">Nosotros </a>
            <span class="luna-verde">Luna <span>Verde</span></span>
            <a href="#menu">Menú</a>
            <a href="./admin.php">Administrador</a>
            <div class="logo"><img src="./img/logoLunaVerde.png" alt="Logo" class="logo"></div>
        </nav>
    </header>

    <section class="sobre-restaurante">
        <div class="descripcion-restaurante">
            <p><?php echo $descripcion[0];?></p>
            <button class="ver-menu" onclick="desplazarseAMenu()">Ver Menú</button>
        </div>
        <div class="imagenes-platos">
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

    <section id="container-mision-vision">
        <div class="descripcion-mision-vision">
            <h3><?php echo $nombre[2];?></h3>
            <p><?php echo $descripcion[2];?></p>

            <h3 class="vision"><?php echo $nombre[3];?></h3>
            <p><?php echo $descripcion[3];?></p>
        </div>
        <div class="imagenes-plato vision-mision">
            <img src="https://s3-alpha-sig.figma.com/img/4cc2/7d9d/8079ace02f711626f24fb08c91742200?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=m1Lnq27H4uLNrASvLokmq3HWATyo7ofjldXC9DoBwikn9~ZPOrRjtSrh7PVQ1NLJjm0hIX5eGZhw~IRerxbiCn7WfQKvgWr3lQW0whvGf064YKHWlcb9mSYNeHAdL7zHceN2ix-Omn-7oI67L8ogvqig6oND9MXUCEckja-a0YhezR6nKm7RZHkWONRhBM9A6kMjKtH1mnDJLFTExaPh18BsOGos2Ypv7g0c7gkbEo0jg0lY0VSINlKuyOH52wV2YhxAQADNXlPuaDziN7MpcE2o2YZ~nnkxov9df6B7AQEZCXf~fSLlLW~Fhm6GXXh4E70jKXp~xuUVxTNV2UWM1w__"
                alt="Plato 1">
        </div>
    </section>



    <div class="title-menu">
        <h2>Menu</h2>
    </div>
    <section id="menu">
        <div class="menu-container">
            <div class="menu-column">
                <button class="boton-desayunos" onclick="redirigirADesayunos()">
                    <span>Desa</span><span class="boton-desayunos-span">yunos</span>
                </button>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/7790/1b3e/51303a79b3c9fafda46ad3a29e59e745?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=EkIrGCIQSSouKfmSLQXjalpxy3xK7OmylUWBxDBbSNoP5xUrEuqVralRGO9rP94DvnJPBTm7kI5XGPD4HuRYTHwPDSXC46F1r0INLEHnPsO-~53wdqnwzpC9Tf2kcgMqxkSxsGGy8Qp4g2yLDqKLCcFjoehOsCE8i3IKQqKj~S8jkeE5A6fG7pFxQRRIfVBOOZiYSAI1Cry4RgR36fOTwn1Xo-SH6hEF1je6sevCN3odlLefffUMyTc5wIBYjS5GclDaSuqQ-NXVSUe4gypGJT3Lw1jHHupdB91TJIuYQK4qHvhHJwuGCwwcBFM20Lioj273vH9MCJFScJN7HvXYow__"
                        alt="Desayuno completo">
                    <div class="item-info">
                        <p><?php echo $descripcion[4];?></p>
                        <p>$<?php echo $precio[0];?></p>
                        <button onclick="redirigirAPedir()">Pedir</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/fe22/7f8b/0eb5c105df5540ec0925958e4c552ec0?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=AXDx9X-ux~tnlvEOx3BqUNl-ntL0QAeU8QWdgRJhJRFZWnAupSnF3cszQmdDJHbWIkZzwjdu-kvrllSHuhqeyhqbctZYsHKR2Yl7Cle9Wq0WGUoh6ai~u-4yMxeucv8zbDhnyZGkJOYeyYSL6XMcKdIMd~gxceqVPpPECJO10hp5o6hJ0kMWNSlxRfSxHIqupjAX8ewN6z1gIzNWdH5U4AncLSrEPsV9Ibf1Wk4XlWc6jZiVzm2cpKbb6s~0Go5Tmd0~RQsS6C1KxD6iNmAWZRz8IVnzia8ZCWje2jDcUPONadJ5kyPEfz3kD~EUHtwqCasatDpCMLbvoIXvoqrLfg__"
                        alt="Desayuno intermedio">
                    <div class="item-info">
                        <p><?php echo $descripcion[5];?></p>
                        <p>$<?php echo $precio[1];?></p>
                        <button onclick="redirigirAPedir()">Pedir</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/015a/dc9f/22748aed26a4c461f04668909941b80d?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=gpog~nUlMpxxP0Gbh~RkHT5~yI3d5QsMMRxwnGQceu8Opv0Ce-vdSYIg564SgODwZAT5-VTnj0sXobhlymzuZ6cbsSb5kqJo5brtigD6tw~Hkmax5z5AEOWCxV9FJ4aegGsv-5Rv2QX3tUGH7Sam~-v5Uy3oDJzqcBjv6mCnsvDaYCzzNVATZDjYmH6tzqdmQkAsDSCfKqBmnBdyWGkrzmghhzOXSTK4R6QRvyx01f5qqq1zNaoc5a0Dm~NWW7PeALXtqkUFQeyAJTFwNA8cOXUjv7yR2qj8VUOuuVDoqGEkFvlz~2pXiuHui93HvYwuLo6~0QJ6Ophgp~ctds-51g__"
                        alt="Desayuno básico">
                    <div class="item-info">
                        <p><?php echo $descripcion[6];?></p>
                        <p>$<?php echo $precio[2];?></p>
                        <button onclick="redirigirAPedir()">Pedir</button>
                    </div>
                </div>
            </div>
            <div class="menu-column">
                <button class="boton-almuerzos" onclick="redirigirAAlmuerzos()">
                    <span class="boton-almuerzos-span">Almu</span>erzos
                </button>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/fa2f/8982/5d699a5d1965aa5b16dc720c7fc9bd15?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=DF4xwNJFYqWJitHHbtHVeJ26sF4cyjhV5VcQl1FtK8cjRbfYhmoSAUGH-pzCR-RjkVdVxNJp0~8JaY8hYKp5QaCzYnX3ImPMB3vSkX6RqH~mFUZ-dXu0DcD7UHsup0-B63Or0b~vM40JedHwf6AUqh21gUwSe2qCsVlKShiXxhV3QXIUm~yu0xizdCpPKEVvTImW278s~G1ORAUXZcBkMxr0QRtrWRFDgDqxt2Y6Zu9sMre0U3fm6LrXZVbgrApSo0raojvOvrBRRix8i9aNagRTzQMto-~HTVo2OXIsXOSOyX9Q6Gj0eRG0Knl4-NfvzcvJrQ7DzgIJfGpyL53jLw__"
                        alt="Sopa del día">
                    <div class="item-info">
                        <p><?php echo $descripcion[7];?></p>
                        <p>$<?php echo $precio[3];?></p>
                        <button onclick="redirigirAPedir()">Pedir</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/a48b/1a15/8dc1ad06f9428044dc7ecbbd53fd695d?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=EERJAeuSg6x3jsgi-kR98HmMFmIQHMr66GIDjA5Dq2pnL~Q0g~YC97WJRV4ykiYpPqlm2XyLwhJSw~EN~c1iQBnl6T8JghZXg4vGPox2DSSCYdlb9cTWOODeVxWE6OpB--bkYcWbCuPAfDQGUyoM2h-hhsq8AB7gPHmnZciR-kUclWyrl2fb-lJ2LGs0c~VkW5LQK5l7A2Q8M0bQPa5bzDETkoBrNG~OOtkCit1fwIqqgZt-hbWIEC-0YX5mlYF~LdkJaTHkHQStz8E~b6vJwQeOpYaEw~dnDBWob6kJABUVyw4nEFNMBXMueE7VzHaqpbkUFk4mFhFye9ffKfVOew__"
                        alt="Bandeja">
                    <div class="item-info">
                        <p><?php echo $descripcion[8];?></p>
                        <p>$<?php echo $precio[4];?></p>
                        <button onclick="redirigirAPedir()">Pedir</button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="https://s3-alpha-sig.figma.com/img/a8ba/ab77/8b0c7925e67ae91a311e7d12f27a2cf2?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ST9vl1j2RMP6VspwwQFpcbtNTKsKgaQSV1EWIiNZcAa1EJIphoV1v3AV6o4ZzmoPYG-L7CuzsKc2D6lDQu~TIYfKare9cDx7zOVW9vEejpQnVl-rpn9tAhPeV41RwggHMI49wFk02Psr3d1n7YXUs1RaotfAVo9n9pyAPbKdM8KV6-NNWpTZCTh-5NJK1mNK9B09VaB6esaOh3NKZJU2bE7b2RHJELxQQp2YdYXS8R8qlS2HGl6A~1bmaDGxB-VwchPiD49N1TlSXl3AlQpunsXvvlCDf0PIphd4DzculGq8s24JqbzaEwA3HPhSRgCFvNztGfi1LfXwNsjXJQLLOQ__"
                        alt="Almuerzo completo">
                    <div class="item-info">
                        <p><?php echo $descripcion[9];?></p>
                        <p>$<?php echo $precio[5];?></p>
                        <button onclick="redirigirAPedir()">Pedir</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="title-consumidorFeliz">
        <h2>Eslo<spanc class="feliz">gan</spanc>
        </h2>
    </div>
    <section class="testimonial-section">
        <div class="testimonial-container">
            <blockquote>
                <?php echo $descripcion[1];?>
            </blockquote>
            <div class="testimonial-navigation">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>

    <div class="title-equipoCocina">
        <h2>Equipo d<span class="equipo-cocina">e Trabajo</span> </h2>
    </div>
    <section class="equipo-de-trabajo">
        <div class="expertos">
            <div class="miembro">
                <img src="https://cdn.pixabay.com/photo/2018/10/04/11/37/woman-3723444_960_720.jpg"
                    alt="Rodrigo Russo, Chef">
                <h3><?php echo $nombre[4];?></h3>
                <p><?php echo $cargo[0];?></p>
            </div>

            <div class="miembro">
                <img src="https://cdn.pixabay.com/photo/2019/02/04/22/05/chef-3975835_1280.jpg"
                    alt="Rodrigo Russo, Chef">
                <h3><?php echo $nombre[5];?></h3>
                <p><?php echo $cargo[1];?></p>
            </div>

            <div class="miembro">
                <img src="https://s3-alpha-sig.figma.com/img/71fe/6e1b/454ab8ba1e7a4738533829b547c347b1?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Z2bBfP5SC1G4xWOOHdUcBEQk40cUEX48o5FgI7fIuVDpl28VoAQO6Bk1Jw9SZDKmfj1F0IKFSaxhsK8m3EYw~H12FOaoXtK7HdcbtRc8fCAH2Nl1s-qpqsFY0s-90t77jXT64MFqlan2PhLzY55ve5CTeJhMCoBSt6Z~7aPFPuL9KU4WC53jd9XShBcQYVo7bfsivpwkAQUoW0nb5tSLzoudhrJguhHK100ytKAfVKexYbSCgj8xFAi8naUnNcuEbXgHzAqG7W-WtyFfwqHq3iIEYIyH9VpwFuX43tQVgvM7vYhtM6l409NtlE~plMzFxCug0pCfa7ukmLif0UEcdQ__"
                    alt="Rodrigo Russo, Chef">
                <h3><?php echo $nombre[6];?></h3>
                <p><?php echo $cargo[2];?></p>
            </div>

            <div class="miembro">
                <img src="https://cdn.pixabay.com/photo/2020/02/12/03/40/barista-4841593_960_720.jpg"
                    alt="Rodrigo Russo, Chef">
                <h3><?php echo $nombre[7];?></h3>
                <p><?php echo $cargo[3];?></p>
            </div>

            <div class="miembro">
                <img src="https://cdn.pixabay.com/photo/2022/06/01/19/49/attorney-7236482_1280.jpg"
                    alt="Rodrigo Russo, Chef">
                <h3><?php echo $nombre[8];?></h3>
                <p><?php echo $cargo[4];?></p>
            </div>

            <div class="miembro">
                <img src="https://s3-alpha-sig.figma.com/img/0d26/dac7/c64dd07376f160154b72d0eee439e65f?Expires=1715558400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=bOssJCQfyU58HQUxKKX1M3t4VFp8RvkogWPaqFlebfrDJD3Y5O8HkRzctU2aWZkAOSBwEpSiU8v8ayiVejUDNhiY-wsdzDF-2KrSHILZ2YM3EA2rq9o-GGDQRXIS8oAYZNn3WmPUHDDAOJmq1qi8FnItWQGYYWrWimp27d3OeKGm3PqNUhoGfWPvgRl2TKgbB5BKdk3rg~ITG6oHiYS1fW~mbO2GWPuBgdJcdhN0YDETBXseBG6hRXbbAQu9ohBsVPxlADWhF8JRknvs-No0~Hg0RoaQfQHP~TY7Gpfs6sUTaIcO9ezhlDDJu0idMmF3XvrcZERMn1YRRT~yuImygQ__"
                    alt="Rodrigo Russo, Chef">
                <h3><?php echo $nombre[9];?></h3>
                <p><?php echo $cargo[5];?></p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="luna-verde">
                    <h2>Luna <span class="verde">verde</span></h2>
                    <p>
                        <?php echo $descripcion[1];?>
                    <p class="copyright">2006 - 2024</p>

                    <div class="redes-sociales">
                        <a href="https://api.whatsapp.com/send?phone=573164292376&text=Si%20tienes%20una%20duda%20puedes%20mandarnos%20un%20mensaje" target="_blank" target="_blank"class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://web.facebook.com/people/Luna-verde/61558107166473/?_rdc=1&_rdr"><i class="fab fa-facebook-f" target="_blank"></i></a>
                        <a href="https://github.com/Jhontabo/Restaurante-Luna-verde" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="horarios">
                    <h4>Horarios</h4>
                    <ul>
                        <ul>
                            <li><?php echo $dia[0];?></li>
                            <li><?php echo $hora[0];?></li>
                            <li><?php echo $dia[1];?></li>
                            <li><?php echo $hora[1];?></li>
                            <li><?php echo $dia[2];?></li>
                            <li><?php echo $hora[2];?></li>
                            <li><?php echo $dia[3];?></li>
                            <li><?php echo $hora[3];?></li>
                            <li><?php echo $dia[4];?></li>
                            <li><?php echo $hora[4];?></li>
                            <li><?php echo $dia[5];?></li>
                            <li><?php echo $hora[5];?></li>
                            <li><?php echo $dia[6];?></li>
                            <li><?php echo $hora[6];?></li>
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
            <p>2022 - Diseñado por Juan Jose Pachajoa - Daniel Luna - Sara Valentina Macuase - Jhon Tajumbina - Cristian
                Ortega</p>
        </div>
    </footer>
</body>

<script src="./js/script.js"></script>
<script src="./js/Menu.js"></script>
<script src="./js/pedido.js"></script>

</html>