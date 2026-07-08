<?php
ob_start();

$pagina = $_GET['pagina'] ?? 'inicio';
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>EnglishPro</title>

    <link rel="stylesheet" href="css/normalice.css">

    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

<header class="site-header">

    <div class="container header__bar">

        <a class="logo" href="index.php">

            English<span>Pro</span>

        </a>

        <button class="nav-toggle"
                id="navToggle"
                aria-expanded="false">

            <span></span>
            <span></span>
            <span></span>

        </button>

        <nav class="nav" id="navMenu">

            <a class="nav__link"
               href="index.php">

                Inicio

            </a>

            <a class="nav__link"
               href="index.php?pagina=cursos">

                Cursos

            </a>

            <a class="nav__link"
               href="index.php?pagina=estudiantes">

                Estudiantes

            </a>

            <a class="nav__link"
               href="index.php?pagina=inscripciones">

                Inscripciones

            </a>

            <a class="nav__link"
               href="index.php?pagina=precios">

                Precios

            </a>

            <a class="nav__link"
               href="index.php?pagina=info">

                Información

            </a>

            <button class="theme-btn"
                    id="themeBtn">

                🌙

            </button>

        </nav>

    </div>

</header>

<main>

<?php

switch($pagina){

    case "inicio":

    echo '

<section class="hero">

    <div class="container hero__grid">

        <article class="hero__content">

            <span class="badge">Panel Administrativo</span>

            <h1>
                Sistema de Gestión Académica EnglishPro
            </h1>

            <p>
                Plataforma web desarrollada en PHP, MySQL y arquitectura MVC para
                administrar cursos, estudiantes e inscripciones de una academia de inglés.
            </p>

            <div class="hero__actions">

                <a class="btn btn--primary"
                   href="index.php?pagina=cursos">
                    Gestionar Cursos
                </a>

                <a class="btn btn--ghost"
                   href="index.php?pagina=estudiantes">
                    Gestionar Estudiantes
                </a>

                <a class="btn btn--ghost"
                   href="index.php?pagina=inscripciones">
                    Ver Inscripciones
                </a>

            </div>

        </article>


        <article class="hero__card">

            <h2>Funciones principales</h2>

            <ul class="features">
                <li>Registrar, editar, buscar y eliminar cursos.</li>
                <li>Administrar información de estudiantes.</li>
                <li>Relacionar estudiantes con cursos mediante inscripciones.</li>
                <li>Gestionar datos almacenados en MySQL usando MVC.</li>
            </ul>

        </article>

    </div>

</section>


<section class="section section--alt">

    <div class="container">

        <div class="section__head">

            <span class="section__tag">Módulos del sistema</span>

            <h2>Accesos rápidos de administración</h2>

        </div>

        <div class="cards-grid">

            <article class="info-card">

                <h3>Cursos</h3>

                <p>
                    Administra los cursos disponibles de EnglishPro, incluyendo
                    nombre, nivel, precio, duración y descripción.
                </p>

                <br>

                <a class="btn btn--primary"
                   href="index.php?pagina=cursos">
                    Abrir Cursos
                </a>

            </article>


            <article class="info-card">

                <h3>Estudiantes</h3>

                <p>
                    Gestiona los datos de los estudiantes registrados en el sistema,
                    como nombre, apellido, correo y teléfono.
                </p>

                <br>

                <a class="btn btn--primary"
                   href="index.php?pagina=estudiantes">
                    Abrir Estudiantes
                </a>

            </article>


            <article class="info-card">

                <h3>Inscripciones</h3>

                <p>
                    Registra la relación entre estudiantes y cursos, demostrando
                    el uso de claves foráneas y consultas relacionadas.
                </p>

                <br>

                <a class="btn btn--primary"
                   href="index.php?pagina=inscripciones">
                    Abrir Inscripciones
                </a>

            </article>

        </div>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="section__head">

            <span class="section__tag">Galería</span>

            <h2>Panel visual del sistema</h2>

        </div>


        <div class="slideshow" aria-label="Galería de imágenes">

            <button class="slideshow__btn"
                    id="prevSlide"
                    aria-label="Imagen anterior">
                ‹
            </button>


            <div class="slideshow__viewport">

                <img class="slideshow__img active"
                     src="img/Imagen1.jpg"
                     alt="Imagen del sistema EnglishPro">

                <img class="slideshow__img"
                     src="img/Imagen2.jpg"
                     alt="Imagen de cursos EnglishPro">

                <img class="slideshow__img"
                     src="img/Imagen3.jpg"
                     alt="Imagen de plataforma EnglishPro">

            </div>


            <button class="slideshow__btn"
                    id="nextSlide"
                    aria-label="Imagen siguiente">
                ›
            </button>

        </div>


        <div class="dots" aria-label="Selector de imagen">

            <button class="dot active"
                    data-slide="0"
                    aria-label="Mostrar imagen 1">
            </button>

            <button class="dot"
                    data-slide="1"
                    aria-label="Mostrar imagen 2">
            </button>

            <button class="dot"
                    data-slide="2"
                    aria-label="Mostrar imagen 3">
            </button>

        </div>

    </div>

</section>


<section class="section section--alt">

    <div class="container two-col">

        <article class="content-box">

            <h2>Arquitectura utilizada</h2>

            <ul class="list">
                <li>Modelo Vista Controlador.</li>
                <li>Conexión a base de datos con PDO.</li>
                <li>CRUD completo para las entidades principales.</li>
                <li>Relación entre cursos y estudiantes mediante inscripciones.</li>
            </ul>

        </article>


        <article class="content-box">

            <h2>Objetivo del sistema</h2>

            <p>
                Facilitar la administración académica de EnglishPro mediante una
                aplicación web organizada, reutilizando la interfaz del primer parcial
                e incorporando funcionalidades dinámicas con PHP y MySQL.
            </p>

        </article>

    </div>

</section>

';

break;


    case "cursos":

        require_once "../app/controllers/CursoController.php";

        $controlador = new CursoController();

        $accion = $_GET['accion'] ?? 'listar';

        switch($accion){

            case "agregar":

                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $controlador->guardar(
                        $_POST['nombre'],
                        $_POST['nivel'],
                        $_POST['precio'],
                        $_POST['duracion'],
                        $_POST['descripcion']
                    );

                    header("Location:index.php?pagina=cursos");
                    exit();
                }

                require "../app/views/cursos/agregar.php";
            break;


            case "editar":

                $id = $_GET['id'];

                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $controlador->actualizar(
                        $_POST['id'],
                        $_POST['nombre'],
                        $_POST['nivel'],
                        $_POST['precio'],
                        $_POST['duracion'],
                        $_POST['descripcion']
                    );

                    header("Location:index.php?pagina=cursos");
                    exit();
                }

                $curso = $controlador->obtenerCurso($id);

                require "../app/views/cursos/editar.php";
            break;


            case "eliminar":

                $controlador->eliminar($_GET['id']);

                header("Location:index.php?pagina=cursos&msg=eliminado");
                exit();
            break;


            default:

                if(isset($_GET['buscar']) && !empty(trim($_GET['buscar']))){
                    $cursos = $controlador->buscar($_GET['buscar']);
                }else{
                    $cursos = $controlador->listar();
                }

                require "../app/views/cursos/listar.php";
            break;
        }

    break;


    case "estudiantes":

        require_once "../app/controllers/EstudianteController.php";

        $controlador = new EstudianteController();

        $accion = $_GET['accion'] ?? 'listar';

        switch($accion){

            case "agregar":

                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $controlador->guardar(
                        $_POST['nombre'],
                        $_POST['apellido'],
                        $_POST['correo'],
                        $_POST['telefono']
                    );

                    header("Location:index.php?pagina=estudiantes");
                    exit();
                }

                require "../app/views/estudiantes/agregar.php";
            break;


            case "editar":

                $id = $_GET['id'];

                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $controlador->actualizar(
                        $_POST['id'],
                        $_POST['nombre'],
                        $_POST['apellido'],
                        $_POST['correo'],
                        $_POST['telefono']
                    );

                    header("Location:index.php?pagina=estudiantes");
                    exit();
                }

                $estudiante = $controlador->obtenerEstudiante($id);

                require "../app/views/estudiantes/editar.php";
            break;


            case "eliminar":

                $controlador->eliminar($_GET['id']);

                header("Location:index.php?pagina=estudiantes&msg=eliminado");
                exit();
            break;


            default:

                if(isset($_GET['buscar']) && !empty(trim($_GET['buscar']))){
                    $estudiantes = $controlador->buscar($_GET['buscar']);
                }else{
                    $estudiantes = $controlador->listar();
                }

                require "../app/views/estudiantes/listar.php";
            break;
        }

    break;


    case "inscripciones":

        require_once "../app/controllers/InscripcionController.php";

        $controlador = new InscripcionController();

        $accion = $_GET['accion'] ?? 'listar';

        switch($accion){

            case "agregar":

                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $controlador->guardar(
                        $_POST['id_estudiante'],
                        $_POST['id_curso']
                    );

                    header("Location:index.php?pagina=inscripciones");
                    exit();
                }

                $estudiantes = $controlador->obtenerEstudiantes();
                $cursos = $controlador->obtenerCursos();

                require "../app/views/inscripciones/agregar.php";
            break;


            case "editar":

                $id = $_GET['id'];

                if($_SERVER['REQUEST_METHOD'] == 'POST'){

                    $controlador->actualizar(
                        $_POST['id'],
                        $_POST['id_estudiante'],
                        $_POST['id_curso']
                    );

                    header("Location:index.php?pagina=inscripciones");
                    exit();
                }

                $inscripcion = $controlador->obtenerInscripcion($id);
                $estudiantes = $controlador->obtenerEstudiantes();
                $cursos = $controlador->obtenerCursos();

                require "../app/views/inscripciones/editar.php";
            break;


            case "eliminar":

                $controlador->eliminar($_GET['id']);

                header("Location:index.php?pagina=inscripciones&msg=eliminado");
                exit();
            break;


            default:

                $inscripciones = $controlador->listar();

                require "../app/views/inscripciones/listar.php";
            break;
        }

    break;


    case "precios":

    echo '

    <section class="page-hero">
        <div class="container">
            <span class="badge">Planes y guías</span>
            <h1>Precios claros para cada tipo de estudiante</h1>
            <p>
                Selecciona el curso que mejor se ajuste a tu tiempo, objetivo y nivel de inglés.
                Cada plan ha sido diseñado para acompañar tu proceso de aprendizaje de manera progresiva.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container pricing-grid">

            <article class="pricing-card">
                <h2>Básico</h2>

                <p class="price">
                    $25 <span>/ mes</span>
                </p>

                <p>
                    Ideal para estudiantes que inician desde cero y necesitan construir
                    una base sólida en inglés.
                </p>

                <ul class="list">
                    <li>Gramática inicial</li>
                    <li>Vocabulario esencial</li>
                    <li>Ejercicios interactivos</li>
                    <li>1 clase grupal semanal</li>
                    <li>Guías digitales de apoyo</li>
                </ul>

                <a class="btn btn--primary"
                   href="index.php?pagina=inscripciones&accion=agregar">
                    Elegir plan
                </a>
            </article>

            <article class="pricing-card pricing-card--featured">
                <h2>Intermedio</h2>

                <p class="price">
                    $40 <span>/ mes</span>
                </p>

                <p>
                    Recomendado para estudiantes que ya conocen lo básico y desean
                    mejorar comprensión, conversación y confianza.
                </p>

                <ul class="list">
                    <li>Conversación guiada</li>
                    <li>Lectura y comprensión</li>
                    <li>Material descargable</li>
                    <li>2 clases grupales semanales</li>
                    <li>Prácticas de pronunciación</li>
                </ul>

                <a class="btn btn--primary"
                   href="index.php?pagina=inscripciones&accion=agregar">
                    Elegir plan
                </a>
            </article>

            <article class="pricing-card">
                <h2>Avanzado</h2>

                <p class="price">
                    $60 <span>/ mes</span>
                </p>

                <p>
                    Pensado para estudiantes que buscan dominar el idioma en contextos
                    académicos, profesionales y comunicativos.
                </p>

                <ul class="list">
                    <li>Inglés profesional</li>
                    <li>Entrevistas y presentaciones</li>
                    <li>Corrección personalizada</li>
                    <li>Sesiones de speaking</li>
                    <li>Preparación para situaciones reales</li>
                </ul>

                <a class="btn btn--primary"
                   href="index.php?pagina=inscripciones&accion=agregar">
                    Elegir plan
                </a>
            </article>

        </div>
    </section>

    <section class="section section--alt">
        <div class="container">

            <div class="section__head">
                <span class="section__tag">Guías</span>
                <h2>Recomendaciones para avanzar mejor</h2>
            </div>

            <div class="accordion">

                <article class="accordion__item">
                    <button class="accordion__trigger" type="button">
                        ¿Cómo elegir tu nivel?
                    </button>
                    <div class="accordion__content">
                        <p>
                            Si apenas conoces palabras básicas, inicia con Básico.
                            Si puedes formar frases sencillas, elige Intermedio.
                            Si ya mantienes conversaciones, Avanzado es el indicado.
                        </p>
                    </div>
                </article>

                <article class="accordion__item">
                    <button class="accordion__trigger" type="button">
                        ¿Cuánto tiempo debo practicar?
                    </button>
                    <div class="accordion__content">
                        <p>
                            Lo ideal es practicar entre 20 y 30 minutos diarios,
                            reforzando vocabulario, pronunciación y comprensión auditiva.
                        </p>
                    </div>
                </article>

                <article class="accordion__item">
                    <button class="accordion__trigger" type="button">
                        ¿Recibo certificado?
                    </button>
                    <div class="accordion__content">
                        <p>
                            Sí. Cada estudiante recibe un certificado digital al finalizar
                            el nivel correspondiente y cumplir con las actividades propuestas.
                        </p>
                    </div>
                </article>

                <article class="accordion__item">
                    <button class="accordion__trigger" type="button">
                        ¿Los cursos incluyen material?
                    </button>
                    <div class="accordion__content">
                        <p>
                            Sí. Dependiendo del plan, cada curso incluye guías, ejercicios,
                            material de apoyo y recursos complementarios para fortalecer el aprendizaje.
                        </p>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="section__head">
                <span class="section__tag">Beneficios</span>
                <h2>¿Qué incluye estudiar con EnglishPro?</h2>
            </div>

            <div class="cards-grid">

                <article class="info-card">
                    <h3>Clases prácticas</h3>
                    <p>
                        Actividades enfocadas en el uso real del idioma, con ejercicios
                        de lectura, escritura, escucha y conversación.
                    </p>
                </article>

                <article class="info-card">
                    <h3>Material de apoyo</h3>
                    <p>
                        Recursos digitales y guías complementarias que refuerzan lo aprendido
                        en cada clase o nivel.
                    </p>
                </article>

                <article class="info-card">
                    <h3>Seguimiento académico</h3>
                    <p>
                        Acompañamiento en el progreso del estudiante para mejorar su desempeño
                        y constancia en el aprendizaje.
                    </p>
                </article>

            </div>

        </div>
    </section>

    <section class="section section--alt">
        <div class="container two-col">

            <article class="content-box">
                <h2>Métodos de pago</h2>
                <ul class="list">
                    <li>Transferencia bancaria</li>
                    <li>Pago en efectivo</li>
                    <li>Depósito bancario</li>
                    <li>Pagos mensuales según el plan seleccionado</li>
                </ul>
            </article>

            <article class="content-box">
                <h2>Políticas generales</h2>
                <p>
                    Los valores corresponden a mensualidades por nivel. El acceso al curso
                    depende de la inscripción activa del estudiante. Los contenidos y actividades
                    pueden variar de acuerdo con el nivel y modalidad del curso.
                </p>
            </article>

        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="content-box">
                <h2>Elige el plan que mejor se adapte a ti</h2>
                <p>
                    EnglishPro ofrece alternativas accesibles y progresivas para estudiantes
                    de distintos niveles. Puedes comenzar desde lo básico y avanzar de forma
                    continua hasta desarrollar un dominio más sólido del idioma.
                </p>

                <div class="hero__actions">
                    <a class="btn btn--primary"
                       href="index.php?pagina=inscripciones&accion=agregar">
                        Inscribirme ahora
                    </a>

                    <a class="btn btn--ghost"
                       href="index.php?pagina=info">
                        Ver más información
                    </a>
                </div>
            </div>
        </div>
    </section>

    ';

