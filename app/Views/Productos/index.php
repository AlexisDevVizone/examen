<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
</head>
<body>
<h1>Lista de Productos</h1>
<a href="/productos/crear">Crear Nuevo Producto</a>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['id'] ?></td>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['descripcion'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['cantidad'] ?></td>
            <td>
                <a href="/productos/editar/<?= $producto['id'] ?>">Editar</a>
                <a href="/productos/eliminar/<?= $producto['id'] ?>"
                   onclick="return confirm('¿Estás seguro?')">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
