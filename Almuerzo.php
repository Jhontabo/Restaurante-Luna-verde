<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desayunos</title>
  <link href="https://fonts.googleapis.com/css?family=Rancho&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/Desayuno.css">


</head>

<?php

$Hola = "Hola";

?>

<body>

    <header class="cabecera">
      <h1 class="titulo"><span class="verde">Desa</span><span class="naranja">yunos</span></h1>
      <img src="./img/logoLunaVerde.png" alt="Logo" class="logo">
    </header>

    <div class="contenido">
      <div class="seccion-principal">
        <img src="./img/almuerzo1.jpeg" alt="Desayuno principal" class="circulo-central">
      </div>

      <div class="opciones-desayuno">
        <div class="desayuno">
          <img src="./img/almuerzo1.jpeg" alt="Desayuno completo" onclick="cambiarImagen('./img/almuerzo1.jpeg')">
          <p class="calorias">850 calorias</p>
          <button onclick="redirigirAPedir()" class="precio">$4.400</button>
        </div>

        <div class="desayuno">
          <img src="./img/almuerzo2.jpeg" alt="Desayuno intermedio" onclick="cambiarImagen('./img/almuerzo2.jpeg')">
          <p class="calorias">550 calorias</p>
          <button onclick="redirigirAPedir()" class="precio">$8.500</button>
        </div>

        <div class="desayuno">
          <img src="./img/almuerzo3.jpeg" alt="Desayuno basico" onclick="cambiarImagen('./img/almuerzo3.jpeg')">
          <p class="calorias">181 calorias</p>
          <button onclick="redirigirAPedir()" class="precio">$10.000</button>
        </div>
      </div>
    </div>

    <footer class="pie-pagina">
      <button class="boton-salir" onclick="redirigirInicio()">Regresar</button>
    </footer>

</body>

<script src="./js/script.js"></script>
<script src="./js/redireciones.js"></script>
<script src="./js/pedido.js"></script>

</html>