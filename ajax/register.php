<?php
require_once __DIR__ . '/config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = [];

    // Recebendo os dados enviados via POST
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if (empty($username) || empty($email) || empty($phone) || empty($password) || empty($confirmPassword)) {
        $response['status'] = 'error';
        $response['message'] = 'Todos os campos são obrigatórios!';
        echo json_encode($response);
        exit;
    }

    if ($password !== $confirmPassword) {
        $response['status'] = 'error';
        $response['message'] = 'As senhas não coincidem!';
        echo json_encode($response);
        exit;
    }

    try {
        // Verificar se o e-mail já existe
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $response['status'] = 'error';
            $response['message'] = 'Este e-mail já está registrado!';
            echo json_encode($response);
            exit;
        }

        // Hash da senha
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Inserir no banco de dados
        $stmt = $conn->prepare("INSERT INTO users (username, email, phone, password) VALUES (:username, :email, :phone, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();

        $response['status'] = 'success';
        $response['message'] = 'Usuário registrado com sucesso!';
    } catch (PDOException $e) {
        $response['status'] = 'error';
        $response['message'] = 'Erro ao registrar usuário: ' . $e->getMessage();
    }

    echo json_encode($response);
}
?>
