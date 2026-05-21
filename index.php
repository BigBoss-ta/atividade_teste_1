<?php

session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_simples";
$conn = new mysqli($host,$user,$pass,$db)

if ( $conn -> connect_error){
    echo "<script>console.log('error na conexão com o banco');<script>";
}else{
    echo "<script>console.log('conexão com banco foi um sucesso');<script>";
}

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>
    
    <h1>Tela de Login PHP</h1>

    <form method="POST">

    <label>Usuario</label>
    <input type="text" name="usuario"><br>
    <label>Senha</label>
    <input type="password"name="senha"><br>

    <button type="submit">Entrar</button>
    </form>

</body>
</html>