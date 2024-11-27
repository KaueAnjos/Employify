<?php
session_start();  // Iniciar a sessão para acessar as variáveis de sessão
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo INCLUDE_PATH; ?>assets/js/script.js"></script>
</head>

<nav class="navbar" id="navbar">
    <ul class="nav-list">
        <li>
            <div class="nav-logo-search">
                <img src="<?php echo INCLUDE_PATH ?>/assets/img/logoEmployifyLight.png" alt="Logo" class="logo" onclick="resetPage();">
                <div class="search-box">
                    <input type="search" placeholder="Pesquisar...">
                    <button>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <i class="fa-solid fa-microphone"></i>
                </div>
            </div>
        </li>

        <li class="user-profile" id="user-profile">
            <?php if (isset($_SESSION['user_id'])) : ?>
                <div class="user-info">
                    <span>Olá, <?php echo $_SESSION['username']; ?></span>
                </div>
                <div class="dropdown">
                    <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa-solid fa-globe"></i>
                                <p>Idioma</p>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div>
                                    <i class="fa-solid fa-moon"></i>
                                    <p>Tema Escuro</p>
                                </div>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo INCLUDE_PATH_USERS ?>profile">
                                <i class="fa fa-sign-in"></i>
                                <p>Acessar Perfil</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo INCLUDE_PATH_AUTH ?>logout"><button>Sair</button></a>
            <?php else : ?>
                <div class="register-user">
                    <a href="<?php echo INCLUDE_PATH_AUTH ?>login"><button>Entrar</button></a>
                    <a href="<?php echo INCLUDE_PATH_AUTH ?>signup"><button>Registrar-se</button></a>
                </div>
                <div class="dropdown">
                    <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="<?php echo INCLUDE_PATH_AUTH ?>login"><i class="fa fa-sign-in" aria-hidden="true"></i>Entrar</a>
                        </li>                        
                        <li>
                            <a class="dropdown-item" href="#">
                                <div>
                                    <i class="fa-solid fa-moon"></i>
                                    <p>Tema Escuro</p>
                                </div>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa-solid fa-globe"></i>
                                <p>Idioma</p>
                            </a>
                        </li>

                    </ul>
                </div>
            <?php endif; ?>
        </li>
    </ul>
</nav>

</html>