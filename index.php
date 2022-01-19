<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Definicion de arrays en PHP</h3>
    <?php
    //Array indexado
    $amigos=array("Anton","Rosalia","Xoan");
    echo "O terceiro amigo é: " .$amigos[2]."<br/>";
    //Array asociativo
    $dnisAmigos=array("Anton"=>"12345678x","Rosalia"=>"1111112222222X","Xoan"=>"999999777777X");
    echo "O DNI de Rosalía é: " .$dnisAmigos['Rosalia']."<br/>";
    //Array de duas dimensions:
    $cochesAmigos = array
    (
        "Anton"=>array
    (
    "Fiat 500",
    "Audi A3",
    "Peugeot 208"
    ),
    "Rosalia"=>array
    (
        "Audi TT"
    ),
    "Xoan"=>array
    (
        "jaguar XF",
        "BMW 520d",
        "Seat Ibiza"
    )
    );
    echo "O segundo coche de Xoan é " . $cochesAmigos['Xoan'][1] . "<br/>";
    ?>
    
</body>
</html>