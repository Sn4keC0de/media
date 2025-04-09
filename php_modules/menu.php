<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menuStyle.css">
</head>
<body>
    <header>
        <div id="header">
            <h1 class="LogoText">M.E.D.I.A</h1>
            <!-- <img id="LogoImg" src="./img/MEDIA.png" alt=""> -->

            <nav class="navbar">
                <div class="nav_items" id="_items">
                    <a href="index.php">Subjects</a>
                    <!-- <a data-value="???" class="secretoLink" href="secreto.php">???</a> -->
                    <!-- <a href="files.php">Files</a> -->
                    <a href="desktop.php">MEDIA-SO</a>
                </div>

                <div class="nav_toggle" id="_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    <script src="../js/menuScript.js"></script>
    <script>
        _toggle.onclick = () =>{
            _items.classList.toggle("open")
            _toggle.classList.toggle("close")
        }
    </script>
</body>
</html>