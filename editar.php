<?php
session_start();
include ('conectar.php');
if(!empty($_GET['id'])){ // VAi na minha url e pega o id se não for vazia executa botão de edição



$id = $_GET['id']; // Pegando o id da url

$sql = "SELECT * FROM contatos WHERE id=$id"; // Selecionando a tabela pelo Ids

//$resultado = $conexao->query($sql); 
// Chave e comando para banco
$caixa = mysqli_query($chave, $sql); 

if($caixa -> num_rows > 0){


     while($contato = mysqli_fetch_assoc($caixa)){

    $nomecontato = $contato['nomecontato'];
    $telefonecontato = $contato['telefonecontato'];
    $emailcontato = $contato['emailcontato'];
    $linkedincontato = $contato['linkedincontato'];
    $githubcontato = $contato['githubcontato'];
    $instagramcontato = $contato['instagramcontato'];
    $idcontato = $id;

    }
}
        
       else{
               echo "Erro ao cadastrar!!";
        }

    } 
 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contatos.style.css">
    <title>Editar Meus Contatos</title>
</head>

<body>
    <header>
        <h1>Editar Meus Contatos</h1>
    </header>
    <br>
    <main>
        <form action="salvar.php" method="POST">

            <label for="nome-contato"></label>
            <input type="text" id="nome-contato" name="nomecontato" class="form-control" placeholder="Nome do contato" autocomplete="off"
                required value="<?php echo $nomecontato?>">
            <br>
            <label for="fone-contato"></label>
            <input type="tel" id="telefone-contato" name="telefonecontato" class="form-control" placeholder="WhatsApp/Telefone" autocomplete="none"
                required value="<?php echo $telefonecontato?>">
            <br>
            <label for="e-mail-contato"></label>
            <input type="E-mail" id="E-mail-contato" name="emailcontato" class="form-control" placeholder="E-mail do contato" autocomplete="off"
                required  value="<?php echo $emailcontato?>">

            <br>
            <label for="linkedin-contato"></label>
            <input type="url" id="linkedin-contato" name="linkedincontato" class="form-control" placeholder="LinkedIn do contato" autocomplete="off" 
                required value="<?php echo $linkedincontato?>">
            <br>
            <label for="github-contato"></label>
            <input type="text" id="github-contato" name="githubcontato" class="form-control" placeholder="GitHub do contato" autocomplete="off"
                required value="<?php echo $githubcontato?>">
            <br>
            <label for="instagram-contato"></label>
            <input type="text" id="instagram-contato" name="instagramcontato" class="form-control" placeholder="Instagram do contato" autocomplete="off" value="<?php echo $instagramcontato?>">
            <br>
            <input type="hidden" name="id" id="id" value="<?php echo $idcontato?>">
            <a href="lista.php"><button name="salvar" type="submit">Pronto</button></a>
            <br>
            </form>
           
    </main>
    
        
</body>

</html>