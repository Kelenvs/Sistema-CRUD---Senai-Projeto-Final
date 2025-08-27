<?php

 include ('conectar.php');


if(isset($_POST['salvar'])){

    
   $id = $_POST['id'];           
    
   

    
    $nomecontato = $_POST['nomecontato'];
    $telefonecontato = $_POST['telefonecontato'];
    $emailcontato = $_POST['emailcontato'];
    $linkedincontato = $_POST['linkedincontato'];
    $githubcontato = $_POST['githubcontato'];
    $instagramcontato = $_POST['instagramcontato'];




    $caixa = "UPDATE contatos SET nomecontato ='$nomecontato', telefonecontato ='$telefonecontato', emailcontato ='$emailcontato',
     linkedincontato ='$linkedincontato',githubcontato =' $githubcontato', instagramcontato = '$instagramcontato' WHERE id ='$id'";

    $resultado = mysqli_query($chave, $caixa);
    }
   header('Location: seu_painel.php');




?>
