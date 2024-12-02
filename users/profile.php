<?php
require_once __DIR__ . '../../config/connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$userId = $_SESSION['user_id'];

try {
    // Recuperar os dados do usuário
    $stmt = $conn->prepare("SELECT full_name, username, about_me FROM users WHERE id = :id");
    $stmt->bindParam(':id', $userId);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $fullName = $user['full_name'];
        $username = $user['username'];
        $aboutMe = $user['about_me'];
    } else {
        header("Location: login.php");
        exit;
    }

    $aboutMe = $aboutMe ?? 'Digite aqui sobre você!';

    // Atualizar os dados se o formulário for enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newUsername = $_POST['username'];
        $newAboutMe = $_POST['about_me'];
        $profilePhotoPath = null;

        // Processar o upload da foto
        if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = __DIR__ . '/../../assets/uploads/';
            $fileName = uniqid() . '-' . basename($_FILES['profile_photo']['name']);
            $uploadFilePath = $uploadDir . $fileName;

            // Verificar se o diretório de upload existe
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Mover o arquivo para o diretório de upload
            if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $uploadFilePath)) {
                $profilePhotoPath = 'assets/uploads/' . $fileName;
            } else {
                die("Erro ao salvar a foto de perfil.");
            }
        }

        // Atualizar os dados no banco de dados
        $stmt = $conn->prepare("UPDATE users SET username = :username, about_me = :about_me" .
            ($profilePhotoPath ? ", profile_photo = :profile_photo" : "") . " WHERE id = :id");
        $stmt->bindParam(':username', $newUsername);
        $stmt->bindParam(':about_me', $newAboutMe);
        if ($profilePhotoPath) {
            $stmt->bindParam(':profile_photo', $profilePhotoPath);
        }
        $stmt->bindParam(':id', $userId);
        $stmt->execute();

        // Redirecionar para o perfil
        header("Location: " . INCLUDE_PATH . "profile");
        exit;
    }
} catch (PDOException $e) {
    die("Erro ao buscar ou atualizar informações do usuário: " . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employify | Perfil</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_USERS; ?>assets/css/profile-style.css" />
    <style>
        .editable {
            border: 2px solid transparent;
            border-radius: 5px;
            padding: 5px;
            background-color: #f8f9fa;
            width: 100%;
        }

        .editable:focus {
            border: 2px solid #007bff;
            outline: none;
        }
    </style>
</head>

<?php include 'include/offcanvas.php'; ?>

<body>
    <main>
        <section class="profile">
            <div class="profile-container">
                <div class="user-data">
                    <div>
                        <div class="user-photo-container">
                            <label for="profile_photo">
                                <img src="<?php echo INCLUDE_PATH; ?>assets/img/<?php echo htmlspecialchars($user['profile_photo'] ?? 'default.jpg'); ?>"
                                    alt="Foto do usuário">
                            </label>
                            <input type="file" id="profile_photo" name="profile_photo" style="display: none;" accept="image/*">
                        </div>
                        <div class="user-stats">
                            <h2><?php echo htmlspecialchars($fullName); ?></h2>
                            <div>
                                <p><b>19</b> Seguindo</p>
                                <p><b>5</b> Seguidores</p>
                            </div>
                        </div>
                        <?php if (isset($_GET['edit']) && $_GET['edit'] === 'true'): ?>
                            <!-- Formulário de Edição -->
                            <form method="POST" action="<?php echo INCLUDE_PATH ?>profile" enctype="multipart/form-data">
                                <label for="profile_photo">
                                    <img src="<?php echo INCLUDE_PATH . htmlspecialchars($user['profile_photo'] ?? 'assets/img/default.jpg'); ?>"
                                        alt="Foto do usuário">
                                </label>
                                <input type="file" id="profile_photo" name="profile_photo" style="display: none;" accept="image/*">

                                <label for="username">Nome de Usuário:</label>
                                <input type="text" class="editable" name="username" value="<?php echo htmlspecialchars($username); ?>" required>

                                <label for="about_me">Sobre Mim:</label>
                                <textarea class="editable" name="about_me" rows="4" required><?php echo htmlspecialchars($aboutMe); ?></textarea>

                                <button type="submit" class="btn btn-primary mt-3">Salvar Alterações</button>
                            </form>


                        <?php else: ?>
                            <!-- Exibição dos Dados -->
                            <h3><?php echo htmlspecialchars($username); ?></h3>
                            <div class="user-about">
                                <h3>Sobre Mim</h3>
                                <p><?php echo htmlspecialchars($aboutMe); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="buttons">
                    <a href="<?php echo INCLUDE_PATH ?>chat"><button><i class="fa-solid fa-brain"></i>Employify IA</button></a>
                    <a href="?edit=true"><button><i class="fa-solid fa-pencil"></i>Editar Perfil</button></a>
                    <a href="<?php echo INCLUDE_PATH ?>courses"><button><i class="fa-solid fa-book"></i>Seus Cursos</button></a>
                    <a href="<?php echo INCLUDE_PATH ?>history"><button><i class="fa-solid fa-clock"></i>Histórico</button></a>
                </div>
            </div>
        </section>
        <a href="#courses"><i class="fa-solid fa-chevron-down"></i></a>
        <section>
            <div class="courses-container" id="courses">
                <h1>Seus Cursos</h1>
            </div>
        </section>
    </main>
</body>

</html>