<?php
    include_once("class/figuras.php");
    switch(intval($_GET["q"])){
        case 1:
            $figura = new Trapecio(0,0,0,0);
            break;
        case 2:
            $figura = new Rombo(0,0,0);
            break;
        case 3:
            $figura = new Romboide(0,0,0,0);
            break;
        default:
            $figura = "";
    }
    echo $figura->get_form();
?>