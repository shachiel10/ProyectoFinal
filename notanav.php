<?php
// Detalles de la compra
$productos = [
    ['nombre' => 'Producto 1', 'precio' => 20.00],
    ['nombre' => 'Producto 2', 'precio' => 30.00],
    ['nombre' => 'Producto 3', 'precio' => 15.00]
];

$cobroEnvio = true;
$impuestoPorcentaje = 8;
$modoPago = 'Tarjeta de Crédito';
$direccionEnvio = '123 Calle Principal, Ciudad';

// Calcular subtotal
$subtotal = 0;
foreach ($productos as $producto) {
    $subtotal += $producto['precio'];
}

// Calcular impuesto
$impuesto = ($subtotal * $impuestoPorcentaje) / 100;

// Calcular total
$total = $subtotal + $impuesto;

// Agregar cargo por envío si es aplicable
if ($cobroEnvio) {
    $total += 10.00; // Supongamos un cargo fijo por envío
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>

<h2>Nota de Compra</h2>

<table>
    <tr>
        <th>Producto</th>
        <th>Precio</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?php echo $producto['nombre']; ?></td>
            <td><?php echo '$' . number_format($producto['precio'], 2); ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td><strong>Subtotal</strong></td>
        <td><?php echo '$' . number_format($subtotal, 2); ?></td>
    </tr>
    <tr>
        <td><strong>Impuesto (<?php echo $impuestoPorcentaje; ?>%)</strong></td>
        <td><?php echo '$' . number_format($impuesto, 2); ?></td>
    </tr>
    <?php if ($cobroEnvio): ?>
        <tr>
            <td><strong>Cargo por Envío</strong></td>
            <td>$10.00</td>
        </tr>
    <?php endif; ?>
    <tr>
        <td><strong>Total</strong></td>
        <td><?php echo '$' . number_format($total, 2); ?></td>
    </tr>
</table>
<p><strong>Modo de Pago:</strong> <?php echo $modoPago; ?></p>
<p><strong>Dirección de Envío:</strong> <?php echo $direccionEnvio; ?></p>
<div class="button-container">
    <form action="nota.php" method="post">
        <button type="submit">Enviar e imprimir nota</button>
    </form>
</div>

</body>
</html>
