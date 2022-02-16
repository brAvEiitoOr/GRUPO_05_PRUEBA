<?php
    include_once("class/figuras.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="content p-4">
        <?php
            switch(intval($_POST['tipo'])){
                case 1:
                    echo "<h3>Detalles del trapecio</h3><br>";
                    $figura = new Trapecio($_POST["lado1"],$_POST["lado2"],$_POST["lado3"],$_POST["lado4"]);
                    break;
                case 2:
                    echo "<h3>Detalles del rombo</h3><br>";
                    $figura = new Rombo($_POST["lado"],$_POST["d1"],$_POST["d2"]);
                    break;
                case 3:
                    echo "<h3>Detalles del romboide</h3><br>";
                    $figura = new Romboide($_POST["lado1"],$_POST["lado2"],$_POST["altura"]);
                    break;
            }
            echo "<b>Lados: </b>";
            foreach ($figura->getLados() as $lado){
                echo "$lado ";
            }
            echo "<br>";
            echo "<b>Perimetro: </b>".$figura->calcularPer()."<br>";
            echo "<b>Area: </b>".$figura->calcularArea()."<br>";
            echo '<a href="." class="btn btn-danger">Regresar</a>';
        ?>
    </div>
</body>
</html>