<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<nav class="navbar nacvbar-expand-lg">
    <ul class="nav-list">
        <li>
            <div class="nav-logo-search">
                <img src="<?php echo INCLUDE_PATH ?>/assets/img/logo/logo.png" alt="Logo">
                <div class="search-box">
                    <input type="search" placeholder="Pesquisar...">
                    <button>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <i class="fa-solid fa-microphone"></i>
                </div>
            </div>
        </li>

        <li class="user-profile">
            <div class="register-user">
                <a href="<?php echo INCLUDE_PATH_AUTH ?>login"><button>Entrar</button></a>
                <a href="<?php echo INCLUDE_PATH_AUTH ?>signup"><button>Registrar-se</button></a>
            </div>
            <!-- <i class="fa-solid fa-user"></i> -->
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
                                <p>Tema</p>
                            </div>
    
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </a>
                    </li>
                    <li><a class="dropdown-item" href="<?php echo INCLUDE_PATH_AUTH ?>login"><i class="fa fa-sign-in" aria-hidden="true"></i>Entrar</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

</html>