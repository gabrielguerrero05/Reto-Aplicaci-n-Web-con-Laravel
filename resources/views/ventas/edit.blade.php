<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venta</title>
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
        form {
            width: 60%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>Editar Venta</h1>
<form method="POST" action="/registro/ventas/{{ $venta->id }}">
    @csrf
    @method('PUT')
    <label for="cliente">Cliente:</label><br>
    <input type="text" id="cliente" name="cliente" value="{{ $venta->cliente }}"><br>
    <label for="producto">Producto:</label><br>
    <input type="text" id="producto" name="producto" value="{{ $venta->producto }}"><br>
    <label for="descripcion">Descripción:</label><br>
    <textarea id="descripcion" name="descripcion">{{ $venta->descripcion }}</textarea><br>
    <button type="submit">Actualizar Venta</button>
</form>
</body>
</html>
