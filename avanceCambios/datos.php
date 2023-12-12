<?php
include 'configuracion.php';

$query = "SELECT * FROM productos";
$result = $conn->query($query);

$labels = [];
$data = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['nombre'];
    $data[] = $row['cantidad'];
}

$dataObject = [
    'labels' => $labels,
    'datasets' => [
        [
            'label' => 'Datos',
            'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
            'borderColor' => 'rgba(75, 192, 192, 1)',
            'borderWidth' => 1,
            'data' => $data,
        ],
    ],
];

echo 'var data = ' . json_encode($dataObject) . ';';
echo 'var tipoGrafico = "bar";'; // Por defecto, puedes establecer el tipo de gráfico como barras

$conn->close();
?>
