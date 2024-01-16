<?php
require '../vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/script.js"></script>
    <title>Home</title>
</head>

<body>
    <main>
        <article id="menu">
            <div id="menu-header">
                <span><a href="#" onclick="scroll_to_element('.row1', event)">Inicio</a></span>
                <span><a href="#" onclick="scroll_to_element('.row2', event)">Sobre mí</a></span>
                <span><a href="#" onclick="scroll_to_element('.row3', event)">Contacto</a></span>
            </div>
        </article>
        <article>
            <div class="row1" id="row1">
                <div class="box">
                    <div class="description">
                        <h1 class="title">Cristian Lafuente</h1>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae amet in quo reiciendis sapiente, adipisci, molestias ex molestiae nesciunt id exercitationem sint non maxime nihil dolore possimus dolorem incidunt placeat.</p>
                        <div class="buttons">
                            <a download href="">Descarga mi CV</a>
                        </div>
                        <div class="social-media">
                            <a href="" class="github"></a>
                            <a href="mailto:cristian.lafuente.martinez@gmail.com?subject=Contacto página web Portfolio" class="email"></a>
                            <a href="" class="linkedin"></a>
                        </div>
                    </div>
                    <div class="image"></div>
                </div>
            </div>
            <div class="row2" id="row2">
                <div class="box2">
                    <div class="imageabout"></div>
                    <div class="description">
                        <h1 class="title">Experiencia</h1>
                        <section class="time-line-box">
                            <div class="swiper-container text-center">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="timestamp"><span class="date"></span></div>
                                        <div class="status"><span class="status-show">Programador</span></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="timestamp"><span class="date"></span></div>
                                        <div class="status"><span></span></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="timestamp"><span class="date"></span></div>
                                        <div class="status"><span class="status-show">Programador</span></div>
                                    </div>                                   
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="box">
                    <div class="description">
                        <h1 class="title">Habilidades</h1>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae amet in quo reiciendis sapiente, adipisci, molestias ex molestiae nesciunt id exercitationem sint non maxime nihil dolore possimus dolorem incidunt placeat.</p>
                        <div class="social-media">
                            <a href="" class="github"></a>
                            <a href="mailto:cristian.lafuente.martinez@gmail.com?subject=Contacto página web Portfolio" class="email"></a>
                            <a href="" class="linkedin"></a>
                        </div>
                    </div>
                    <div class="imagepc"></div>
                </div>
            </div>
            </div>
            <div class="row3" id="row3">
                <div class="box-form">
                    <h1 class="contact">Contacto</h1>
                    <img src="/img/avatarcontact.png" alt="" srcset="" class="avatarcontact">
                    <form action="" method="post">
                        <input type="text" name="name" id="" placeholder="Nombre">
                        <input type="email" name="email" id="" placeholder="Email">
                        <textarea name="text" id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </article>
        <article id="footer">
            <div>
                <p>FOOTER</p>
            </div>
        </article>
    </main>
</body>

</html>