<?php include '../menu.html' ?>

<h1 class="lfi-color">Exercice n°2 LFI</h1>
<a href="?file=normal">Refresh</a>
<br/>
<br/>

<?php 

$input = $_GET['file']??'normal';

$real_input = "";
foreach (str_split($input) as $char) {
    if (ord($char)==0 ){
        include $real_input;
        return;
    }

    $real_input.=$char;
    //echo $char."<br/>";
}

if (file_exists($input.'.html')){
    include $input.'.html'; 
}else{
    echo 'Le fichier n\'existe pas';
} 


?>

