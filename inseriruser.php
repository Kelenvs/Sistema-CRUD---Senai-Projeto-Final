<?php

include ('conectar.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nomeuser'];
    $email = $_POST['emailuser'];
    $senha = $_POST['senhauser'];
    
    $caixa = "INSERT INTO loginuser (nomeuser, emailuser, senhauser) VALUES ( '$nome', '$email', '$senha')";
    
    $inserir = mysqli_query($chave, $caixa);


    if($inserir){
        header("Location: index.php");
        exit;

    }else{
        echo " Erro ao cadastra " . mysqli_error($chave);
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.usuario.style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Página de Cadastro</title>
</head>


<body>
    <main>
        <h1>Cadastro de Usuário</h1>

        <form action="" method="POST">

            <div>
                <label for="email"></label>
                <input type="text" name="nomeuser" id="nomeuser" placeholder="Digite seu nome">
            </div>

            <div>
                <label for="nome"></label>
                <input type="text" name="emailuser" id="emailuser" placeholder="Digite seu email">
            </div>
            
            <div>
                <label for="senha"></label>
                <input type="password" name="senhauser" id="senhauser" placeholder="Digite uma senha">
            </div>

            <button type="submit" name="botao" id="botão">Enviar</button><br>
            <a href="index.php"><button>Voltar</button>

        </form>
    </main>
</body>
</html>