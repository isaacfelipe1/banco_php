<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inserindo Dados</title>
</head>
<body>
    <h1>Inserindo Dados na Tabela</h1>
    <?php 
     $nome=$_POST['nome'];
     $email=$_POST['email'];
     $senha=$_POST['senha'];
        //Abrir uma conexão
        //Função : mysqli_connect(host,login,senha,nome do banco de dados)
        $con=mysqli_connect("localhost","root","","uea_bd");
        //checar se a conexão foi estabelecida
        if ($con->connect_errno) {
            echo "Erro na conexão";
            mysqli_connect_error();
        }else{
            $query="INSERT INTO alunos(nome,email,senha)value('$nome','$email',$senha)";
            if (mysqli_query($con,$query)){
             echo "Inserido com sucesso";
             header("Location:cadastro.html");
            }else{
                echo " Erro ao inserir na Tabela";
            }
            mysqli_close($con);
        }
    ?>
   

</body>
</html>