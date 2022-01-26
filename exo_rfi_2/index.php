<?php include '../menu.html' ?>


<h1 class="rfi-color">Exercice n°2 RFI</h1>
<a href="?file=normal">Refresh</a>
<br/>
<br/>

<?php 

$input = $_GET['file']??'normal';

/*if (!isset($input) || !file_exists($input)) {
    echo "Erreur<br/>";
    echo "Le Fichier <i>".$input."<i/> n'existe pas";
    return;
}*/

include $input.'.html'; 

?>

