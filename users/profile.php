<?php
require_once '../config/config.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employify | Perfil</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_USERS; ?>assets/css/profile-style.css" />
</head>

<body>
    <main>
        <section class="profile">
            <div class="profile-container">
                <div class="user-data">
                    <div><img src="" alt="user-photo"></div>
                    <h2>Name User</h2>
                    <h3>Sobre Mim</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>

                <div class="buttons">
                    <button>Employify IA</button>
                    <button>Editar Perfil</button>
                    <button>Seus Cursos</button>
                    <button>Histórico de Cursos</button>
                </div>
            </div>
        </section>
    </main>
</body>