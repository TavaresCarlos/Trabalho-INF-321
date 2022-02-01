<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Bootstrap JS-->
    <script src="js/bootstrap/bootstrap.bundle.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.css" >
    <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.min.css">

    <!--My CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!--My JS-->
    <script src="js/redirecionar-paginas.js"></script>
    <script src="js/ordenar.js"></script>

    <title>Trust Note</title>
  </head>
    <body onload="">
    <div id="menu">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg" id="menu-superior">
                    <div class="col-sm-1">
                        <a class="navbar-brand" href="#">Trust Note</a>
                    </div>
                    <div class="col-sm-10">
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-light" onclick="logout()">Logout</button>
                     </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3" id="menu-lateral">
                 <img src="img/1.jpg" class="card-img-top" alt="Imagem indisponível" id="imagem-perfil">
                <div id="apresentação-usuario">
                    <h5>Bem-vindo</h5>
                   <button type="button" class="btn btn-primary btn-lg btn-block" onclick="homeAdmin()">Home</button>
                   <button type="button" class="btn btn-primary btn-lg btn-block" onclick="verUsuariosCadastrados()">Ver usuários cadastrados</button>
                </div>
            </div>
            <div class="col-sm-8">
               <?php

                    include '../model/conexao.php';

                    $conect = new conexao();
                    $conect->abrindo_conexao();

                    session_start();
                    if((!isset($_SESSION['email'])) && (!isset($_SESSION['senha'])) && (!isset($_SESSION['nome']))){
                        header('refresh: 0.01; ../view/index.html');
                    }

                    $sql = "SELECT nome, email FROM usuario WHERE tipoUsuario = 'default'";
                    $resposta = mysqli_query($conect->getConexao(), $sql);

                    echo('<div class="row">');
                        while($row = mysqli_fetch_array($resposta)){   
                            echo('<div class="col-sm-3">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">'.$row['nome'].'</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Usuário default</h6>
                                            <p class="card-text">Email: '.$row['email'].'</p>
                                            <a href="ver-notas-usuarios-sistema.php?nome='.$row['nome'].'"" class="card-link">Ver notas</a>
                                            <a href="#" class="card-link">Alterar</a>
                                            <a href="ver-notas-usuarios-sistema.php?nome='.$row['nome'].'" class="card-link">Excluir</a>
                                        </div>
                                    </div>
                                  </div>
                                 <div class="col-sm-2">
                                 </div>');
                        }

                    echo('</div>');
                    $conect->fechando_conexao();

               ?>
            </div>
        </div>
    </div>
  </body>
</html>