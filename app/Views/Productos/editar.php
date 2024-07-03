<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>
<h1>Editar Producto</h1>
<form action="/productos/actualizar/<?= $producto['id'] ?>" method="post">
    <input type="hidden" name="_method" value="PUT">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?= $producto['nombre'] ?>" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"><?= $producto['descripcion'] ?></textarea>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" value="<?= $producto['precio'] ?>" required>
    <br>
    <label for="cantidad">Cantidad:</label>
    <input type="text" name="cantidad" id="cantidad" value="<?= $producto['cantidad'] ?>">
    <br>
    <button type="submit">Actualizar</button>
</form>
</body>
</html>
