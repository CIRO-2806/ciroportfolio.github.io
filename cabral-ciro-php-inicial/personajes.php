<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="header">
        <h1>Personajes</h1>
        <div class="options">
            <a href="index.php"><p>Volver</p></a>
        </div>
    </div>
    <div class="mainPj">
        <ul>
            <li><a href="personajes.php?nombre=hp">Harry Potter </li>
            <li><a href="personajes.php?nombre=hg">Hermione Granger </li>
            <li><a href="personajes.php?nombre=rw">Ron Weasley </li>
        </ul>
    <?php 
    echo "<br>";
    
    $img = " ";
    if(isset($_GET['nombre'])){
        $personaje = $_GET['nombre'];
        switch($personaje){
            case "hp":
                $nombre = "Harry Potter";
                $descripcion = "El protagonista de la serie.";
                echo "Hola, Soy ", $nombre, ", y soy ", $descripcion, "<br>";
                $img = "./images/hp.jpg";
                break;
            case "hg":
                $nombre = "Hermione Granger";
                $descripcion = "la amiga cercana de Harry y Ron";
                echo "Hola, soy ", $nombre, ", y soy ", $descripcion, "<br>" ;
                $img = "./images/hg.jpg";
                break;
            case "rw":
                $nombre = "Ron Weasley";
                $descripcion = "el amigo cercano de Harry y Hermione";
                echo "Hola, soy ", $nombre, ", y soy ", $descripcion, "<br>";
                $img = "./images/rw.jpg";
                break;
            default:
                echo "No se seleccionó ningún personaje.";
        }
    }
    ?>
    <div class="images_container">
        <div class="image">
            <img src=<?php echo $img ?>>
        </div>
    </div>
    </div>
</body>
</html>

