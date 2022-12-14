<?
$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];

include_once'./conexao.php';

$sql = "update cliente set nome ='".$nome."',
        email = '".$email."',
        telefone = '".$telefone."' where id cliente =" .$id;

    
if(mysql_query($con,$sql)){
    $msg = "Gravado com sucesso";
    }else{
        $msg = "erro ao gravar";
        }

mysqli_close($con);
echo "<script>
        alert('".$msg."');
        location.href = consultar.php';
      </script>";
?>