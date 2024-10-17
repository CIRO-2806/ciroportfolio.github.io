

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="header">
        <h1>Funciones</h1>
        <div class="options">
            <a href="index.php"><p>Volver</p></a>
        </div>
    </div>

    <div class="main">
        <div class="mainFunctions">
        <?php

function suma_1_a_100(){
    echo "Mostrar números del 1 al 100 <br>";
    $num = 0;
    do{
        $num++;
        echo $num, " ";
    }
    while($num < 100);
}

suma_1_a_100();

echo "<br><br>";

function multiplo_2(){
    echo "Mostrar múltiplos de 2 en un rango de 0 al 40, pero salteando el número 33 <br>";
    for($numero = 0; $numero <= 40; $numero++){
        if($numero % 2 !== 0 && $numero !== 33){
            echo $numero, " ";
        }
    }
}

multiplo_2();
?></php>
        </div>
        
</div>





</body>
</html>