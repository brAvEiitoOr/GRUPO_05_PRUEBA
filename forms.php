<?php
    include_once("class/figuras.php");
    switch(intval($_GET["q"])){
        case 1:
            $figura = new Trapecio(0,0,0,0);
            echo $figura->get_form();
            break;
        case 2:
            $figura = new Rombo(0,0,0);
            echo $figura->get_form();
            break;
        case 3:
            $figura = new Romboide(0,0,0,0);
            echo $figura->get_form();
            break;
        default:
            echo "";
    }
?>