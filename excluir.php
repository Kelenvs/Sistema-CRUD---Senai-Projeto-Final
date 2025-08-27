<?php
  session_start();
include ('conectar.php');

if(!empty($_GET['id'])){



$id = $_GET['id']; // Pegando o id da url

$sql = "SELECT * FROM contatos WHERE id=$id"; // Selecionando a tabela pelo Ids para saber se existe

$caixa= mysqli_query($chave, $sql); // Chave e comando para banco


if($caixa -> num_rows > 0){


     $sqldelete = "DELETE FROM contatos WHERE id='$id'";
     $resultdelete = mysqli_query($chave, $sqldelete);

     header('Location:lista.php');

}
        
       else{
                header('Location:index.php');
        }
}

?>