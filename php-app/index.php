<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Básico</title>
    <script>
        function showAlert() {
            alert("Formulario enviado correctamente");
        }
    </script>
</head>
<body>
    <h1>Formulario de Ejemplo</h1>
    <form action="index.php" method="POST" onsubmit="showAlert();">
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Aquí puedes manejar el envío del formulario
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        echo "<h2>Datos recibidos:</h2>";
        echo "Nombre: " . $name . "<br>";
        echo "Correo Electrónico: " . $email . "<br>";
    }
    ?>
</body>
</html>
