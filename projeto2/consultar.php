<?php 
include_once './cabecalho.php'
?>
<script>
    function excluir(id){
        if (confirm('deseja realmente excluir este cliente?')){
            location.href = "excluir.php?id =" + id;
        }
    }
    </script>
    <h1>consulta de cliente</h1>
    <?php 
    include_once "./conexao";
    $sql = "select * from infor";
    $result = mysqli_query($con,$sql);
    $totalregistro = mysqli_num_rows($result);
    echo "total de registros no banco :", $totalregistro;
    
        if ($totalregistro > 0){
    ?>
    <table class = "table table-striped">
    <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>telefone</td>
                <td>Data de Cadastro</td>

    <?php
    
    while ($row = mysqli_fetch_array($result)){
        ?>
            <tr>
                <td><?php echo $row["nome"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["telefone"]; ?></td>
                <td><?php echo $row["dtcadastro"]; ?></td>
                <td><a><button class = "bnt bnt-primary" >Excluir</button></a></td>
                <td>Editar</td>
            </tr>
            <?
        }
    }else{
        echo "Nenhum Registro Cadastrado";
    }
    echo "Total de Registro no banco :".$totalregistro;
    ?>
<?php 
include_once './rodape.php'
?>