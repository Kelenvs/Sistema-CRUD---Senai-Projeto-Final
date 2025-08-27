<?php
 $usuario = 'root';
 $senha = '';
 $banco = 'telalogin';
 $local = 'localhost';



 $chave = mysqli_connect($local, $usuario, $senha, $banco);

 if( $chave->error){
    die("Falha ao conectar!!" . $chave->error) ; // Teste de error
 }
?>