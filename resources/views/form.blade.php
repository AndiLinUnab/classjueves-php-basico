<?php
$email = "";
$mensaje = "";
$enviado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);
    $enviado = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contáctanos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background-color: #f4f6f9;
        }

        .contact-section {
            width: 100%;
            padding: 60px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-card {
            background: white;
            width: 100%;
            max-width: 500px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .contact-card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .contact-card p {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 14px;
            transition: 0.3s;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: #4e73df;
            outline: none;
        }

        .btn-enviar {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-enviar:hover {
            opacity: 0.9;
        }

        .success-message {
            margin-top: 20px;
            padding: 15px;
            background-color: #e6fffa;
            border-left: 5px solid #1cc88a;
            border-radius: 10px;
            color: #155724;
        }

        @media (max-width: 500px) {
            .contact-card {
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<section class="contact-section">
    <div class="contact-card">
        <h2>Contáctanos</h2>
        <p>Envíanos un mensaje y te responderemos lo antes posible.</p>

        <form method="POST">
            <div class="input-group">
                <input type="email" name="email" placeholder="Tu correo electrónico" required>
            </div>

            <div class="input-group">
                <textarea name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <button type="submit" class="btn-enviar">Enviar mensaje</button>
        </form>

        <?php if ($enviado): ?>
            <div class="success-message">
                ✅ Mensaje enviado correctamente.<br>
                <strong>Email:</strong> <?php echo $email; ?><br>
                <strong>Mensaje:</strong> <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

</body>
</html>

