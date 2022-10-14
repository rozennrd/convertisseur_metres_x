<?php
$smootEnMetres = 1.7;

$mesures = array(
    "Smoot" => 1.7,
    "Attoparsec" => 0.003086,
    "Sheppey" => 1.4, // The closest distance at which a sheep remains picturesque (Douglas Adams and John Lloyd, the meaning of liff)
);

$resultat = "";
if(isset($_POST['valeur'])) {
    $enMetre = $_POST['valeur'];
    $enSmoot = $enMetre / $smootEnMetres ;
    $resultat = "</br> $enMetre mètres= $enSmoot Smoots.";
}

include_once "../vue/vueConverter.php";

?>