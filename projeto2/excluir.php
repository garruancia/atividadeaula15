<?
$id = $_GET["id"];
include_once './conexao.php';

$sql = 'delete from infor where idinfor ='.$id;

if(mysqli_query($con,$sql)){
    $msg = "excluido com sucesso";
}else{
    $msg = "erro ao excluir";
}

mysqli_close($con);
echo "<script>
        alert('".$msg."');
        location.href = consultar.php';
      </script>";
?>