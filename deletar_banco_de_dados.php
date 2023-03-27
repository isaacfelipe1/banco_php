<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removendo o Banco de Dados</title>
</head>
<body>
    <?php 
        //Abrir uma conexão
        //Função : mysqli_connect(host,login,senha,nome do banco de dados)
        $con=mysqli_connect("localhost","root","","");
        //checar se a conexão foi estabelecida
        if ($con->connect_errno) {
            echo "Erro na conexão";
            mysqli_connect_error();
        }else{
            $query="DROP DATABASE uea_bd";
            if (mysqli_query($con,$query)) {
                echo "O banco de Dados foi Removido";
            }else{
                echo "Erro ao remover do banco de dados";
            }
            //Podemos realizar consultas
            //mysqli_query($con, $query)
            mysqli_close($con);
        }
    ?>
   

</body>
</html>