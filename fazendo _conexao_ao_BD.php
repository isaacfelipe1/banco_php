<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectando ao banco de Dados</title>
</head>
<body>
    <h1>Conexão ao Banco de Dados e Criando Tabelas</h1>
    <?php 
        //Abrir uma conexão
        //Função : mysqli_connect(host,login,senha,nome do banco de dados)
        $con=mysqli_connect("localhost","root","","uea_bd");
        //checar se a conexão foi estabelecida
        if ($con->connect_errno) {
            echo "Erro na conexão";
            mysqli_connect_error();
        }else{
            $query="CREATE TABLE alunos(id int, nome char(40),email char(40), senha char(15))";
            if(mysqli_query($con,$query)){
                echo"Tabela criado com sucesso";
            }else{
                echo "Erro na criação da Tabela";
            }
            mysqli_close($con);
        }
    ?>
   

</body>
</html>