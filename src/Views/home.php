<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="public/js/script.js"></script>
    <title>Portfolio Cristian</title>
</head>

<body>
    <main>
        <article id="menu">
            <div id="menu-header">
                <span><a href="#" onclick="scroll_to_element('.row1', event)">Inicio</a></span>
                <span><a href="#" onclick="scroll_to_element('.row2', event)">Sobre mí</a></span>
                <span><a href="#" onclick="scroll_to_element('.box-skills', event)">Habilidades</a></span>
                <span><a href="#" onclick="scroll_to_element('.row3', event)">Contacto</a></span>
            </div>
        </article>
        <article>
            <div class="row">
                <span class="button-menu"><button>menu</button></span>
            </div>
            <div class="row1" id="row1">
                <div class="box">
                    <div class="description">
                        <h1 class="title">Cristian Lafuente</h1>
                        <h2>Junior Full Stack Web Developer</h2><br>
                        <p class="text">¡Bienvenid@, a mi portfolio! Soy Cristian, un joven esntusiasta de 24 años amante de la tecnología que se embarcó en el viaje del desarrollo web para convertir ideas en realidad. Mi enfoque abarca tanto el frontend como el backend, y me encanta enfrentar desafíos que me permitan aprender y crecer constantemente. </p>
                        <div class="buttons">
                            <a class="download-cv" download href="">Descarga mi CV</a>
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
                                        <div class="timestamp"><span class="date"><p>13/03/2020</p><p>-</p><p>13/06/2020</p></span></div>
                                        <div class="status"><span class="status-show"><span class="company">CIN</span><br> Técnico Sistemas Microinformáticos y Redes</span></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="timestamp"><span class="date"><p>12/09/2023</p><p>-</p><p>11/12/2023</p></span></div>
                                        <div class="status"><span class="status-show"><span class="company">Visualpublinet</span><br>Programador Web</span></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="timestamp"><span class="date"> <p>12/01/2023</p><p>-</p><p>11/01/2024</p></span></div>
                                        <div class="status"><span class="status-show"><span class="company">Visualpublinet</span><br>Programador Web</span></div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="box-skills">
                    <div>
                        <h1 class="title">Habilidades</h1>
                    </div>
                    <div class="description-skills">
                        <div class="image-skills">
                            <img src="public/img/php.png" alt="" srcset="">
                            <img src="public/img/javascript.png" alt="" srcset="">
                            <img src="public/img/html.png" alt="" srcset="">
                            <img src="public/img/css.png" alt="" srcset="">
                            <img src="public/img/mysql.png" alt="" srcset="">
                            <img src="public/img/wordpress.png" alt="" srcset="">
                            <img src="" alt="" srcset="" class="hide show">
                            <img src="public/img/prestashop.png" alt="" srcset="">
                            <img src="public/img/git.png" alt="" srcset="">
                            <img src="public/img/composer.png" alt="" srcset="">
                            <img src="public/img/woocommerce.png" alt="" srcset="">
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row3" id="row3">
                <div class="box-form">
                    <h1 class="contact">Contacto</h1>
                    <img src="public/img/avatarcontact.png" alt="" srcset="" class="avatarcontact">
                    <form action="" method="post">
                        <input type="text" name="name" id="" placeholder="Nombre" required>
                        <input type="email" name="email" id="" placeholder="Email" required>
                        <textarea name="text" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
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