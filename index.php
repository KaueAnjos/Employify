<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-d0s9L3Dk3rA9rH25Kg5kfLQCgkObV6aPdXHN5c2eg+fpQpg4brd7HzsPU8eUQvL2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.5/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/navbar-style.css" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/home-style.css" />
</head>

<body>
    <?php
    include 'include/navbar.php';

    // Route 
    $route = (isset($_GET['url'])) ? $_GET['url'] : 'home';
    $pagesDir = 'pages/';

    if (file_exists($pagesDir . $route . '.php')) {
        include $pagesDir . $route . '.php';
    } else {
        include $pagesDir . '404.php';
    }


    include 'include/footer.php';
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>