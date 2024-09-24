<?php
require_once __DIR__ . '../../config/config.php';
require_once __DIR__ . '../../config/connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employify | Registrar-se</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_AUTH; ?>assets/css/login-style.css" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/general-style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-d0s9L3Dk3rA9rH25Kg5kfLQCgkObV6aPdXHN5c2eg+fpQpg4brd7HzsPU8eUQvL2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" type="imagex/png" href="<?php echo INCLUDE_PATH; ?>assets/img/LogoEmployifyLight.png">
</head>

<body>
    <section class="dots-container" id="loadingDots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </section>
    <div class="login-container container-fluid">
        <h1>Registrar</h1>
        <div class="login-form">
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Nome de usuário" required>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" placeholder="Telefone" required>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Senha" required>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Digite a senha novamente" required>
                </div>
            </div>
            <button>Registrar</button>
            <p>Já possui uma conta? <a href="<?php echo INCLUDE_PATH_AUTH; ?>login">Entrar</a></p>

            <div class="divider">
                <hr>
                <span>ou</span>
                <hr>
            </div>

            <div class="social-login">
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-github"></i>
            </div>
        </div>
    </div>
    <script src="<?php echo INCLUDE_PATH_AUTH; ?>assets/js/script.js"></script>
</body>

</html>