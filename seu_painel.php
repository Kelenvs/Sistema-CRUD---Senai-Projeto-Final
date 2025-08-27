<?php

include ('conectar.php'); // Estou com a chave do Banco de dados!! 1

//Se estiver dados na consulta execute o if verdadeiro
if(!empty($_GET['search'])) 
{ // Bloco true
  //Guarde o dados da consulta na variável
  $dados = $_GET['search'];
  //Estou com o comando/pedido que quero mandar para o banco de dados!! 2
  $sql =  "SELECT * FROM contatos WHERE id LIKE '%$dados%' or nomecontato LIKE '%$dados%' or 
  telefonecontato LIKE '%$dados%'or emailcontato LIKE '%$dados%' or linkedincontato LIKE '%$dados%' or 
  githubcontato LIKE '%$dados%' or instagramcontato LIKE '%$dados%' ORDER BY id DESC";

}else
{ // Bloco false
  
  $sql = "SELECT * FROM contatos ORDER BY id DESC"; 
}

//Estou com a chave + comando/pedido entrei no banco de dados  e estou com o objeto fechado
//  e esta guardado na minha bolsa não posso abrir!! 3
$resultado = mysqli_query($chave, $sql); 


//print_r($resultado);
//print_r($dadosbanco);


?>





<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="painel.style.css">
    <title>Painel</title>
  </head>
  <body style="background-color: rgba(0, 0, 0, 1);">
    <main>

      <h3>Bem-vinda/o ao seu Painel de Contatos</h3>
       <h4>O que deseja fazer?</h4>
      <a href="contatos.php"><button type="submit" name="botao" id="botao">Adicionar um contato</button></a>
      <a href="lista.php"><button >Ver minha lista</button></a>
      <!-- <a href="listar.html"><button type="submit" name="botao" id="botao">Voltar</button></a> -->
  
  
    </main>
  </body>
</html>


