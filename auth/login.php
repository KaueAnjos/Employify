<?php
require_once __DIR__ . '../../config/config.php';
require_once __DIR__ . '../../config/connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employify | Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-d0s9L3Dk3rA9rH25Kg5kfLQCgkObV6aPdXHN5c2eg+fpQpg4brd7HzsPU8eUQvL2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_AUTH; ?>assets/css/login-style.css" />
</head>

<body>
    <div class="login-container container-fluid">
        <h1>Entrar</h1>
        <div class="login-form">
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Nome de usuário ou email">
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Senha">
                </div>
            </div>

            <a href="#">Esqueceu a senha?</a>
            <button>Entrar</button>
            <p>Ainda não possui uma conta? <a href="<?php echo INCLUDE_PATH_AUTH; ?>signup">Registre-se</a></p>

            <div class="divider">
                <hr>
                <span>Faça login com contas sociais</span>
                <hr>
            </div>

            <div class="social-login">
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-github"></i>
            </div>
        </div>
    </div>
</body>

</html>