<?php

date_default_timezone_set("America/Sao_Paulo");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$dtcadastro = date("y-m-d");

include_once'./conexao.php';

$sql = "insert into informacoes 
(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')";

if(mysql_query($con,$sql)){
    $msg = "Gravado com sucesso";
}else{
    $msg = "erro ao gravar";
}

mysql_close($con);
echo"<script>
    alert('"$msg."');
    location.href = 'index.php';
    </script>";
    
    ?>

