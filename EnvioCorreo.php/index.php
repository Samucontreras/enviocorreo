<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario de Contacto</title>
</head>

<body>
    <form action="correo.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" placeholder="Nombre" name="name" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" placeholder="Correo Electrónico" name="email" required><br>

        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" placeholder="Asunto" name="asunto" required><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" placeholder="Mensaje" name="mensaje" required></textarea><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html> 
