<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="public/js/script.js"></script>
    <title>Home</title>
</head>

<body>
    <main>
        <article id="menu">
            <div id="menu-header">
                <span><a href="#" onclick="scroll_to_element('.row', event)">Inicio</a></span>
                <span><a href="#" onclick="scroll_to_element('.row2', event)">Sobre mí</a></span>
                <span><a href="#" onclick="scroll_to_element('.row3', event)">Contacto</a></span>
            </div>
        </article>
        <article>
            <div class="row">

            </div>
            <div class="row1" id="row1">
                <div class="box">
                    <div class="description">
                        <h1 class="title">Cristian Lafuente</h1>
                        <h2>Junior Full Stack Web Developer</h2><br>
                        <p class="text">¡Bienvenid@, a mi portfolio! Soy Cristian, un joven esntusiasta de 24 años amante de la tecnología que se embarcó en el viaje del desarrollo web para convertir ideas en realidad. Mi enfoque abarca tanto el frontend como el backend, y me encanta enfrentar desafíos que me permitan aprender y crecer constantemente. </p>
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
                                        <div class="timestamp"><span class="date">13/03/2020 - 13/06/2020</span></div>
                                        <div class="status"><span class="status-show"><span class="company">CIN</span><br> Técnico Sistemas Microinformáticos y Redes</span></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="timestamp"><span class="date">12/09/2023 - 11/12/2023</span></div>
                                        <div class="status"><span class="status-show"><span class="company">Visualpublinet</span><br>Programador Web</span></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="timestamp"><span class="date">12/01/2023 - 11/01/2024</span></div>
                                        <div class="status"><span class="status-show"><span class="company">Visualpublinet</span><br>Programador Web</span></div>
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
                        <div class="skills">
                            <p>PHP</p>
                            <span class="php">
                                <span class="bar">95%</span>
                            </span>
                            <p>Javascript</p>
                            <span class="javascript">
                                <span class="bar">90%</span>
                            </span>
                            <p>HTML</p>
                            <span class="html">
                                <span class="bar">95%</span>
                            </span>
                            <p>CSS</p>
                            <span class="css">
                                <span class="bar">95%</span>
                            </span>
                            <p>SQL</p>
                            <span class="sql">
                                <span class="bar">80%</span>
                            </span>                            
                            <p>Wordpress</p>
                            <span class="wordpress">
                                <span class="bar">85%</span>
                            </span>                            
                            <p>Prestashop</p>
                            <span class="prestashop">
                                <span class="bar">85%</span>
                            </span>
                        </div>
                    </div>
                    <div class="imagepc"></div>
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