<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listastyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/864a97e503.js" crossorigin="anonymous"></script>
    <title>Lista</title>
</head>
<body style="background-color: black;">


            
      <div class="container" style="margin-top: 20px;">
          <h3 style="font-size: 50px;">Lista de Produtos</h3>
          
                <a href="seu_painel.php"><button class="  btn btn-warning btn-sm buttonn">Voltar</button></a> 
              <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Linkedin</th>
                  <th scope="col">Github</th>
                  <th scope="col">Instagram</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>

                <?php
                 session_start();
                  include ("conectar.php");
                  if(!isset($_SESSION['id'])){
                   die("Acesso negado, Faça login primeiro");
                      }
                      $idUsuario = $_SESSION['id'];
  
                      $sql = "SELECT * FROM contatos WHERE id_usuario = '$idUsuario'";
  
                      $caixa = mysqli_query($chave, $sql);
  
  
              while($contato = mysqli_fetch_assoc($caixa)){
  
                  $contato['nomecontato'];
                  $contato['telefonecontato'];
                  $contato['emailcontato'];
                  $contato['linkedincontato'];
                  $contato['githubcontato'];
                  $contato['instagramcontato'];

                echo "<tr>";
                echo "<td>" .$contato['nomecontato']."</td>"; // Aqui estou mostrando o que tinha dentro para Vc que esta lendo!!
                echo "<td>" .$contato['telefonecontato']."</td>";
                echo "<td>" .$contato['emailcontato']."</td>";
                echo "<td>" .$contato['linkedincontato']."</td>";
                echo "<td>" .$contato['githubcontato']."</td>";
                echo "<td>" .$contato['instagramcontato']."</td>";
                

                echo "<td style='text-align:center;'>
                         
                        <a class='btn btn-warning btn-sm buttonn' href='editar.php?id=$contato[id]' role='button'><i class='fa-regular fa-pen-to-square'></i>&nbsp;Editar</a> 
                        <a class='btn btn-outline-danger btn-sm buttonn' href='excluir.php?id=$contato[id]' role='button'><i class='fa-regular fa-trash-can'></i>&nbsp;Excluir</a>
                      </td>";
                echo "</tr>";
               
              }
       
                ?>
              </tbody>
            </table>
  
      </div>
    
</body>
</html>