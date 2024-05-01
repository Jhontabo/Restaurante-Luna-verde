<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrar Pedido</title>
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
<link rel="stylesheet" href="Registrar pedido.css">
</head>
<body>
  <div class="registro-container">
    <h2>Registrar Pedido</h2>
    <form>
      <input type="text" placeholder="Nombre" required>
      <input type="text" placeholder="Número de documento" required>
      <input type="text" placeholder="Dirección" required>
      <input type="tel" placeholder="Teléfono" required>
      <input type="number" placeholder="Cantidad" required>
      <select name="forma-pago">
        <option value="visa">Tiquetera</option>
        <option value="mastercard">Efectivo</option>
        <option value="mastercard">Nequi</option>
      </select>
      <div class="btn-group">
        <button type="submit" class="btn-registrar">Registrar</button>
        <button type="button" class="btn-salir">Salir</button>
      </div>
    </form>
  </div>
</body>
</html>
