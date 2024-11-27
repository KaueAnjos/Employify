<?php
require_once __DIR__ . '../../config/config.php';
require_once __DIR__ . '../../config/connection.php';

$errorMessage = '';
$successMessage = '';

// Processar o formulário de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm_password']);

    if (empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        $errorMessage = "Por favor, preencha todos os campos.";
    } elseif ($password !== $confirmPassword) {
        $errorMessage = "As senhas não coincidem.";
    } else {
        try {
            // Verificar se o e-mail já está registrado
            $stmt = $conn->prepare("SELECT id FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $errorMessage = "E-mail já registrado.";
            } else {
                // Inserir novo usuário
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->execute();

                // Redirecionar para a página de login
                header("Location: login.php");
                exit;
            }
        } catch (PDOException $e) {
            $errorMessage = "Erro ao processar o registro: " . $e->getMessage();
        }
    }
}
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
        <div class="login-form form-namespace">
            <!-- Exibir mensagens de sucesso ou erro -->
            <?php if (!empty($errorMessage)): ?>
                <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
            <?php endif; ?>
            <?php if (!empty($successMessage)): ?>
                <div class="alert alert-success"><?php echo $successMessage; ?></div>
            <?php endif; ?>

            <form method="POST">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Nome de usuário" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="phone" placeholder="Telefone" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Senha" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="confirm_password" placeholder="Digite a senha novamente" required>
                    </div>

                    <button class="submit-button" type="submit">Registrar</button>
                </div>
            </form>
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
