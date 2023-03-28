<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
  // obtém as informações do formulário
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];

  $con=mysqli_connect("localhost","root","","");
        //checar se a conexão foi estabelecida
        if ($con->connect_errno) {
            echo "Erro na conexão";
            mysqli_connect_error();
        }else{
            // verifica se o nome de usuário e a senha são válidos
            if ($nome == 'nome' && $senha == 'senha') {
              // login válido, redireciona para a página principal
              header('Location: pagina_principal.php');
              exit;
            } else {
              // login inválido, exibe uma mensagem de erro
              echo "Nome de usuário ou senha inválidos.";
            
            mysqli_close($con);
            }
            }

?>
</body>
</html>


