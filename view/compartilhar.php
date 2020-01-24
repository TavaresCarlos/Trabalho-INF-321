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
            <div class="col-sm-8">
                <?php

                    include '../model/conexao.php';

                    $conect = new conexao();
                    $conect->abrindo_conexao();

                    session_start();
                    if((!isset($_SESSION['email'])) && (!isset($_SESSION['senha'])) && (!isset($_SESSION['nome']))){
                        header('refresh: 0.01; ../view/index.html');
                    }

                    $idNota = $_GET['idNota'];

                    $sql = "SELECT idUsuario, nome FROM usuario";
                    $resposta = mysqli_query($conect->getConexao(), $sql);

                    echo('<form method="GET" action="../php/redirecionamento-compartilhar.php">
                        <label for="exampleFormControlInput1">Identificador da nota:</label>
                            <input type="text" class="form-control" id="idNota" name="idNota" placeholder="" value="'.$idNota.'" readonly="readonly">
                            <label for="exampleFormControlSelect1">Compartilhar com:</label>
                                <select class="form-control" id="idUsuarioCompartilhado" name="idUsuarioCompartilhado">
                                    <option value="null">---</option>');
                                    while($row = mysqli_fetch_array($resposta)){
                                        echo('<option value="'.$row['idUsuario'].'">'.$row['nome'].'</option>');
                                    }
                                echo('</select>
                                    <br>
                                    <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                                    </form>');

                    $conect->fechando_conexao();
                ?>
            <br>
            </div>
        </div>
    </div>
  </body>
</html>