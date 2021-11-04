<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../testes/css/estilos.css">
</head>

<body>
    <div id="conteudo">
        <section>
            <img src="../testes/imagens/logo.png" alt="">
            <p id="titulo">Moonlight</p>
            <hr>
        </section>
        <p id="facaLogin">Faça login para se conectar</p>
        <form action="#" method="post">
            <input type="text" name="login" class="form" id="login" placeholder="Login">
            <input type="password" name="password" class="form" id="password" placeholder="Senha">

            <input type="submit" value="Entrar" id="button">
        </form>

        <a href="#">
            Esqueci minha senha
        </a>

        <?php
        if(isset($_POST['login'])){

            $login = $_POST['login'];
            $pass = $_POST['password'];
            
            if($login == "Leos" && $pass == "1234"){
                header("Location: sucesso.php");
            } else{
                echo '<p>Erro! Tente novamente</p>';
            }
               
            };

            
        
        ?>

    </div>
</body>

</html>