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
                    <div>
                        <div class="user-photo-container"><img src="" alt="user-photo"></div>
                        <div class="user-stats">
                            <h2>Nome Completo</h2>
                            <div>
                                <p><b>19</b> Seguindo</p>
                                <p><b>5</b> Seguidores</p>
                            </div>
                        </div>
                        <h3>Nome Usuário</h3>
                    </div>

                    <div class="user-about">
                        <h3>Sobre Mim</h3>
                        <p>Lorem ipsum dolor sit amet. Ad nobis illo non itaque minus ut nobis obcaecati non rerum soluta est velit velit est aperiam quidem id nihil consequuntur. Rem adipisci fugiat non rerum pariatur sed ipsa aliquid nam aliquam animi et molestias explicabo qui omnis nemo? Ut delectus enim ea obcaecati expedita eos voluptatem doloremque quo culpa ullam eos voluptatem magni eum pariatur voluptas ab error mollitia. Ex aspernatur sint qui rerum consequatur eum adipisci numquam ad impedit voluptates et nemo dolores ut reprehenderit molestias.</p>
                    </div>
                </div>

                <div class="buttons">
                    <a href="<?php echo INCLUDE_PATH?>chat"><button><i class="fa-solid fa-brain"></i>Employify IA</button></a>
                    <a href="<?php echo INCLUDE_PATH?>"><button><i class="fa-solid fa-pencil"></i>Editar Perfil</button></a>
                    <a href="<?php echo INCLUDE_PATH?>courses"><button><i class="fa-solid fa-book"></i>Seus Cursos</button></a>
                    <a href="<?php echo INCLUDE_PATH?>history"><button><i class="fa-solid fa-clock"></i>Histórico</button></a>
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