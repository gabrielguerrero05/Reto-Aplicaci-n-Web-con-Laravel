<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            text-align: center;
        }
        p {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<h1>Detalle de Venta</h1>
<p><strong>ID:</strong> {{ $venta->id }}</p>
<p><strong>Cliente:</strong> {{ $venta->cliente }}</p>
<p><strong>Producto:</strong> {{ $venta->producto }}</p>
<p><strong>Descripción:</strong> {{ $venta->descripcion }}</p>
<a href="/registro/ventas">Volver al Listado</a>
</body>
</html>
