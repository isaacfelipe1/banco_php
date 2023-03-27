<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>
    <h1>Consultar a Tabela</h1>
    <?php 
        //Abrir uma conexão
        //Função : mysqli_connect(host,login,senha,nome do banco de dados)
        $con=mysqli_connect("localhost","root","","uea_bd");
        //checar se a conexão foi estabelecida
        if ($con->connect_errno) {
            echo "Erro na conexão";
            mysqli_connect_error();
        }else{
            $query="SELECT nome,email FROM alunos";
            $resultado=mysqli_query($con,$query);
            if ($resultado){
                echo "Lista de alunos";
             while ($aluno=mysqli_fetch_array($resultado)) {
            echo "<p> Nome: ".$aluno['nome']."<br>Email: ".$aluno['email']."</p>";
            echo "<hr>";
             }
            }else{
                echo " Erro na consulta";
            }
            mysqli_close($con);
        }
    ?>
   

</body>
</html>