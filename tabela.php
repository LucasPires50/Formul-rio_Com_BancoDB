<?php
require './Classes/Usuario.php';

use Classes\Usuario;

$usu = new Usuario();

$usuarios = $usu->listar();

if (isset($data ['excluir'])) {
    require './Classes/Deletar.php';

    $usu = new deletarUser();
    $coigo = $data['codigo'];
    $usuarios = $usu->deletar($codigo);
}
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

    </head>
    <body class="corfundo">
        <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h1 class="title">Tabela de Usuários</h1>
                    </div>
                    <div class="card-body">

                        <br/>

                        <div class="form-row">
                            <div class="tabela">
                            <table class="table table-bordered d-table-row">

                                <thead class="cabeca">

                                    <tr>
                                        <td>Código</td>
                                        <td>Nome</td>
                                        <td>E-mail</td>
                                        <td>Login</td>
                                        <td>Opções</td>
                                    </tr>

                                <tbody>

                                    <?php foreach ($usuarios as $index => $usuario) { ?>

                                        <tr>
                                            <td><?php echo $usuario ['codigo']; ?></td>
                                            <td><?php echo $usuario ['nome']; ?></td>
                                            <td><?php echo $usuario ['email']; ?></td>
                                            <td><?php echo $usuario ['login']; ?></td>
                                            <td>
                                                <a href="editar.php?codigo=<?php echo $usuario['codigo']; ?>&editar">Editar</a> |
                                                <a href="eliminar.php?codigo=<?php echo $usuario['codigo']; ?>&excluir">Excluir</a>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                </tbody>

                            </table>
                        </div>
                        </div>
                        <div>
                            <a href="index.php"><button class="btn btn--radius-2 btn--red botaoCadastrarNovo" type="submit" class="btn btn-primary" id="cadastrar" name="cadastrar" >Cadastrar novo usuário</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
