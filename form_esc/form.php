<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];


        $result = mysqli_query($con,"INSERT INTO cadastro_aluno (nome,senha,email,cpf) 
        VALUES ('$nome','$senha','$email','$cpf')");
    }

    if ( isset($_POST['email']) ) {
        $vEmail = $_POST['email'];
        if ( $vEmail == '$email' ) {
            return true;
        } else {
            return false;
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen">
    <title>Cadastro</title>
</head>
<body>
    <section class="container" id="container">
        <section class="conteudo">
            <div class="esquerdo" id="esquerdo">
                <div class="imagem">
                    <a href="#"><img src="logo.png"></a>
                </div>
            </div>
            <div class="direito" id="direito">
                <div class="textos">
                    <label>Bem vindo</label>
                    <h1>Cadastre-se</h1>
                </div>
                <div class="dados">
                    <div class="box">
                        <form action="form.php" method="POST">
                                <br>
                                <div class="inputBox">
                                    <label for="nome" class="labelInput">Nome completo</label><br>
                                    <input type="text" name="nome" id="nome" class="inputUser" required>
                                </div>
                                <br>
                                <div class="inputBox">
                                    <label for="senha" class="labelInput">Senha</label><br>
                                    <input type="password" name="senha" id="senha" class="inputUser" required>
                                </div><br><br>
                                <div class="inputBox">
                                    <label for="confirmar_senha" class="labelInput">Confirmar Senha</label><br>
                                    <input type="password" name="confirmar_senha" id="confirmar_senha" class="inputUser" required>
                                </div>
                                <br><br>
                                <div class="inputBox">
                                    <label for="email" class="labelInput">Email</label><br>
                                    <input type="text" name="email" id="email" class="inputUser" required>
                                </div>
                                <br><br>
                                <div class="inputBox">
                                    <label for="cpf" class="labelInput">Cpf</label><br>
                                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                                </div>
                                <br><br>
                                <div class="botao">
                                    <input type="submit" name="submit" id="submit">
                                </div>     
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="senha.js"></script>
    </section>
</body>
</html>