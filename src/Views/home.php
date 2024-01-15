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
                <span><a href="#" onclick="scroll_to_element('#row1')">Inicio</a></span>
                <span><a href="#" onclick="scroll_to_element('#row2')">Sobre mí</a></span>
                <span><a href="#" onclick="scroll_to_element('#row3')">Contacto</a></span>
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
                            <a download href="">Descarga mi CV</a>
                        </div>
                    </div>
                    <div class="image"></div>
                </div>
            </div>
            <div class="row2" id="row2">

            </div>
            <div class="row3" id="row3">
                <div class="box-form">
                    <h1 class="contact">Contacto</h1>
                    <form action="" method="post">
                        <input type="text" name="" id="" placeholder="Nombre">
                        <input type="email" name="" id="" placeholder="Email">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
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