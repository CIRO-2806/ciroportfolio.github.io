<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP inicial</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
    <div class="header">
        <div class="headerContainer">
            <h1>Bienvenidos a Nuestro Sitio Web</h1>
            <div class="options">
                <a href="index.php"><p>Home</p></a>
                <a href="#contacto"><p>Contacto</p></a>
                <a href="estructuras_de_control.php"><p>Funciones
                </p></a>
                <a href="personajes.php"><p>Personajes</p></a>
            </div>
        </div>
    </div>
    <div class="main">
        <form class="form" action="enviar_consulta.php" method="POST" id="contacto">
            <div class="formContainer">
                <div class="formInput">
                    <label for="name">Nombre: </label>
                    <input type="text" name="name" placeholder="Nombre" required>
                </div>
                <div class="formInput">
                    <label for="name">Email: </label>
                    <input type="text" name="email" placeholder="Correo Electrónico" required>
                </div>
                <div class="formInput">
                    <label for="name">Teléfono: </label>
                    <input type="text" name="phone" placeholder="Número de Teléfono">
                </div>
                <div class="formInput">
                    <label for="name">Mensaje: </label>
                    <textarea type="text" name="msg" placeholder="Su mensaje" required maxlength="500"></textarea>
                </div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

</body>
</html>