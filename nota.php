<?php
require 'fpdf/fpdf.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PDF extends FPDF
{
    // Función para encabezado
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Nota de Compra', 0, 1, 'C');
        $this->Ln(10);
    }

    // Función para pie de página
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si las claves existen en $_POST
    if (isset($_POST['modo_pago']) && isset($_POST['direccion_envio']) && isset($_POST['productos'])) {
        $modoPago = htmlspecialchars($_POST['modo_pago']);
        $direccionEnvio = htmlspecialchars($_POST['direccion_envio']);
        $productos = $_POST['productos'];

        // Calcular subtotal
        $subtotal = 0;
        foreach ($productos as $producto) {
            $subtotal += $producto['precio'];
        }

        // Calcular impuesto
        $impuestoPorcentaje = 8;
        $impuesto = ($subtotal * $impuestoPorcentaje) / 100;

        // Calcular total
        $total = $subtotal + $impuesto;

        // Agregar cargo por envío si es aplicable
        $cobroEnvio = true; // Puedes ajustar esto según tu lógica
        if ($cobroEnvio) {
            $total += 10.00; // Supongamos un cargo fijo por envío
        }

        // Crear PDF
        $pdf = new PDF();
        $pdf->AddPage();

        // Contenido
        $pdf->SetFont('Arial', '', 12);

        $pdf->Cell(0, 10, 'Detalles de la Compra', 0, 1);
        $pdf->Ln(5);

        foreach ($productos as $producto) {
            $pdf->Cell(80, 10, $producto['nombre'], 1);
            $pdf->Cell(40, 10, '$' . number_format($producto['precio'], 2), 1);
            $pdf->Ln();
        }

        $pdf->Cell(80, 10, 'Subtotal', 1);
        $pdf->Cell(40, 10, '$' . number_format($subtotal, 2), 1);
        $pdf->Ln();

        $pdf->Cell(80, 10, 'Impuesto (' . $impuestoPorcentaje . '%)', 1);
        $pdf->Cell(40, 10, '$' . number_format($impuesto, 2), 1);
        $pdf->Ln();

        if ($cobroEnvio) {
            $pdf->Cell(80, 10, 'Cargo por Envio', 1);
            $pdf->Cell(40, 10, '$10.00', 1);
            $pdf->Ln();
        }

        $pdf->Cell(80, 10, 'Total', 1);
        $pdf->Cell(40, 10, '$' . number_format($total, 2), 1);
        $pdf->Ln(10);

        $pdf->Cell(0, 10, 'Modo de Pago: ' . $modoPago, 0, 1);
        $pdf->Cell(0, 10, 'Direccion de Envio: ' . $direccionEnvio, 0, 1);

        // Mostrar el PDF en el navegador
        $pdf->Output('Nota_de_Compra.pdf', 'I');

        // Guardar el PDF en una variable
        $pdfContent = $pdf->Output('', 'S');

        // Configurar PHPMailer
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Cambiar con tu servidor SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'omartop21p@gmail.com'; // Cambiar con tu correo electrónico
            $mail->Password = 'tbzxgimhegzhshgw'; // Cambiar con tu contraseña
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('omartop21p@gmail.com', 'Jose');
            $mail->addAddress('daniel_omar_flores_ibarra@hotmail.com', 'Daniel');

            // Adjuntar el PDF
            $mail->addStringAttachment($pdfContent, 'Nota_de_Compra.pdf');

            $mail->isHTML(true);
            $mail->Subject = 'Nota de Compra';
            $mail->Body = 'Adjunto encontrarás la nota de compra en formato PDF.';

            $mail->send();
            echo 'Correo enviado correctamente.';
        } catch (Exception $e) {
            echo 'Error al enviar el correo: ', $mail->ErrorInfo;
        }
    } else {
        echo 'Error: Datos incompletos del formulario.';
    }
} else {
    echo 'Error: No se han recibido datos del formulario.';
}
?>
