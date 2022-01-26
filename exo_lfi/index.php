<?php include '../menu.html' ?>


<h1 class="lfi-color">Exercice n°1 LFI</h1>
<a href="?file=normal.html">Refresh</a>
<br/>
<br/>

<?php 

$input = $_GET['file']??'normal.html';

if (!isset($input) || !file_exists($input)) {
    echo "Erreur<br/>";
    echo "Le Fichier <i>".$input."<i/> n'existe pas";
    return;
}

include $input; 

?>


