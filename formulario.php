<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<form action="nota.php" method="post">
    <h2>Ingrese Datos de Compra</h2>

    <label for="modo_pago">Modo de Pago:</label>
    <input type="text" id="modo_pago" name="modo_pago" required>

    <label for="direccion_envio">Dirección de Envío:</label>
    <input type="text" id="direccion_envio" name="direccion_envio" required>

    <label for="cantidad_productos">Cantidad de Productos:</label>
    <input type="number" id="cantidad_productos" name="cantidad_productos" min="1" required>

    <h3>Detalles de los Productos</h3>

    <div id="productos_container">
        <!-- Aquí se agregarán dinámicamente los campos para los productos -->
    </div>

    <button type="button" onclick="agregarProducto()">Agregar Producto</button>
    <button type="submit">Generar Nota</button>
</form>

<script>
    function agregarProducto() {
        const container = document.getElementById('productos_container');
        const cantidadProductos = document.getElementById('cantidad_productos').value;

        // Limpiar contenido anterior
        container.innerHTML = '';

        for (let i = 1; i <= cantidadProductos; i++) {
            const productoDiv = document.createElement('div');

            const label = document.createElement('label');
            label.innerText = `Producto ${i}:`;

            const nombreInput = document.createElement('input');
            nombreInput.type = 'text';
            nombreInput.name = `productos[${i - 1}][nombre]`;
            nombreInput.required = true;

            const precioLabel = document.createElement('label');
            precioLabel.innerText = 'Precio:';
            const precioInput = document.createElement('input');
            precioInput.type = 'number';
            precioInput.name = `productos[${i - 1}][precio]`;
            precioInput.min = '0';
            precioInput.required = true;

            productoDiv.appendChild(label);
            productoDiv.appendChild(nombreInput);
            productoDiv.appendChild(precioLabel);
            productoDiv.appendChild(precioInput);

            container.appendChild(productoDiv);
        }
    }
</script>

</body>
</html>
