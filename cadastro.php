<?php 

    include("conexao.php");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql="INSERT INTO cadastro(nome,sobrenome,email,senha) 
            VALUES ('$nome','$sobrenome','$email','$senha')";

   if(mysqli_query($conexao,$sql)){
        echo 'Usuário foi cadastrado com sucesso';
   }
   else{
        echo "Ops! Ocorreu um erro: " . mysqli_connect_error();
   }
   mysqli_close($conexao);

   


?>