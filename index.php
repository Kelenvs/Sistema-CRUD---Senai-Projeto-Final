<?php

 include ('conectar.php');

 if(isset($_POST['emailuser']) || isset($_POST['senhauser'])) {

    if(strlen( $_POST['emailuser'] == 0)){ // Validação de nome
        echo " Preencha seus nome";
    }

    else if(strlen( $_POST['senhauser'] == 0)){ //Validação de senha
        echo "Preencha sua senha";
    }
    else{
        $email = $chave-> real_escape_string($_POST['emailuser']);
        $senha = $chave-> real_escape_string($_POST['senhauser']);

        $comando = " SELECT * FROM  loginuser WHERE emailuser = '$email' AND senhauser = '$senha'";

        $caixa = mysqli_query($chave, $comando) or die("Falha na Execução!!" . $chave->error); // teste de error

        $quantidade = $caixa->num_rows;
    
        if($quantidade == 1){

            $usuario = $caixa->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
             $_SESSION['id'] = $usuario['id'];
             header("Location: seu_painel.php");

        }else{
            echo "Falha ao logar Email e senha incorretos!! Erro.";
        }
    }
 } 

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Meus Contatos TECH</title>
</head>


<body>
    <main>
        <h1>My Tech Network</h1>

        <form action="" method="post">
            <p>
                <label for=""></label>
                <input type="text" name="emailuser" placeholder="Digite seu e-mail" autocomplete="off">
                <div class="bar"></div>
            </p>
            <p>
                <label for=""></label>
                <input type="password" name="senhauser" placeholder ="Digite sua senha">
                <div class="bar"></div>
            </p>

            <button type="submit">Entrar</button>
            <br><br><br>
        </form>
                <a href="inseriruser.php">cadastre-se aqui.</a>
    </main>
</body>
</html> 


        


        
      