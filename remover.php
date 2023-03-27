<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualizar Cadastro</title>
</head>
<body>
    <h1>Atualização de Cadastro</h1>
    <?php 
    $id=$_POST['id'];
        //Abrir uma conexão
        //Função : mysqli_connect(host,login,senha,nome do banco de dados)
        $con=mysqli_connect("localhost","root","","uea_bd");
        //checar se a conexão foi estabelecida
        if ($con->connect_errno) {
            echo "Erro na conexão";
            mysqli_connect_error();
        }else{
            $query="DELETE FROM alunos WHERE id='$id'";
            if(mysqli_query($con,$query)){
                echo "Removido com sucesso";
                header("location:Remover.html");
            }else{
                echo " Erro ao Remover";
                mysqli_close($con);
            }
        }
        
        
    ?>


</body>

</html>