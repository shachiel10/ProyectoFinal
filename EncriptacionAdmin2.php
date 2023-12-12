<?php
$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'loginAdmin';
$conexion = new mysqli($servidor, $cuenta, $password, $bd);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
function hashPassword($password, $salt) {
    return hash("sha256", $password . $salt);
}
function generateSalt() {
    return bin2hex(random_bytes(16)); // Genera una cadena 
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST["pregunta_seguridad"])) {
    $usuario = $_POST["usuario"];
    $respuesta_seguridad = $_POST["respuesta_seguridad"];
    // Evita inyección SQL
    $query = "SELECT palabra_seguridad FROM usuarios WHERE usuario=?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($respuesta_guardada);
        $stmt->fetch();
        // Verificar la respuesta
        if ($respuesta_seguridad == $respuesta_guardada) {
            // Acceso concedido
            session_start();
            $_SESSION["nombre_usuario"] = $usuario;
            // Verifica
            if (isset($_POST["nueva_contrasena"]) && isset($_POST["confirmar_contrasena"])) {
                $nueva_contrasena = $_POST["nueva_contrasena"];
                $confirmar_contrasena = $_POST["confirmar_contrasena"];
                if ($nueva_contrasena == $confirmar_contrasena) {
                    $salt = generateSalt();
                    $hash_contrasena = hashPassword($nueva_contrasena, $salt);
                    // Actualiza la contraseña 
                    $update_query = "UPDATE usuarios SET contrasena=?, salt=? WHERE usuario=?";
                    $update_stmt = $conexion->prepare($update_query);
                    $update_stmt->bind_param("sss", $hash_contrasena, $salt, $usuario);
                    $update_stmt->execute();
                    $update_stmt->close();
                    $_SESSION["nueva_contrasena"] = $nueva_contrasena;
                    echo "Contraseña actualizada con éxito. Bienvenido, $usuario.";
                } else {
                    echo "Las contraseñas no coinciden.";
                }
            } else {
                echo "Acceso concedido. Bienvenido, $usuario.";
            }
            echo "<br><br>";

            //El href del menu del admin
            echo '<a href="<!--Pagina del admin-->" class="back-button">Regresar</a>';

            
        } else {
            echo "Acceso denegado. Respuesta de seguridad incorrecta.";
            echo "<br><br>";
            echo '<a href="index.html" class="back-button">Regresar</a>';
        }
    } else {
        echo "Error al obtener la respuesta de seguridad: " . $stmt->error;
    }
    $stmt->close();
}
}
?>