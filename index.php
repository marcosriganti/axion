<?php
if (!empty($_POST['nombre'])) {
    require 'mailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
    // $mail->SMTPSecure = 'ssl';

    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;

    $mail->Port = 587;
    $mail->Username   = "divertiteconaxion@gmail.com"; // SMTP account username
    $mail->Password   = "PROMORASTI";        // SMTP account password
    $mail->SetFrom("divertiteconaxion@gmail.com", "PROMORASTI");
    $mail->FromName = 'Divertite con Axion';
    $mail->addAddress('divertiteconaxion@gmail.com', 'Divertite con Axion');     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje Divertite con Axion';
    $txt = '';
    foreach ($_POST as $key => $value) {
        $txt .= '<b>' . $key . '</b>:' . $value . ' <br>';
    }
    $mail->Body    = $txt;
    if (empty($_POST['terminos'])) {
        $enviado = false;
    } else {
        if (!$mail->send()) {
            $enviado = false;
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $enviado = true;
        }
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>DIVERTITE CON AXION</title>
    <meta name="description" content="AXION energy se unió con Rasti y Red Activos para crear una colección exclusiva de juguetes y brindar trabajo inclusivo. Conocé más.">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="DIVERTITE CON AXION">
    <meta itemprop="description" content="AXION energy se unió con Rasti y Red Activos para crear una colección exclusiva de juguetes y brindar trabajo inclusivo. Conocé más.">
    <meta name="twitter:image" content="images/imagen_wa.jpg">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://lausina.org/divertiteconaxion">
    <meta property="og:type" content="website">
    <meta property="og:title" content="DIVERTITE CON AXION">
    <meta property="og:description" content="AXION energy se unió con Rasti y Red Activos para crear una colección exclusiva de juguetes y brindar trabajo inclusivo. Conocé más.">
    <meta name="twitter:image" content="images/imagen_wa.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DIVERTITE CON AXION">
    <meta name="twitter:description" content="AXION energy se unió con Rasti y Red Activos para crear una colección exclusiva de juguetes y brindar trabajo inclusivo. Conocé más.">
    <meta name="twitter:image" content="images/imagen_wa.jpg">

    <link rel="icon" type="image/png" href="images/axion_icon.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M4M9NJ');
    </script>
    <!-- End Google Tag Manager -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js" crossorigin="anonymous" async></script>
    <!-- <script src="js/main.js"></script> -->
    <link rel="stylesheet" href="dist/main.css">
    <style>
        .map {
            width: 100%;
            height: 400px;
        }
    </style>
    <script src="dist/main.js"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4M9NJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav class="navbar navbar-light navbar-expand-lg bg-success p-5">
        <div class="container">
            <div class="logo-container">
                <a class="navbar-brand" href="http://rasti.com.ar/" target="_blank"><img src="images/rasti-blue.png" alt="Rasti"></a>
                <a class="navbar-brand" href="https://www.axionenergy.com/ar/" target="_blank"><img src="images/axion-blue.png" alt="Axion"></a>
                <a class="navbar-brand" href="http://redactivos.org.ar/" target="_blank"><img src="images/redactivos-blue.png" alt="redACTIVOS"></a>

            </div>
            <div class="text-right">
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills text-right">
                    <li class="nav-item">
                        <a class="nav-link" href="#inclusion">Inclusión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#coleccion">Colección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#puntos">Puntos de Venta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div id="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url('images/slider-1.png'); max-height: 620px">
                    <div class="container text-center p-5">
                        <div class="h1 text-secondary">
                            Divertite con axion
                        </div>
                        <div class="circle bg-primary text-white">
                            Cargando 30 litros
                            de combustible
                            o comprando 4 litros
                            de lubricante
                            más un mínimo de
                            $299 te llevás
                            un juguete Rasti
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container text-center p-5">
                        <div class="h1 text-secondary">
                            Coleccioná
                        </div>
                        <a href="#"><img src="images/slider-2.png" /></a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container text-center p-5">
                        <div class="h1 text-secondary">
                            Coleccioná
                        </div>
                        <img src="images/slider-3.png" />
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container text-center p-5">
                        <div class="h1 text-secondary">
                            Coleccioná
                        </div>
                        <img src="images/slider-4.png" />
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container text-center p-5">
                        <div class="h1 text-secondary">
                            Coleccioná
                        </div>
                        <img src="images/slider-5.png" />
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>

        </div>
    </div>
    <section class="bg-white" id="inclusion">

        <div class=" pt-5 pb-5 text-center">
            <h1 class="text-primary">Poné en marcha la inclusión</h1>
            <div class="video mt-4 mb-4">
                <div class="container">
                    <div class="row justify-content-center align-self-center">
                        <div class="col-md-9">

                            <style>
                                .embed-container {
                                    position: relative;
                                    padding-bottom: 56.25%;
                                    height: 0;
                                    overflow: hidden;
                                    max-width: 100%;
                                }

                                .embed-container iframe,
                                .embed-container object,
                                .embed-container embed {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                }
                            </style>
                            <div class='embed-container'><iframe src='https://www.youtube.com/embed/upVaTjRnibU' frameborder='0' allowfullscreen></iframe></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="bg-primary" id="companies">

        <div class="container p-5">

            <div class="row pt-1 pb-5 text-center">
                <div class="col-md-4">
                    <h3 class="mb-5 mt-5"><a href="http://rasti.com.ar/" target="_blank"><img src="images/rasti-white.png"></a></h3>
                    <p class="text-white">
                        <strong>Pyme familiar que produce juguetes didácticos que estimulan el desarrollo de
                            niños.</strong> Fabrica las piezas y muñecos
                    </p>
                </div>
                <div class="col-md-4">
                    <h3 class="mb-5 mt-5"><a href="https://www.axionenergy.com/ar/" target="_blank"><img src="images/axion-white.png"></a></h3>
                    <p class="text-white">
                        <strong>La principal compañía privada de energía de la región</strong>, propone una alianza para
                        articular, comercializar y comunicar
                        este producto inclusivo.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3 class="mb-5 mt-5"><a href="http://redactivos.org.ar/" target="_blank"><img src="images/redactivos-white.png"></a></h3>
                    <p class="text-white"><strong>Un puente entre los emprendimientos productivos de personas con
                            discapacidad y las empresas.</strong> Produce el packaging y
                        ensambla las partes del kit.
                    </p>
                </div>

            </div>
        </div>

    </section>

    <section class="bg-secondary" id="coleccion">

        <div class="container pt-5 pb-5 text-center">
            <h1 class="text-white">Completá la Colección</h1>
            <div class="row mt-5 pt-5 ">
                <div class="col-md-4 mb-5">
                    <h2 class="mb-4"><img alt="Estacion de Servicio Axion" src="images/axion1.png"></h2>
                    <p><a href="http://rasti.com.ar/axion1" target="_blank" class="btn btn-primary">Instructivo</a></p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <h2 class="mb-4"><img alt="Camion Cisterna" src="images/axion2.png"></h2>
                            <p><a href="http://rasti.com.ar/axion2" target="_blank" class="btn btn-primary">Instructivo</a></p>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h2 class="mb-4"><img alt="Lubricentro Castrol" src="images/axion3.png"></h2>
                            <p><a href="http://rasti.com.ar/axion3" target="_blank" class="btn btn-primary">Instructivo</a></p>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h2 class="mb-4"><img alt="Vehiculo" src="images/axion4.png"></h2>
                            <p><a href="http://rasti.com.ar/axion4" target="_blank" class="btn btn-primary">Instructivo</a></p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="bg-primary" id="puntos">

        <div class="container p-5 text-center">
            <h1 class="text-white">Consultá las estaciones adheridas</h1>

        </div>
        <div id="map" style="height: 500px; width: 100%"></div>

    </section>

    <section class="bg-white" id="contacto">

        <div class="container p-5 text-center">
            <h1 class="text-primary">¡Quedemos en contacto!</h1>
            <p class="text-secondary m-4"><b>Si tenés alguna consulta sobre la promo o queres seguir en contacto con
                    AXION
                    energy, dejanos tu
                    comentario</b></p>

            <div class="row justify-content-md-center mt-5">
                <div class="col-md-10">
                    <?php
                    if ($enviado) {
                    ?>
                        <h2 class="text-primary">¡Gracias por escribirnos!</h2>
                    <?php
                    } else {
                    ?>
                        <form class="text-left" method="POST" action="" id="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre y apellido*</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" required data-msg="Ingresa tu nombre y apellido">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fecha_nacimiento">Fecha de nacimiento*</label>
                                        <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="DD/MM/AAAA" data-msg="Ingresa tu fecha de nacimiento">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">DNI*</label>
                                        <input type="text" class="form-control" id="dni" name="dni" placeholder="" required data-msg="Ingresa tu DNI">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehiculo">Tipo de vehículo*</label>
                                        <select class="custom-select" id="vehiculo" name="vehiculo" required data-msg="Ingresa el tipo de vehiculo">
                                            <option selected>Seleccione su vehículo</option>
                                            <option value="Auto">Auto</option>
                                            <option value="Moto">Moto</option>
                                            <option value="Camioneta">Camioneta</option>
                                            <option value="Camión">Camión</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email*</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="" required data-msg="Ingresa tu email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mensaje">Mensaje</label>
                                        <textarea name="mensaje" class="form-control" id="mensaje" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="terminos" id="terminos" value="1" required data-msg="Acepta los términos y condiciones ">
                                        <label class="form-check-label" for="terminos">
                                            <a href="#" class="text-primary" data-toggle="modal" data-target="#bases">Acepto
                                                términos y condiciones</a>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>
                        </form><?php
                            }
                                ?>
                </div>
            </div>
        </div>

    </section>

    <footer class="bg-secondary">
        <div class="container pt-5 pb-3 text-center">
            <div class="d-flex justify-content-between align-self-center">

                <div class="logo-container">
                    <a class="navbar-brand pr-2" href="http://rasti.com.ar/" target="_blank"><img src="images/rasti-white.png" alt="Rasti"></a>
                    <a class="navbar-brand pr-2" href="https://www.axionenergy.com/ar/" target="_blank"><img src="images/axion-white.png" alt="Axion"></a>
                    <a class="navbar-brand" href="http://redactivos.org.ar/" target="_blank"><img src="images/redactivos-white.png" alt="redACTIVOS"></a>
                </div>
                <ul class="nav nav-pills pt-2">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#inclusion">Inclusión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#coleccion">Colección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#puntos">Puntos de Venta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link text-white btn btn-primary btn-small" href="#" data-toggle="modal" data-target="#bases">Ver Bases y Condiciones</a>
                    </li>
                </ul>
            </div>
            <p class="text-center text-white pt-3">
                <small>Diseñado por <a href="http://somosgota.com/" class="text-white" target="_blank">GOTA</a></small> </p>
        </div>
    </footer>


    <div class="modal fade" tabindex="-1" role="dialog" id="bases">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary">Bases y condiciones de la promoción “Divertite con AXION”</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li class="mb-2">
                            <b>Del Organizador:</b> PAN AMERICAN ENERGY, S.L., SUCURSAL ARGENTINA, con CUIT No: 30-
                            69554247-6 y domicilio en la calle Av. Leandro N. Alem 1180, piso 11, Ciudad Autónoma de
                            Buenos Aires (en adelante, el "ORGANIZADOR"), organiza la promoción denominada
                            “Divertite con AXION” – SEGUNDA ETAPA (en adelante, la “PROMOCIÓN”). La PROMOCION
                            se regirá por las presentes Bases y Condiciones (en adelante las “BASES”),
                        </li>

                        <li class="mb-2">
                            <b>Ámbito geográfico:</b> geográfico: La Promoción será válida en toda la República Argentina (en adelante,
                            el “ÁMBITO GEOGRÁFICO”) en las Estaciones de Servicio AXION detalladas en el Anexo I (en
                            adelante “ESTACIONES ADHERIDAS”).
                        </li>

                        <li class="mb-2"><b>Plazo de vigencia:</b> La vigencia de la PROMOCIÓN es desde el 7 de septiembre de 2020 a las
                            00.00 hs. al 30 de septiembre de 2020 a las 23.59 hs. inclusive o hasta agotar el stock de los
                            premios de 50.000 (cincuenta mil) unidades, repartidas en total entre los distintos modelos
                            de juguete y cada una de las ESTACIONES ADHERIDAS especificadas en el ANEXO I, lo que
                            ocurra primero (en adelante, el “Plazo de Vigencia”).</li>

                        <li class="mb-2"><b>Participantes:</b> Podrán participar de la PROMOCION las personas humanas, legalmente capaces y mayores de 18 años que tengan su domicilio en la República Argentina, y que cumplan con todos los requisitos de participación detallados en las presentes BASES (en adelante, los “PARTICIPANTES”) Quedan excluidas de la presente PROMOCION las compras de combustible efectuadas mediante el uso de tarjeta AXION CARD, AXION CARD EXPRESS y Ticket Card.</li>

                        <li class="mb-2"><b>Productos Participantes:</b> Los productos que participan de esta PROMOCIÓN son los combustibles: Naftas QUANTIUM y Nafta Super, QUANTUM Diesel, Diesel 500, los Lubricantes Castrol que se comercialicen en las estaciones de servicio adheridas, el GNC y las compras en Spot! superiores a $300 no tomándose como parte de la compra el valor de los cigarrillos (en adelante, los “PRODUCTOS PARTICIPANTES”). Queda excluido de la PROMOCIÓN los cigarrillos.</li>

                        <li class="mb-2"><b>Premios:</b> El programa total de premios de la presente PROMOCIÓN está compuesto por 50.000 (cincuenta mil) juguetes marca RASTI confeccionados específicamente para esta acción (en adelante, los “PREMIOS” e individualmente cada uno de ellos el “PREMIO”) - Asimismo, y atento a que se trata de una segunda etapa de la promoción, no se asegura que cada una de las ESTACIONES ADHERIDAS tenga stock de todos los modelos de cada PREMIO determinado en el ANEXO I de la primera etapa.</li>

                        <li class="mb-2">
                            Todos aquellos PARTICIPANTES que hubieren comprado alguno de los PRODUCTOS PARCTICIPANTES en alguna de las ESTACIONES ADHERIDAS durante el PLAZO DE VIGENCIA y abonare las siguientes sumas de dineros:

                            <ul>
                                <li>$299 (pesos doscientos noventa y nueve) accederá a un Juguete Rasti para armar un Auto o un Camión;</li>
                                <li>$449 (pesos cuatrocientos cuarenta y nueve) un Juguete Rasti para armar un Lubricentro Castrol o</li>
                                <li>$669 (pesos seiscientos sesenta y nueve) un Juguete Rasti para armar una Estación de Servicio Axion.</li>
                            </ul>
                            El PARTICIPANTE sólo podrá acceder a 1 (uno) PREMIO por compra. Las compras de PRODUCTOS PARTICIPANTES por cantidades inferiores a las determinadas en el presente punto no otorgarán derecho a participar de la PROMOCIÓN.
                            punto no otorgarán derecho a participar de la PROMOCIÓN.
                            El PREMIO deberá ser reclamado por el PARTICIPANTE al momento de la realización de la compra en la ESTACIÓN ADHERIDA.
                            En esta PROMOCIÓN no interviene el azar.
                        </li>
                        <li class="mb-2"><b>Sin Obligación de Compra:</b>

                            <ol>
                                <li> La participación en esta PROMOCIÓN no implica obligación de compra alguna y no requiere la adquisición ni contratación de bienes y/o servicios comercializados por el ORGANIZADOR. Las personas interesadas en participar en la PROMOCION deberán enviar una CARTA SIMPLE a la siguiente casilla postal: Apartado Especial N°26, Sucursal Centro de Correo Argentino, Pte. Perón 321 CPA C1038AAF, Ciudad Autónoma de Bs. As., indicando al frente – “Promoción Divertite con AXION” – Franqueo a pagar por el destinatario” y en el interior consignar: i) nombre y apellido completo; ii) número de Documento Nacional de Identidad; iii) fecha de nacimiento; iv) domicilio postal (indicando calle, número, piso, departamento, localidad, y en su caso, provincia) v) teléfono y vi) dirección de correo electrónico (en adelante “correo electrónico”); en adelante “DATOS PERSONALES”, junto con un dibujo de los logos de Castrol y de Axion; ello los habilitará a participar de la PROMOCIÓN. El ORGANIZADOR enviará a quienes participen de esta forma por correo postal (Carta certificada con acuse de recibo) un cupón numerado para que se acerquen a una de las ESTACIONES ADHERIDAS, y mediante la presentación del mismo y abonando las sumas indicadas en el punto 7, podrá acceder al PREMIO. El envío del mencionado cupón no implicará reserva de PREMIO alguno y deberá ser presentado para su canje durante el PLAZO DE VIGENCIA en las ESTACIONES ADHERIDAS, pudiendo acceder a los PREMIOS siempre que haya stock de los mismos.
                                </li>
                                <li>A quienes participen por este medio le serán aplicables, las presentes BASES</li>
                            </ol>

                        </li>
                        <li class="mb-2"><b>Comunicación:</b> La PROMOCION se difundirá a través de medios de comunicación masiva (diarios, medios gráficos, sitio web, redes sociales y otros medios digitales, radio y televisión) y podrá consultarse las BASES en las ESTACIONES de SERVICIO ADHERIDAS y en la página web http://lausina.org/divertiteconaxion (en adelante, el “SITIO WEB”).</li>

                        <li class="mb-2"><b>Gastos:</b> Todo gasto en que pueda incurrir el PARTICIPANTE para concurrir a las ESTACIONES ADHERIDAS para participar de la PROMOCIÓN y, en su caso, obtener el PREMIO será a su exclusivo cargo. Los PREMIOS son intransferibles y no se podrán canjear ni sustituir por dinero ni por otros bienes ni servicios distintos al indicado en estas BASES, y no incluyen ninguna otra prestación o servicio no enumerados en estas BASES. Los PARTICIPANTES eximen expresamente al ORGANIZADOR de toda responsabilidad por cualquier daño o perjuicio sufrido por ellos o terceros, proveniente de caso fortuito o fuerza mayor, hechos de terceros y/o cualquier responsabilidad que no le resultare imputable en forma directa al ORGANIZADOR, en ocasión de participar en la PROMOCIÓN o de utilizar los PREMIOS. Una vez entregados los PREMIOS en las condiciones establecidas en estas BASES, el ORGANIZADOR queda liberado de toda responsabilidad por los mismos, no otorgando garantías de ningún tipo respecto de los PREMIOS, debiendo dirigirse cualquier reclamo al responsable de la garantía que otorga el fabricante de los PREMIOS.
                        </li>
                        <li class="mb-2"><b>Aceptación de las Bases:</b> La participación en la PROMOCIÓN implica la total aceptación de estas BASES, así como de las decisiones que adopte el ORGANIZADOR conforme a derecho sobre cualquier cuestión no prevista en las mismas. Toda conducta abusiva, fraudulenta o contraria a la buena fe, autorizará al ORGANIZADOR a descalificar de la PROMOCIÓN al PARTICIPANTE incurso en alguna de dichas conductas.</li>

                        <li class="mb-2"><b>Modificación o Suspensión de la Promoción: </b> El ORGANIZADOR podrá modificar total o parcialmente las BASES, a su exclusivo criterio, e incluso suspender la PROMOCIÓN, temporaria o definitivamente, cuando se presenten situaciones no imputables al mismo o no previstas en las BASES o que constituyan caso fortuito o fuerza mayor que lo justifiquen.</li>

                        <li class="mb-2"><b>Datos Personales:</b> El ORGANIZADOR garantiza la confidencialidad en el tratamiento de los Datos Personales, así como la implementación de las medidas de índole técnica y organizativa que razonablemente tiendan a garantizar la seguridad de dichos datos en cumplimiento de las disposiciones aplicables de la normativa vigente en la materia. El titular de los Datos Personales tiene la facultad de ejercer el derecho de acceso a los mismos en forma gratuita a intervalos no inferiores a seis meses, salvo que se acredite un interés legítimo al efecto conforme lo establecido en el artículo 14, inciso 3, de la Ley No 25.326. A tal efecto los PARTICIPANTES o titulares de Datos Personales recibirán en cada comunicación proveniente de la Empresa la opción mediante un link de solicitar el acceso a sus datos y, en su caso, requerir la actualización, modificación o eliminación de los datos que considere erróneamente registrados. Los PARTICIPANTES, por el solo hecho de participar de la PROMOCIÓN y como condición para ello, otorgan el consentimiento previsto por los arts. 5 y 11 de la ley 25.326 y autorizan al ORGANIZADOR y/o a quien este designe, a difundir sus datos personales e imágenes, con fines comerciales, en los medios de comunicación y formas que el ORGANIZADOR disponga, sin que esto otorgue derecho a la percepción de suma alguna, durante el PLAZO DE VIGENCIA de la PROMOCIÓN y hasta los tres (3) años de su finalización. La solicitud del PARTICIPANTE de retirar o bloquear, total o parcialmente, sus Datos Personales, durante el PLAZO DE VIGENCIA producirá la exclusión del PARTICIPANTE de la PROMOCIÓN.</li>

                        <li class="mb-2"><b>Ley y jurisdicción aplicable:</b> La interpretación, validez y cumplimiento de estas BASES y de los derechos y deberes emergentes de las mismas, se regirán por las leyes de la República Argentina. Para cualquier controversia originada en la presente PROMOCIÓN regirá la jurisdicción de los Tribunales Ordinarios de la Ciudad Autónoma de Buenos Aires, a la que los PARTICIPANTES aceptan someterse voluntariamente renunciando a cualquier otro fuero o jurisdicción que pudiera corresponder.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#form").validate();
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCD1HXrshWd2QAvNCtChzpc2DNQIaOSGjI&callback=initMap" type="text/javascript"></script> -->
</body>

</html>