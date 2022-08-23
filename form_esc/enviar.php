<?php
    if(isset($_POST['submit'])){
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['senha']);
        // print_r($_POST['cpf']);
    
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
    
        $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, cpf, senha) VALUES ('$nome','$email','$cpf', '$senha')");

    }
?>