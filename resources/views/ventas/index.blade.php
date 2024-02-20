<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
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
            margin-top: 20px;
        }
        a {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .actions {
            text-align: center;
        }
        .actions a {
            margin-right: 5px;
            color: #007bff;
        }
        .actions form {
            display: inline;
        }
        .actions button {
            background-color: transparent;
            border: none;
            color: #007bff;
            cursor: pointer;
        }
        .actions button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<h1>Listado de Ventas</h1>
<a href="/registro/ventas/registrar">Registrar Nueva Venta</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($ventas as $venta)
        <tr>
            <td>{{ $venta->id }}</td>
            <td>{{ $venta->cliente }}</td>
            <td>{{ $venta->producto }}</td>
            <td>{{ $venta->descripcion }}</td>
            <td class="actions">
                <a href="/registro/ventas/{{ $venta->id }}">Ver</a> |
                <a href="/registro/ventas/{{ $venta->id }}/editar">Editar</a> |
                <form method="POST" action="/registro/ventas/{{ $venta->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
