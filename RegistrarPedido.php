<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Pedido</title>
  <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
  <link rel="stylesheet" href="./css/RegistrarPedido.css">
</head>
<body>
  <div class="registro-container">
    <h2>Registrar Pedido</h2>
    <form>
      <input type="text" placeholder="Nombre" required>
      <input type="text" placeholder="Número de documento" required>
      <input type="text" placeholder="Dirección" required>
      <input type="tel"  placeholder="Teléfono" required>
      <input type="number" placeholder="Cantidad" required>

      <h2>Forma de pago</h2>
      <div class="container-forma-pago">
        <select name="forma-pago">
          <option value="tiquetera">Tiquetera</option>
          <option value="efectivo">Efectivo</option>
          <option value="nequi">Nequi</option>
        </select>
      </div>
      <div class="btn-group">
        <button type="submit" class="btn-registrar" >Registrar</button>
        <button class="btn-salir" onclick="redirigirInicio()">Salir</button>
      </div>
    </form>
  </div>
</body>
<script src="./js/redireciones.js"></script>
</html>