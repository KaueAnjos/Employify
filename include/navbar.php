<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<nav class="navbar">
    <div class="search-bar">
        <img src="<?php echo INCLUDE_PATH ?>/assets/img/logo/logo.png" alt="Logo">
        <div class="search">
            <input type="search" placeholder="Pesquisar...">
            <button>
            <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <i class="fa-solid fa-microphone"></i>
        </div>
    </div>

    <div class="account-photo-container">
        <!-- use the session image -->
        <img src="<?php echo INCLUDE_PATH_ADMIN ?>" alt="User Photo">
    </div>
</nav>

</html>