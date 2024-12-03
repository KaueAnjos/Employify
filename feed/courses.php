<head>
    <title>Como criar Cards e esquecer de vez o Panel e o Thumbnail - Criando um site com Bootstrap 4 - Aula 06</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>assets/css/courses-style.css" />
</head>

<main>
    <?php include 'include/offcanvas.php'; ?>
    <section class="feed-display" id="feed">
        <div class="feed-title">
            <h1>Cursos que você vai gostar</h1>
        </div>
        <div class="courses-display">

            <div class="course-container">
                <div class="course-informations">
                    <div class="author-and-title">
                        <div class="author-account-container">

                        </div>
                        <div class="course-title-container">
                            <p class="course-title">Título do Curso</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-user-plus"></i>
                                    <p>Inscreva-se</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-share"></i>
                                    <p>Compartilhar</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-ban"></i>
                                    <p>Não tenho interesse</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <p>Denunciar</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="course-thumbnail">
                    <a href="<?php echo INCLUDE_PATH ?>selectedcourse"><img src="" alt="THUMBNAIL"></a>
                </div>
            </div>

            <div class="course-container">
                <div class="course-informations">
                    <div class="author-and-title">
                        <div class="author-account-container">

                        </div>
                        <div class="course-title-container">
                            <p class="course-title">Título do Curso</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-user-plus"></i>
                                    <p>Inscreva-se</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-share"></i>
                                    <p>Compartilhar</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-ban"></i>
                                    <p>Não tenho interesse</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <p>Denunciar</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="course-thumbnail">
                    <a><img src="" alt="THUMBNAIL"></a>
                </div>
            </div>

            <div class="course-container">
                <div class="course-informations">
                    <div class="author-and-title">
                        <div class="author-account-container">

                        </div>
                        <div class="course-title-container">
                            <p class="course-title">Título do Curso</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-user-plus"></i>
                                    <p>Inscreva-se</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-share"></i>
                                    <p>Compartilhar</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-ban"></i>
                                    <p>Não tenho interesse</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <p>Denunciar</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="course-thumbnail">
                    <a href="<?php echo INCLUDE_PATH; ?>selectedcourse">
                        <a><img src="" alt="THUMBNAIL"></a>
                    </a>
                </div>
            </div>

            <div class="course-container">
                <div class="course-informations">
                    <div class="author-and-title">
                        <div class="author-account-container">

                        </div>
                        <div class="course-title-container">
                            <p class="course-title">Título do Curso</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-user-plus"></i>
                                    <p>Inscreva-se</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-share"></i>
                                    <p>Compartilhar</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-ban"></i>
                                    <p>Não tenho interesse</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <p>Denunciar</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="course-thumbnail">
                    <a><img src="" alt="THUMBNAIL"></a>
                </div>
            </div>

            <div class="course-container">
                <div class="course-informations">
                    <div class="author-and-title">
                        <div class="author-account-container">

                        </div>
                        <div class="course-title-container">
                            <p class="course-title">Título do Curso</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-user-plus"></i>
                                    <p>Inscreva-se</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-share"></i>
                                    <p>Compartilhar</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-ban"></i>
                                    <p>Não tenho interesse</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <p>Denunciar</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="course-thumbnail">
                    <a><img src="" alt="THUMBNAIL"></a>
                </div>
            </div>

            <div class="course-container">
                <div class="course-informations">
                    <div class="author-and-title">
                        <div class="author-account-container">

                        </div>
                        <div class="course-title-container">
                            <p class="course-title">Título do Curso</p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-user-plus"></i>
                                    <p>Inscreva-se</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-share"></i>
                                    <p>Compartilhar</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-ban"></i>
                                    <p>Não tenho interesse</p>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                    <p>Denunciar</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="course-thumbnail">
                    <a><img src="" alt="THUMBNAIL"></a>
                </div>
            </div>

        </div>
    </section>
</main>