<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="./img/butterfly.png">
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/secretStyle.css" />
    <title>M.E.D.I.A</title>
</head>
<body>
    <?php include ('php_modules/menu.php'); ?>

    <main>
        <!-- <div class="modal">
            <p class="message">Advertencia: El acceso a este lugar implica riesgos potenciales para su seguridad.<br>
                Se recomienda tomar precauciones extremas. Al continuar, acepta la plena responsabilidad de <br>
                cualquier daño o incidente que pueda ocurrir.</p>
            <div class="options">
              <button id="okButton" class="btn">Ok</button>
              <button id="backButton" class="btn">Back</button>
            </div>
        </div> -->

        <!-- <div class="secretContainer">
            <input type="text" id="word" name="word" onkeyup="send(event)">
        </div> -->

        <div>
            <div class="container">
                <img src="./img/terminal_overlay.png" alt="">
                <div class="terminal-container">
                    <?php include ('console.html'); ?>
                </div>
                <button id="boton" class="btn-terminal" onclick="main()">On</button>
            </div>

            <!-- <div>
                <img src="" alt="" id="image">
            </div> -->

            <!-- <div>
                <video width="320" height="240" controls id="video" autoplay>
                    <source src="" type="video/mp4">
                    <source src="" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div> -->

            <!-- <div>
                <iframe width="560" height="315"
                    id="iframe"
                    src=""
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer;
                        autoplay;
                        clipboard-write;
                        encrypted-media;
                        gyroscope;
                        picture-in-picture;
                        web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    controls="0"
                    allowfullscreen>
                </iframe>
            </div> -->
        </div>


    </main>

    <footer>

    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        $("#image").hide();
        $("#video").hide();
        $("#iframe").hide();

        function send(e) {

            if (e.key === "Enter") {
                $("#image").hide();
                $("#video").attr('src', '')
                $("#video").hide();
                $("#iframe").attr('src', '')
                $("#iframe").hide();

                val = $("#word").val()
                $.post("/Media/api/apis/secret.php",{
                        "word": val
                    },
                    function(data, status) {
                        if (status === "success") {
                            // alert(data["data"]["secret"])
                            dato = data["data"]["secret"];
                            if (dato.indexOf("image") > -1) {
                                // alert(dato.indexOf("youtube"));
                                $("#image").show();
                                $("#image").attr('src', dato);
                            }else if(dato.indexOf(".mp4") > -1) {
                                // alert(dato.indexOf("youtube"));
                                $("#video").show();
                                $("#video").attr('src', dato);
                            }else if(dato.indexOf("youtube") > -1){
                                // alert(dato.indexOf("youtube"));
                                $("#iframe").show();
                                $("#iframe").attr('src', dato + "&controls=0&autoplay=1&rel=0");
                            }
                        }
                    }
                );
            }
        }
    </script>
</body>
</html>