<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>CV Web</title>

    <link rel="icon" type="image/x-icon" href="/favicon/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-w1N/SRj+TK70GT4LrMjH/lqy9P3peDn/RWLjEAE07l3WLS7TX5/A7HhqKF3OzZ3Qx5bYrMqQ67qVuIuNqevGuA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/b97b54cfec.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Styles -->
    <style>
        /* Add any custom styles here */
    </style>
</head>

<body class="antialiased">

    <div class="container-fluid">
        <div class="d-flex justify-content-end">
            <button class="custom-btn">
                <i class="fa-regular fa-moon fa-xl" style="color: #ffffff;"></i>
            </button>
            <div class="dropdown">
                <button id="languageBtn" class="btn btn-secondary dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Seleccionar Idioma
                </button>
                <ul id="languageMenu" class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('es')">Español</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')">Inglés</a></li>
                </ul>
            </div>
        </div>

        <div class="container glass row">
            <div class="col-12 col-md-4 text-center">
                <img src="../images/avatar.png" class="circulo" alt="avatar">
            </div>
            <div class="col-12 col-md-8">
                <h2>Williams Barraza Gallardo</h2>
                <h4>Front-end Dev.</h4>
                <p class="text-justify">Soy un profesional de 21 años egresado de la carrera de Analista Programador en
                    el
                    Centro de formación técnica INACAP en la sede de Antofagasta, entre mis habilidades se encuentran la
                    resolución de problemas en base a los requerimientos que se me solicitan para el desarrollo de
                    aplicaciones.</p>
            </div>
            <div class="col-15 mt-2">
                <div class="icons">
                    <a href="https://www.linkedin.com/in/williams-barraza-gallardo-919197271">
                        <i class="fa-brands fa-linkedin fa-beat fa-2xl" style="color: #ffffff;" alt="LinkedIn"
                            title="¿Me añades en LinkedIn?"></i>
                    </a>
                    <a href="https://web.facebook.com/profile.php?id=100076428446981">
                        <i class="fa-brands fa-facebook fa-beat fa-2xl" style="color: #ffffff;" alt="Facebook"
                            title="¿Me añades en Facebook?"></i>
                    </a>
                    <a href="https://github.com/nediakX?tab=repositories">
                        <i class="fa-brands fa-github fa-beat fa-2xl" style="color: #ffffff;" alt="GitHub"
                            title="¡Revisa mi Repositorio en GitHub!"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <div class="btns text-center">
            <a href="{{ asset('images/cv.pdf') }}" download="Mi_CV.pdf" class="btn btn-outline-light"
                title="Mi Curriculum actualizado."><i class="fa-solid fa-circle-down"></i>
                Descargar CV</a>
            <a href="mailto:vicentebarraza17@outlook.com" class="btn btn-outline-light"
                title="Enviame un correo electronico, lo respondere a la brevedad,"><i class="fa-solid fa-envelope"></i>
                Contacto</a>
        </div>

        <hr>
        <h4 class="text-center">Mi Trayectoria</h4>
        <div class="d-flex justify-content-center">
            <div class="experienceCards">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mx-auto mb-3" style="max-width: 18rem;">
                            <img src="{{ asset('images/img2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">INACAP Antofagasta</h5>
                                <p class="card-text">El año 2020 luego de terminar mis estudios de educacion media,
                                    comence la carrera de Analista Programador en el centro de formacion tecnica
                                    Inacap en su sede ubicada en la 2da region en la ciudad de Antofagasta.</p>
                                <h5 class="card-title">2020 - 2023</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mx-auto mb-3" style="max-width: 18rem;">
                            <img src="{{ asset('images/img1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Ilustre Municipalidad de Diego de Almagro</h5>
                                <p class="card-text">Para poder recibir mi titulo de tecnico de nivel superior tuve
                                    que realizar mi practica profesional en la municipalidad de Diego de Almagro por 3
                                    meses, para luego quedar trabajando ahi por 6 meses.</p>
                                <h5 class="card-title">2022 - 2023</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>