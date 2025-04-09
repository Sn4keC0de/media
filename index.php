<?php
    ob_start("ob_gzhandler");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="./img/butterfly.png">
    <link rel="stylesheet" href="./css/styles.css" />
    <title>M.E.D.I.A</title>
</head>
<body loading="lazy">
    <div id="loader"></div>

    <?php include ('php_modules/menu.php');  ?>

    <main>
        <div id="content"></div>

        <section id="Experiments">
            <div class="exOptions">
                <div class="content">
                    <a href="001.php"><div class="glitch uno"></div></a>
                </div>
                <div class="content">
                    <a href="002.php"><div class="glitch dos"></div></a>
                </div>
                <div class="content">
                    <a href="003.php"><div class="glitch tres"></div></a>
                </div>
                <div class="content">
                    <a href="004.php"><div class="glitch cuatro"></div></a>
                </div>
            </div>
        </section>
        
    </main>

    <footer>
        <p>© M.E.D.I.A. is not responsible for how Experiments are treated. The M.E.D.I.A. project has full permission from the government to treat them as test subjects without limit, allowing completely direct damage to semi-human parts of the <a style="color: #990002;" href="wtf.html">Experiments</a>. The Experiments are only objects with the sole function of getting more views, any necessary change to prioritize increasing the audience is a priority.</p>
    </footer>
    <script src="./js/script.js"></script>
    <script>
        _toggle.onclick = () =>{
            _items.classList.toggle("open")
            _toggle.classList.toggle("close")
        }
        // $(document).ready(function() {
        //     $('#slider-content').delay(200).animate({opacity:1.0}, 'linear', function(){ 
        //     $('#background-loading').animate({opacity:0, 'margin-left':'-70px'}, 'linear');
        //     $('.slider-image').animate({opacity:1.0, 'margin-left':'0em'}, 'linear', function(){});
        // });
        //   });
    </script>
</body>
</html>

<?php
    ob_end_flush();
?>