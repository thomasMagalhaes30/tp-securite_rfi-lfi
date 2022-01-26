<?php include '../menu.html' ?>



<h1 class="rfi-color">Exercice n°1 RFI</h1>
<a href="?file=normal.html">Refresh</a>
<br/>
<br/>

<?php 


$input = $_GET['file']??'normal.html';
include  ($input);











?>

