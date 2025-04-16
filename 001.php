<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="./img/butterfly.png">
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <!-- <link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css"/> -->
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/subjects.css" />
    <!-- <link rel="stylesheet" href="./css/console.css" /> -->
    
    <title>M.E.D.I.A</title>
</head>
<body>
    <?php include ('php_modules/menu.php');  ?>

    <main>
        <div class="row">

            <!-- console -->

            <div class="win">
                <div class="fndCrt"></div>
                <div class="carHeaderCon">
                    MEDIA Console
                    <button class="cloWin">X</button>
                </div>
                <div class="wrapper" id="wrapper">
                    <div class="source-code-pro" id="app"></div>
                </div>
            </div>

            <!-- <div id="console"></div> -->

            <div class="masterSubjectContainer">
                <div class="subjectTextContainer">
                    <img class="subjectTextIcon" src="./img/butterfly.png" alt="">
                    <h2 class="subjectText">Subject 001</h2>
                </div>
                
                <div class="subjectContainer">
                    <img class="cuboTest upDown-animation" src="./img/CuboTest.png" alt="">
                    <img class="tuboDeMierda" src="./img/TuboPrueba.png" alt="">
                    <!-- <div class="tuboDeMierda"></div> -->
                </div>

                <!-- <div class="heartbeatContainer">
                    <div class="monitor">0.0 0.0</div>
                </div> -->
            </div>
        </div>
    </main>

    <footer>
        <p>© M.E.D.I.A. is not responsible for how Experiments are treated. The M.E.D.I.A. project has full permission from the government to treat them as test subjects without limit, allowing completely direct damage to semi-human parts of the Experiments. The Experiments are only objects with the sole function of getting more views, any necessary change to prioritize increasing the audience is a priority.</p>
    </footer>
    <script src="js/subjects.js"></script>
    <!-- <script src="./js/console.js"></script> -->
    <script>
        _toggle.onclick = () =>{
            _items.classList.toggle("open")
            _toggle.classList.toggle("close")
        }
    </script>
</body>
</html>