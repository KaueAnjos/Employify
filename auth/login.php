<?php
require_once __DIR__ . '../../config/config.php';
require_once __DIR__ . '../../config/connection.php';

$errorMessage = '';

// Processar o formulário de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if (empty($login) || empty($password)) {
        $errorMessage = "Por favor, preencha todos os campos.";
    } else {
        try {
            $stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE username = :login OR email = :login");
            $stmt->bindParam(':login', $login);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];

                    // Redirecionar para o menu principal
                    header("Location: ../");
                    exit;
                } else {
                    $errorMessage = "Senha incorreta.";
                }
            } else {
                $errorMessage = "Usuário ou e-mail não encontrado.";
            }
        } catch (PDOException $e) {
            $errorMessage = "Erro ao processar o login: " . $e->getMessage();
        }
    }
}
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
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/general-style.css" />
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
        <h1>Entrar</h1>
        <form method="POST" class="login-form">
            <!-- Exibir mensagens de erro ou sucesso -->
            <?php if (!empty($errorMessage)): ?>
                <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
            <?php endif; ?>
            <?php if (!empty($successMessage)): ?>
                <div class="alert alert-success"><?php echo $successMessage; ?></div>
            <?php endif; ?>

            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="login" placeholder="Nome de usuário ou email" required>
                </div>  

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Senha" required>
                </div>
            </div>

            <a href="#">Esqueceu a senha?</a>
            <button type="submit">Entrar</button>
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
        </form>
    </div>
    <script src="<?php echo INCLUDE_PATH_AUTH; ?>assets/js/script.js"></script>
</body>

</html>
