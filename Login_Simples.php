<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login Simples</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Usuário" required>
        <br><br>
        <input type="password" name="password" placeholder="Senha" required>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
    <?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "admin" && $password == "1234"){
            echo "Login bem-sucedido!";
        }else{
            echo "Usuário ou senha incorretos.";
        }
    }
    ?>
    
</body>
</html>