<?php
require_once 'config/config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-d0s9L3Dk3rA9rH25Kg5kfLQCgkObV6aPdXHN5c2eg+fpQpg4brd7HzsPU8eUQvL2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/navbar-style.css" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/offcanvas-style.css" />
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

    <?php
    include 'include/navbar.php';

    $route = isset($_GET['url']) ? $_GET['url'] : 'feed';

    $directories = ['feed/', 'users/', 'playlists/'];

    $fileFound = false;

    foreach ($directories as $dir) {
        if (file_exists($dir . $route . '.php')) {
            include $dir . $route . '.php';
            $fileFound = true;
            break;
        }
    }

    if (!$fileFound) {
        include '404.php';
    }

    include 'include/footer.php';
    ?>

    <script src="<?php echo INCLUDE_PATH; ?>assets/js/script.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.getElementsByClassName("navbar");

            if (window.scrollY > 0) {
                navbar.style.background = "#FF0000";
            } else {
                navbar.style.background = "transparent";
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>