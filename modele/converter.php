<?php

$smootEnMetres = 1.7;

if(isset($_POST)) {
    $enMetre = $_POST['valeur'];
    $enSmoot = $enMetre * $smootEnMetres;
    echo "</br> $enMetre vaut $enSmoot Smoots.";
}

?>