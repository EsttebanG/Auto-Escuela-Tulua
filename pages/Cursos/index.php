<?php
// Rol.php
require '../../assets/config/db.php';

$stmt = $pdo->query('SELECT * FROM curso');
$cursos = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("../../assets/config/head.php"); ?>
    <link rel="stylesheet" href="/Auto-Escuela-Tulua/assets/css/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/Auto-Escuela-Tulua/assets/css/font-awesome/6.4.0/css/all.min.css" />
    <title>Auto Escuela Tuluá - Cursos</title>
</head>

<body>
    <?php include("../../assets/config/topbar.php"); ?>

    <main>
        <header>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-5 col-ss-12">
                        <hr>
                        <picture>
                            <source srcset="/Auto-Escuela-Tulua/img/manEnseñando.jpeg" type="image/svg+xml" />
                            <img src="/Auto-Escuela-Tulua/img/manEnseñando.jpeg" class="img-fluid" alt="manEnseñando" />
                        </picture>
                        <hr>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="row text-center col-lg-10">
                        <div class="d-flex align-items-center justify-content-center">
                            <h1> Cursos Disponibles </h1>
                        </div>
                        <p>
                            Bienvenido a la sección de cursos de Auto Escuela Tuluá, donde te ofrecemos una amplia variedad de programas
                            de formación vial diseñados para ayudarte a adquirir los conocimientos y habilidades necesarias para
                            convertirte en un conductor seguro y responsable.
                            <br>
                            <br>
                            En Auto Escuela Tuluá, entendemos la importancia de una educación vial integral y de calidad. Es por eso que
                            hemos desarrollado una serie de cursos cuidadosamente estructurados y adaptados a las necesidades de
                            nuestros estudiantes. Ya sea que estés buscando obtener tu licencia por primera vez, mejorar tus habilidades
                            de conducción, o especializarte en un tipo específico de vehículo, tenemos el curso adecuado para ti.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div class="d-s-none d-lg-none">
                <div class="container container-fluid mt-5">
                    <div class="row d-flex align-items-center justify-content-center">
                        <?php foreach ($cursos as $curso) : ?>
                            <div class="col-lg-3 m-3 d-none">
                                <div class="card text-center" style="width:18rem;">
                                    <h5 class="card-title"><?= htmlspecialchars($curso['nombre']) ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted "><?= htmlspecialchars($curso['descripcion']) ?></h6>
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <div class="col-9">
                                            <img src="/Auto-Escuela-Tulua/img/automovil.jpeg" class="card-img-top" alt="automovil">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">$ <?= htmlspecialchars($curso['precio']) ?></p>
                                        <a class="btn btn-warning" href="/Auto-Escuela-Tulua/pages/Pagos/?<?= htmlspecialchars($curso['id_curso']) ?>" role="button">Pagar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="d-ss-block d-lg-block">
                <div class="container mt-5">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card text-center" style="width:18rem;">
                                    <h5 class="card-title">1</h5>
                                    <h6 class="card-subtitle mb-2 text-muted ">asdfadf asfdsfadad</h6>
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <div class="col-9">
                                            <img src="/Auto-Escuela-Tulua/img/automovil.jpeg" class="card-img-top" alt="automovil">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">$ <?= htmlspecialchars($curso['precio']) ?></p>
                                        <a class="btn btn-warning" href="/Auto-Escuela-Tulua/pages/Pagos/?id_curso=<?= htmlspecialchars($curso['id_curso']) ?>" role="button">Pagar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center" style="width:18rem;">
                                    <h5 class="card-title">2</h5>
                                    <h6 class="card-subtitle mb-2 text-muted ">asdfadf asfdsfadad</h6>
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <div class="col-9">
                                            <img src="/Auto-Escuela-Tulua/img/automovil.jpeg" class="card-img-top" alt="automovil">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">$ 1</p>
                                        <a class="btn btn-warning" href="/Auto-Escuela-Tulua/pages/Pagos/?id_curso=<?= htmlspecialchars($curso['id_curso']) ?>" role="button">Pagar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card text-center" style="width:18rem;">
                                    <h5 class="card-title">3</h5>
                                    <h6 class="card-subtitle mb-2 text-muted ">asdfadf asfdsfadad</h6>
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <div class="col-9">
                                            <img src="/Auto-Escuela-Tulua/img/automovil.jpeg" class="card-img-top" alt="automovil">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">$ <?= htmlspecialchars($curso['precio']) ?></p>
                                        <a class="btn btn-warning" href="/Auto-Escuela-Tulua/pages/Pagos/?id_curso=<?= htmlspecialchars($curso['id_curso']) ?>" role="button">Pagar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <div class="container mt-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-9 text-center">
                        <p>
                            Nuestro equipo de instructores altamente calificados y experimentados está comprometido a brindarte la
                            mejor experiencia educativa posible. Con métodos de enseñanza innovadores y recursos didácticos
                            actualizados, te guiaremos a través de cada paso del proceso de aprendizaje, asegurándonos de que te
                            sientas preparado y seguro en la carretera.
                            <br>
                            <br>
                            Explora nuestra oferta de cursos, que incluye programas para automóviles particulares, motocicletas,
                            vehículos de servicio público y mucho más. Ya sea que estés buscando obtener tu primera licencia,
                            mejorar tus habilidades existentes o expandir tu conocimiento en el campo vial, estamos aquí para
                            ayudarte a alcanzar tus objetivos.
                            <br>
                            <br>
                            En Auto Escuela Tuluá, no solo te preparamos para aprobar los exámenes de licencia, sino que también te
                            proporcionamos las herramientas y el conocimiento necesarios para convertirte en un conductor seguro,
                            consciente y responsable. ¡Comienza tu viaje hacia una conducción más segura hoy mismo con nosotros!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row m-ss-3">
                    <div class="col-12 d-flex align-items-center justify-content-center mt-ss-3">
                        <div class="row">
                            <div class="card col-lg-4 col-ss-12 mx-3 bg-secondary-subtle" style="width: 18rem;">
                                <img src="/Auto-Escuela-Tulua/img/CH.png" class="card-img-top" alt="CH">
                                <div class="card-body">
                                    <h5 class="card-title">Confianza</h5>
                                    <p class="card-text">
                                        Primero nuestro compromiso con la vida.
                                        <br>
                                        <br>
                                        Más de 18 años educando personas con responsabilidad.
                                        <br>
                                        <br>
                                        Equipo humano experto y actualizado.
                                    </p>
                                </div>
                            </div>

                            <div class="card col-lg-4 col-ss-12 mx-3 bg-secondary-subtle mt-ss-3" style="width: 18rem;">
                                <img src="/Auto-Escuela-Tulua/img/ES.png" class="card-img-top" alt="ES">
                                <div class="card-body">
                                    <h5 class="card-title">Seguridad</h5>
                                    <p class="card-text">
                                        Vigilados y legalmente certificados.
                                        <br>
                                        <br>
                                        Más de 2,400 M2 en áreas seguras de aprendizaje.
                                        <br>
                                        <br>
                                        Cultura de Mejoramiento continuo.
                                    </p>
                                </div>
                            </div>

                            <div class="card col-lg-4 col-ss-12 mx-3 bg-secondary-subtle mt-ss-3" style="width: 18rem;">
                                <img src="/Auto-Escuela-Tulua/img/BO.png" class="card-img-top" alt="BO">
                                <div class="card-body">
                                    <h5 class="card-title">Innovacion</h5>
                                    <p class="card-text">
                                        Énfasis en seguridad vial y cultura ciudadana.
                                        <br>
                                        <br>
                                        Parque automotor moderno y en continua renovación.
                                        <br>
                                        <br>
                                        Amplias aulas inteligentes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Botón de WhatsApp -->
    <?php include("../../assets/config/whatsapp.php"); ?>
    <!-- Botón de WhatsApp fin -->

    <?php include("../../assets/config/footer.php"); ?>
    <?php include("../../assets/config/js.php"); ?>

    <script src="/Auto-Escuela-Tulua/assets/javascript/Swiper@9/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 15,
                strech: 0,
                depth: 300,
                modifier: 1,
                slideShadows: true,
            }
        })
    </script>

</body>

</html>