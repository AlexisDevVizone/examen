<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>
<h1>Crear Producto</h1>
<form action="/productos/guardar" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" required>
    <br>
    <label for="cantidad">Cantidad:</label>
    <input type="text" name="cantidad" id="cantidad">
    <br>
    <button type="submit">Guardar</button>
</form>
</body>
</html>
