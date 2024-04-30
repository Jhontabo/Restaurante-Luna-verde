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
        <h2>Luna verde</h2>
    </header>

    <nav class="navbar">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Nosotros</a></li>
                <li><a href="#" onclick="ManagementOnclick();">Administrador</a>
            </ul>
        </div>
        </div>
        </div>
    </nav>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "smss_db");
    $sql = "SELECT * FROM `tbl_products` Limit 50";
    $Resulta = mysqli_query($conn, $sql);
    ?>


    <?php while ($Rows = mysqli_fetch_array($Resulta)) {
        echo '	
		<div class="col-sm-4 col-lg-4 col-md-4">
             <div class="thumbnail">
				<h4 style="text-align: center;">' . $Rows[2] . '</h4>
                <img style="border: 2px solid gray; border-radius: 10px; height: 229px; width: 298px;" src="data:image;base64,' . $Rows[8] . '" alt="">
                <div class="caption">
					<p><strong>Nombre del Producto:</strong> ' . $Rows[1] . '</p>
					<p><strong>Dimensiones:</strong> ' . $Rows[3] . '</p>
					<p><strong>Colores Disponibles:</strong> ' . $Rows[4] . '</p>
					<p><strong>$ ' . $Rows[5] . '.00</strong></p>
                </div>
				<center><a onclick="addToCartOnclick(' . $Rows[0] . ');" href="#"  style="margin-bottom: 5px;" class="btn btn-primary">Agregar al Carrito</a></center>
            </div>
        </div>
		';
    } ?>

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
                        <h4>Telefono</h4>
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