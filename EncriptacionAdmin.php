<?php
session_start();

$servidor = 'localhost';
$cuenta = 'root';
$password = '';
$bd = 'loginAdmin';

$conexion = new mysqli($servidor, $cuenta, $password, $bd);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
function hashPassword($password, $salt) {
    return password_hash($salt . $password, PASSWORD_BCRYPT);
}
function verificarCredenciales($conexion, $usuario, $contrasena) {
    $query = "SELECT * FROM usuarios WHERE usuario=?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return password_verify($row['salt'] . $contrasena, $row['contrasena']);
    }
    return false;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Registro de usuario
    if (isset($_POST["registrar"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $confirmar_contrasena = $_POST["confirmar_contrasena"];
        $correo = $_POST["correo"];
        $palabra_seguridad = $_POST["palabra_seguridad"];
        // Verificar si las contraseñas coinciden
        if ($contrasena != $confirmar_contrasena) {
            echo "Las contraseñas no coinciden.";
            echo '<a href="loginAdmin.html" class="back-button">Regresar</a>';
        }
        // Verificar si el usuario ya existe
        $check_query = "SELECT usuario FROM usuarios WHERE usuario = ?";
        $check_stmt = $conexion->prepare($check_query);
        $check_stmt->bind_param("s", $usuario);
        $check_stmt->execute();
        $check_stmt->store_result();
        if ($check_stmt->num_rows > 0) {
            echo "El Usuario de ese Admin ya no esta disponible. Por favor, elige otro.";
            echo '<a href="loginAdmin.html" class="back-button">Regresar</a>';
        }
        $sal = generateSalt();
        $contrasena_con_sal = hashPassword($contrasena, $sal);
        // Inserta el nuevo usuario
        $insert_query = "INSERT INTO usuarios (usuario, contrasena, salt, correo, palabra_seguridad) VALUES (?, ?, ?, ?, ?)";
        $insert_stmt = $conexion->prepare($insert_query);
        $insert_stmt->bind_param("sssss", $usuario, $contrasena_con_sal, $sal, $correo, $palabra_seguridad);
        if ($insert_stmt->execute()) {
            echo "Registro exitoso.";
            echo "<br><br>";
            echo '<a href="loginAdmin.html" class="back-button">Regresar</a>';
        } else {
            echo "Error al registrar: " . $conexion->error;
            echo "<br><br>";
            echo '<a href="loginAdmin.html" class="back-button">Regresar</a>';
        }
    // Inicio de sesión
    if (isset($_POST["iniciar_sesion"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        // Obtener información del usuario
        $query = "SELECT * FROM usuarios WHERE usuario=?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verificar el estado de la cuenta
            if (isset($row['bloqueado']) && $row['bloqueado'] == 1) {
                echo "La cuenta está bloqueada. Contacta con un supervisor.";
                echo '<a href="loginAdmin2.html" class="back-button">Regresar</a>';
            }
            if (verificarCredenciales($conexion, $usuario, $contrasena)) {
                $_SESSION["nombre_usuario"] = $usuario;
                $_SESSION['intentos'] = 0;
                echo "Acceso Autorizado. Bienvenido, $usuario.";

                //Aqui abajo poner el href del menu del admin
                echo '<a href="<!--Menu del admin-->" class="back-button">Regresar al inicio</a>';


            } else {
                $_SESSION['intentos']++;
                if ($_SESSION['intentos'] >= 3) {
                    // Bloquea la cuenta
                    $bloquear_query = "UPDATE usuarios SET bloqueado=1 WHERE usuario=?";
                    $bloquear_stmt = $conexion->prepare($bloquear_query);
                    $bloquear_stmt->bind_param("s", $usuario);
                    $bloquear_stmt->execute();
                    $bloquear_stmt->close();
                    echo "Acceso Negado.El Usuario o La contraseña es incorrecta. La cuenta ha sido bloqueada.";
                    $_SESSION['intentos'] = 0;
                    echo '<a href="loginAdmin2.html" class="back-button">Regresar</a>';
                } else {
                    echo "Acceso Negado.El Usuario o La contraseña es incorrecta.";
                    echo '<a href="loginAdmin.html" class="back-button">Regresar</a>';
                }
            }
        } else {
            echo "Usuario no encontrado.";
            echo '<a href="loginAdmin.html" class="back-button">Regresar</a>';
        }
        $stmt->close();
    }
    // Cambio de contra
    if (isset($_POST["pregunta_seguridad"])) {
        $usuario = $_POST["usuario"];
        $respuesta_seguridad = $_POST["respuesta_seguridad"];
        // Evita inyección SQL
        $query = "SELECT palabra_seguridad, bloqueado FROM usuarios WHERE usuario=?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($respuesta_guardada, $bloqueado);
            $stmt->fetch();
            // Verificar la respuesta 
            if ($respuesta_seguridad == $respuesta_guardada) {
                // Acceso concedido y almacenaje
                $_SESSION["nombre_usuario"] = $usuario;
                // Desbloqueo 1
                $desbloquear_query = "UPDATE usuarios SET bloqueado=0 WHERE usuario=?";
                $desbloquear_stmt = $conexion->prepare($desbloquear_query);
                $desbloquear_stmt->bind_param("s", $usuario);
                $desbloquear_stmt->execute();
                $desbloquear_stmt->close();
                // Verificacion
                if (isset($_POST["nueva_contrasena"]) && isset($_POST["confirmar_contrasena"])) {
                    $nueva_contrasena = $_POST["nueva_contrasena"];
                    $confirmar_contrasena = $_POST["confirmar_contrasena"];
                    if ($nueva_contrasena == $confirmar_contrasena) {
                        $salt = generateSalt();
                        $hash_contrasena = hashPassword($nueva_contrasena, $salt);
                        $update_query = "UPDATE usuarios SET contrasena=?, salt=? WHERE usuario=?";
                        $update_stmt = $conexion->prepare($update_query);
                        $update_stmt->bind_param("sss", $hash_contrasena, $salt, $usuario);
                        $update_stmt->execute();
                        $update_stmt->close();
                        // Desbloqueo 2
                        $desbloquear_query = "UPDATE usuarios SET bloqueado=0 WHERE usuario=?";
                        $desbloquear_stmt = $conexion->prepare($desbloquear_query);
                        $desbloquear_stmt->bind_param("s", $usuario);
                        $desbloquear_stmt->execute();
                        $desbloquear_stmt->close();
                        $_SESSION["nueva_contrasena"] = $nueva_contrasena;
                        echo "Contraseña actualizada con éxito. Bienvenido, $usuario.";
                    } else {
                        echo "Las contraseñas no coinciden.";
                    }
                } else {
                    echo "Bienvenido, $usuario.";
                }
                echo "<br><br>";

                //Poner el href del menu del admin
                echo '<a href="<!--La pagina de admin -->" class="back-button">Regresar al inicio</a>';


            } else {
                echo "Acceso Negado. Respuesta de seguridad incorrecta.";
                echo "<br><br>";
                echo '<a href="loginAdmin.html" class="back-button">Regresar</a>';
            }
        } else {
            echo "Error al obtener la respuesta de seguridad: " . $stmt->error;
            echo '<a href="loginAdmin2.html" class="back-button">Regresar</a>';
        }
        $stmt->close();
    }
}
function generateSalt() {
    return bin2hex(random_bytes(16));
}
$conexion->close();
?>
