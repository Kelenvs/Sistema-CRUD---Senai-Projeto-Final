<?php  

session_start();
include ("conectar.php");

// verificar se usuario esta logado
if(!isset($_SESSION['id'])){
    die("Acesso negado. Faça seu login primeiro");

}



if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $idusuario = $_SESSION['id'];// id do usuario logado

    $nomecontato = $chave->real_escape_string($_POST['nomecontato'] ?? '');
    $telefonecontato = $chave->real_escape_string($_POST['telefonecontato'] ?? '');
    $emailcontato = $chave->real_escape_string($_POST['emailcontato'] ?? '');
    $linkedincontato = $chave->real_escape_string($_POST['linkedincontato'] ?? '');
    $githubcontato = $chave->real_escape_string($_POST['githubcontato'] ?? '');
    $instagramcontato = $chave->real_escape_string($_POST['instagramcontato'] ?? '');
    
    $sql = "INSERT INTO contatos (id_usuario, nomecontato, telefonecontato, emailcontato, linkedincontato, githubcontato, instagramcontato) VALUE
    ('$idusuario', '$nomecontato', '$telefonecontato', '$emailcontato', '$linkedincontato', '$githubcontato', '$instagramcontato')";

    if(mysqli_query($chave, $sql)){
        header ("Location:cadastrosucesso.php");
        
    }else{
        echo "Erro ao salvar: " . mysqli_error($chave);
    }
    

}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contatos.style.css">
    <title>Cadastrar Meus Contatos</title>
</head>

<body>
    <header>
        <h1>Cadastrar Meus Contatos</h1>
    </header>
    <br>
    <main>
        <form action="" method="POST">

            <label for="nome-contato"></label>
            <input type="text" id="nome-contato" name="nomecontato" class="form-control" placeholder="Nome do contato" autocomplete="off"
                >
            <br>
            <label for="fone-contato"></label>
            <input type="tel" id="telefone-contato" name="telefonecontato" class="form-control" placeholder="WhatsApp/Telefone" autocomplete="none"
                >
            <br>
            <label for="e-mail-contato"></label>
            <input type="E-mail" id="E-mail-contato" name="emailcontato" class="form-control" placeholder="E-mail do contato" autocomplete="off"
                >

            <br>
            <label for="linkedin-contato"></label>
            <input type="text" id="linkedin-contato" name="linkedincontato" class="form-control" placeholder="LinkedIn do contato" autocomplete="off" 
                 >
            <br>
            <label for="github-contato"></label>
            <input type="text" id="github-contato" name="githubcontato" class="form-control" placeholder="GitHub do contato" autocomplete="off"
                >
            <br>
            <label for="instagram-contato"></label>
            <input type="text" id="instagram-contato" name="instagramcontato" class="form-control" placeholder="Instagram do contato" autocomplete="off">
            <br>
            <button type="submit">Agendar</button>
            <br>
        </form>
        <a href="lista.php"><button >Ver minha lista</button></a>
  
    </main>
</body>

</html>