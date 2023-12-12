<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    // Supongamos que estás utilizando jQuery para AJAX
    $(document).ready(function() {
        // Agregar un evento de cambio de archivo a tu input de tipo archivo
        $("input[type=file]").change(function() {
            var formData = new FormData();
            formData.append('id', $('#id').val());
            formData.append('nombre', $('#nombre').val());
            formData.append('descripcion', $('#descripcion').val());
            formData.append('precio', $('#precio').val());
            formData.append('cantidad', $('#cantidad').val());
            formData.append('categoria', $('#categoria').val());
            formData.append('descuento', $('#descuento').val());
            formData.append('imagen', $(this)[0].files[0]);

            // AJAX para enviar datos al script PHP
            $.ajax({
                type: "POST",
                url: "avanceCambios/procesar_cambios.php",

                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(data) {
                    console.log("Respuesta del servidor:", data);
                    // Actualizar la imagen en la página
                    document.getElementById('imagenProducto').src = data.imagen;
                    // Otros cambios que puedas necesitar realizar en la interfaz de usuario
                },
                error: function(xhr, status, error) {
                    console.error("Error en la solicitud AJAX:", status, error);
                }
            });
        });
    });

