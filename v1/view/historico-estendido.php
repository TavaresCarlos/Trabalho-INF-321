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
    <script>
 
    </script>

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
                 <img src="img/1.jpg" class="card-img-top" alt="..." id="imagem-perfil">
                <div id="apresentação-usuario">
                    <h5>Bem-vindo</h5>
                   <button type="button" class="btn btn-primary btn-lg btn-block" onclick="home()">Home</button>
                   <button type="button" class="btn btn-primary btn-lg btn-block" onclick="nota()">Nova tarefa</button>
                   <button type="button" class="btn btn-primary btn-lg btn-block" onclick="historico()">Histórico de notas</button>
                   <button type="button" class="btn btn-primary btn-lg btn-block" onclick="alterarSenha()">Alterar senha</button>
                </div>
            </div>
            <div class="col-sm-6">
                <?php

                    include '../model/conexao.php';

                    $conect = new conexao();
                    $conect->abrindo_conexao();

                    session_start();
                    if((!isset($_SESSION['email'])) && (!isset($_SESSION['senha'])) && (!isset($_SESSION['nome']))){
                        header('refresh: 0.01; ../view/index.html');
                    }

                    $usuarioProprietario = implode($_SESSION['nome']);
         
                    $sql = "SELECT idNota, titulo, subtitulo, data, prioridade, status, descricao FROM nota WHERE usuarioProprietario = '$usuarioProprietario'";
                    $resposta = mysqli_query($conect->getConexao(), $sql);

                    echo('Visualização estendida<br><br>');

                    echo('<div class="row">');
                    while($row = mysqli_fetch_array($resposta)){
                       echo('<div class="col-sm-3">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['titulo'].'</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">'.$row['subtitulo'].'</h6>
                                                <p class="card-text">'.$row['data'].'
                                                <br><strong>Prioridade:</strong> '.$row['prioridade'].'
                                                <br><strong>Status:</strong> '.$row['status'].'
                                                <br><strong>Descricao:</strong> '.$row['descricao'].'</p>
                                                <a href="apagar-nota.php?idNota='.$row['idNota'].'" class="card-link">Apagar</a>
                                                <a href="compartilhar.php?idNota='.$row['idNota'].'" class="card-link">Compartilhar</a>
                                    </div>
                                   </div>
                              </div>
                              <div class="col-sm-2">
                              </div>');
                    }
                    echo('</div>');

                    echo('<br><br><a href="historico.php" class="card-link">Visualização compacta das notas</a>');

                    $conect->fechando_conexao();
                ?>
            <br>
            </div>
            <div class="col-sm-2">
                    <form action="" method="POST">
                        <label for="exampleFormControlSelect1">Ordenar por:</label>
                            <select class="form-control" id="ordenar" name="ordenar" onchange="ordenar()">
                              <option value="null">---</option>
                              <option value="prioridade">Prioridade</option>
                              <option value="data">Data</option>
                              <option value="categoria" >Categoria</option>
                            </select>
                    </form>
                </div>
        </div>
    </div>
  </body>
</html>