break;


       case "info":

    echo '

    <section class="page-hero">
        <div class="container">
            <span class="badge">Información del proyecto</span>
            <h1>EnglishPro como solución educativa y administrativa</h1>
            <p>
                EnglishPro es una aplicación web desarrollada para facilitar la gestión de cursos
                de inglés, estudiantes e inscripciones, ofreciendo una alternativa organizada,
                accesible y moderna para academias o proyectos educativos.
            </p>
        </div>
    </section>


    <section class="section">
        <div class="container two-col">

            <article class="content-box">
                <h2>Problemática</h2>

                <p>
                    Muchas personas desean aprender inglés para mejorar sus oportunidades académicas,
                    laborales y personales. Sin embargo, en instituciones pequeñas o emprendimientos
                    educativos, la administración de cursos, estudiantes e inscripciones suele realizarse
                    de forma manual o desorganizada.
                </p>

                <br>

                <p>
                    Esto puede provocar pérdida de información, registros duplicados, dificultad para
                    consultar estudiantes inscritos y poca claridad sobre qué cursos están disponibles.
                    Además, cuando no existe una plataforma centralizada, el seguimiento académico se vuelve
                    más lento y menos eficiente.
                </p>
            </article>


            <article class="content-box">
                <h2>Solución propuesta</h2>

                <p>
                    EnglishPro propone un sistema web que centraliza la información académica en una base
                    de datos MySQL. A través de una interfaz sencilla, el usuario puede registrar cursos,
                    administrar estudiantes y controlar las inscripciones entre ambos.
                </p>

                <br>

                <p>
                    De esta manera, la aplicación permite organizar mejor la información, reducir errores
                    manuales y acceder al sistema desde un navegador web, facilitando la gestión educativa.
                </p>
            </article>

        </div>
    </section>


    <section class="section section--alt">
        <div class="container">

            <div class="section__head">
                <span class="section__tag">Objetivo</span>
                <h2>¿Qué busca resolver EnglishPro?</h2>
            </div>

            <div class="cards-grid">

                <article class="info-card">
                    <h3>Organización académica</h3>
                    <p>
                        Permite administrar la información de cursos, estudiantes e inscripciones
                        desde un solo sistema, evitando el uso de registros dispersos o manuales.
                    </p>
                </article>

                <article class="info-card">
                    <h3>Acceso desde navegador</h3>
                    <p>
                        Al estar desplegado en la web, el sistema puede ser consultado desde un navegador,
                        sin depender únicamente de una computadora local.
                    </p>
                </article>

                <article class="info-card">
                    <h3>Control de inscripciones</h3>
                    <p>
                        Relaciona estudiantes con cursos mediante una tabla de inscripciones, permitiendo
                        saber qué estudiante pertenece a cada curso registrado.
                    </p>
                </article>

            </div>

        </div>
    </section>


    <section class="section">
        <div class="container two-col">

            <article class="content-box">
                <h2>¿Por qué cursos de inglés?</h2>

                <p>
                    El inglés es una herramienta importante para el crecimiento académico y profesional.
                    Muchas personas buscan aprenderlo para acceder a mejores oportunidades laborales,
                    comprender contenido internacional, viajar, estudiar o comunicarse con personas de
                    otros países.
                </p>

                <br>

                <p>
                    Por esta razón, EnglishPro se enfoca en ofrecer una estructura de cursos por niveles:
                    Básico, Intermedio y Avanzado, permitiendo que cada estudiante pueda avanzar según
                    sus conocimientos y necesidades.
                </p>
            </article>


            <article class="content-box">
                <h2>Beneficios para los usuarios</h2>

                <ul class="list">
                    <li>Consultar cursos disponibles.</li>
                    <li>Registrar estudiantes de forma organizada.</li>
                    <li>Inscribir estudiantes en cursos específicos.</li>
                    <li>Actualizar información cuando sea necesario.</li>
                    <li>Eliminar registros incorrectos o innecesarios.</li>
                    <li>Acceder al sistema desde una página web.</li>
                </ul>
            </article>

        </div>
    </section>


    <section class="section section--alt">
        <div class="container">

            <div class="section__head">
                <span class="section__tag">Funcionamiento</span>
                <h2>Módulos principales del sistema</h2>
            </div>

            <div class="timeline">

                <article class="timeline__item">
                    <h3>Cursos</h3>
                    <p>
                        Este módulo permite registrar, listar, buscar, editar y eliminar cursos de inglés.
                        Cada curso contiene datos como nombre, nivel, precio, duración y descripción.
                    </p>
                </article>

                <article class="timeline__item">
                    <h3>Estudiantes</h3>
                    <p>
                        Permite administrar la información de los estudiantes registrados en la plataforma,
                        incluyendo nombre, apellido, correo electrónico y teléfono.
                    </p>
                </article>

                <article class="timeline__item">
                    <h3>Inscripciones</h3>
                    <p>
                        Relaciona estudiantes con cursos. Este módulo demuestra el uso de claves foráneas
                        y consultas relacionadas entre tablas de la base de datos.
                    </p>
                </article>

            </div>

        </div>
    </section>


    <section class="section">
        <div class="container two-col">

            <article class="content-box">
                <h2>Estructura general del proyecto</h2>

                <p>
                    El sistema fue desarrollado aplicando el patrón Modelo Vista Controlador. Esta estructura
                    permite separar la lógica del sistema, la conexión con la base de datos y la presentación
                    visual de la aplicación.
                </p>

                <br>

                <ul class="list">
                    <li><strong>Modelo:</strong> gestiona las consultas y operaciones con la base de datos.</li>
                    <li><strong>Vista:</strong> muestra la interfaz que observa el usuario.</li>
                    <li><strong>Controlador:</strong> recibe las acciones y coordina el flujo del sistema.</li>
                </ul>
            </article>


            <article class="content-box">
                <h2>Conexión con la base de datos</h2>

                <p>
                    EnglishPro utiliza una base de datos MySQL para almacenar la información del sistema.
                    La conexión se realiza mediante PDO, lo que permite trabajar de forma más segura y
                    ordenada con las consultas SQL.
                </p>

                <br>

                <p>
                    Para el despliegue web, la base de datos se encuentra alojada en Aiven y la aplicación
                    fue publicada en Render, permitiendo que el sistema sea accesible desde Internet.
                </p>
            </article>

        </div>
    </section>


    <section class="section section--alt">
        <div class="container">

            <div class="content-box">
                <h2>Importancia del sistema</h2>

                <p>
                    EnglishPro no solo funciona como una página informativa sobre cursos de inglés, sino
                    como una aplicación administrativa capaz de gestionar información real. Esto permite
                    demostrar conocimientos de desarrollo web, bases de datos, arquitectura MVC, operaciones
                    CRUD y despliegue en la nube.
                </p>

                <br>

                <p>
                    Gracias a esta solución, una academia o proyecto educativo puede organizar mejor sus
                    procesos internos, reducir errores en el manejo de información y ofrecer una experiencia
                    más moderna tanto para administradores como para estudiantes.
                </p>

                <div class="hero__actions">
                    <a class="btn btn--primary" href="index.php?pagina=cursos">
                        Ver cursos
                    </a>

                    <a class="btn btn--ghost" href="index.php?pagina=inscripciones">
                        Ver inscripciones
                    </a>
                </div>
            </div>

        </div>
    </section>

    ';

break;


    default:

        header("Location:index.php");
        exit();
    break;
}

?>

</main>

<footer class="site-footer">

    <div class="container footer__grid">

        <p>

            © 2026 EnglishPro

        </p>

    </div>

</footer>

<script src="js/scripts.js"></script>

</body>

</html>

<?php ob_end_flush(); ?>