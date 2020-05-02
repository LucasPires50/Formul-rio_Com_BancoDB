<?php

use Classes\Editar;

$parametro = filter_input_array(INPUT_GET, FILTER_DEFAULT);

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
require './Classes/Editar.php';

$usu = new editarUser();

if (isset($data ['salvar'])) {

    $usu->editar($parametro ['codigo'], $data ['nome'], $data ['email'], $data ['login'], $data ['senha']);
    header("Location: tabela.php");
}

$usuario = $usu->getUsuario($parametro['codigo']);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Lincando o bootstrat a pagina-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/container_back.css" rel="stylesheet" type="text/css">
        <link href="style/estiloCSS.css" rel="stylesheet" type="text/css"/>

        <!-- Icons font CSS-->
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        <!-- Vendor CSS-->
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="css/main.css" rel="stylesheet" media="all">

        <?php if (isset($data ['salvar'])) { ?>
            <script>
                alert("Usuário editado com sucesso !");
            </script>
        <?php } ?>

    </head>
    <body>

        <div>
            <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title">Editar Formulário</h2>
                        </div>
                        <div class="card-body">
                            
                            <form action="editar.php?codigo=<?php echo $parametro['codigo']; ?>" method="post">
                                
                                <div class="form-row">
                                    <div class="name" for="nome">Nome:</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" required name="nome" id="nome" value="<?php echo $usuario ['nome'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name" for="email">Email:</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="email" name="email" value="<?php echo $usuario ['email'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name" for="login">Login:</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" required name="login" id="login" value="<?php echo $usuario ['login'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name" for="senha">Senha:</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="password" id="senha">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name" for="senha-confirma">Confima Senha:</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="password" name="senha-confirma" id="senha-confirma">
                                        </div>
                                    </div>
                                </div>
                                <!--Botão Salvar-->
                                <div>
                                    <button class="btn btn--radius-2 btn--red" type="submit" class="btn btn-primary" id="salvar" name="salvar">Salvar</button>
                                </div>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/datepicker/moment.min.js"></script>
        <script src="vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="js/global.js"></script>
    </body>
</html>
