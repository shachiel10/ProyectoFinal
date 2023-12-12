<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
    <title>Gráfico de Datos</title>
    <style>
        /* Ajusta el tamaño del canvas mediante CSS */
        #miGrafico {
            width: 400px;
            height: 200px;
        }

        
      


    </style>
</head>
<body>
    <div class="container">
    <canvas id="miGrafico" ></canvas>
        <div>
            <button onclick="cambiarTipo('bar')">Gráfico de Barras</button>
            <button onclick="cambiarTipo('line')">Gráfico de Líneas</button>
        </div>
    </div>

    <script src="Chart.min.js"></script>
    <script src="datos.php"></script>
    <script>
        // Configuración inicial del gráfico
        var ctx = document.getElementById('miGrafico').getContext('2d');
        var myChart;

        // Función para cambiar el tipo de gráfico
        function cambiarTipo(tipo) {
            tipoGrafico = tipo;
            actualizarGrafico();
        }
       
        // Función para actualizar el gráfico con el nuevo tipo
        function actualizarGrafico() {
            if (myChart) {
                myChart.destroy();
            }
            // Configuración del nuevo gráfico
            try {
                myChart = new Chart(ctx, {
                type: tipoGrafico,
                data: data,
                options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
    });
} catch (error) {
    console.error('Error:', error);
}
        }
    </script>
</body>
</html>
