<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/deskStyle.css">
    <title>MEDIA-SO</title>
</head>
<body>
    <main>
        <div class="computerCon">
            <!-- <img src="./img/ComputerFrame.png" alt=""> -->
            <div class="mainCon">
                <div class="deskCon">

                    <button class="app console" id="openCon" ondblclick="abrirVentana(3); main();">
                        <i class="fa-solid fa-terminal"></i>
                        <span>Console</span>
                    </button>

                    <button class="app archiveA" id="openFil" ondblclick="abrirVentana(2);">
                        <i class="fa-solid fa-folder"></i>
                        <span>Files</span>
                    </button>

                    <button class="app archiveB" id="openDoc" ondblclick="abrirVentana(4);">
                        <i class="fa-solid fa-folder"></i>
                        <span>Documents</span>
                    </button>

                    <button class="app archiveC" id="openWin" ondblclick="abrirVentana(1);">
                        <i class="fa-solid fa-folder"></i>
                        <span>Audios</span>
                    </button>

                    <button class="app archiveD" id="openDto" ondblclick="abrirVentana(5);">
                        <i class="fa-solid fa-folder"></i>
                        <span>DON'T OPEN</span>
                    </button>
                    
                </div>

                <div class="appsCon">


                    <!-- Carpeta de Audios -->
                    <div class="audiosCar win" id="winDragg1" onclick="foco(1);">
                        <div class="carHeaderCon" id="winDragg1Header">
                            Audios
                            <button class="cloWin" id="closeWin" onclick="cerrarVentana(1);">X</button>
                        </div>
                        <div class="carConCon">
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-audio"></i>
                                <span>14212-442-FA.mp3</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-audio"></i>
                                <span>14212-442-FA.mp3</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-audio"></i>
                                <span>14212-442-FA.mp3</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-audio"></i>
                                <span>14212-442-FA.mp3</span>
                            </button>
                        </div>
                    </div>


                    <!-- Carpeta de Files -->
                    <div class="audiosCar win" id="winDragg2" onclick="foco(2);">
                        <div class="carHeaderCon" id="winDragg2Header">
                            Files
                            <button class="cloWin" id="closeWin" onclick="cerrarVentana(2);">X</button>
                        </div>
                        <div class="carConCon">
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-audio"></i>
                                <span>asdasd.pdf</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-lines"></i>
                                <span>Secret Names.txt</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-image"></i>
                                <span>porno.jpg</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-image"></i>
                                <span>pigga.png</span>
                            </button>
                        </div>
                    </div>


                    <!-- Carpeta de Documents -->
                    <div class="audiosCar win" id="winDragg4" onclick="foco(4);">
                        <div class="carHeaderCon" id="winDragg4Header">
                            Documents
                            <button class="cloWin" id="closeWin" onclick="cerrarVentana(4);">X</button>
                        </div>
                        <div class="carConCon">
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-audio"></i>
                                <span>asdasd.pdf</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-lines"></i>
                                <span>Secret Names.txt</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-image"></i>
                                <span>porno.jpg</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-image"></i>
                                <span>pigga.png</span>
                            </button>
                        </div>
                    </div>


                    <!-- Carpeta de DONT OPEN -->
                    <div class="audiosCar win" id="winDragg5" onclick="foco(5);">
                        <div class="carHeaderCon" id="winDragg5Header">
                            DONT OPEN
                            <button class="cloWin" id="closeWin" onclick="cerrarVentana(5);">X</button>
                        </div>
                        <div class="carConCon">
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-audio"></i>
                                <span>asdasd.pdf</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-lines"></i>
                                <span>Secret Names.txt</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-image"></i>
                                <span>porno.jpg</span>
                            </button>
                            <button class="app audio" id="app">
                                <i class="fa-solid fa-file-image"></i>
                                <span>pigga.png</span>
                            </button>
                        </div>
                    </div>


                    <!-- Console -->
                    <div class="audiosCar win" id="winDragg3" onclick="foco(3);">
                        <div class="carHeaderCon" id="winDragg3Header">
                            MEDIA Console
                            <button class="cloWin" id="closeWin" onclick="cerrarVentana(3);">X</button>
                        </div>
                        <div class="carConCon cons">
                            <?php include './console.php' ?>
                        </div>
                    </div>
                </div>


                <!-- Barra de tareas -->
                <div class="barCon">
                    <button class="soIcon">
                        <i class="fa-brands fa-centos"></i>
                        <!-- <img src="./img/CuboTest.png" alt=""> -->
                    </button>
                    <div class="serIco">
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-volume-high"></i>
                    </div>
                    <div class="dateCon">
                        <div class="hour">
                            <span id="hour">00</span>:<span id="min">00</span>
                        </div>
                        <div class="date">
                            <span id="day">24</span>/<span id="month">4</span>/<span id="year">2021</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/be8253c5a7.js" crossorigin="anonymous"></script>
    <script>

        // Sistema de hora y dia

        var month = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

        function clock() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var dayToday = today.getDay();
            var date = today.getDate();
            var mon = today.getMonth();
            var year = today.getFullYear();

            h = h<10? '0' +h: h;
            m = m<10? '0' +m: m;

            document.getElementById('hour').innerHTML = h;
            document.getElementById('min').innerHTML = m;
            document.getElementById('day').innerHTML = date;
            document.getElementById('month').innerHTML = month[mon];
            document.getElementById('year').innerHTML = year;
        }

        var inter = setInterval(clock,400);



        // Sistema de ventada draggable

        dragElement(document.getElementById("winDragg1"));
        dragElement(document.getElementById("winDragg2"));
        dragElement(document.getElementById("winDragg3"));
        dragElement(document.getElementById("winDragg4"));
        dragElement(document.getElementById("winDragg5"));

        function dragElement(elem) {
            var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;

            if (document.getElementById(elem.id + "Header")) {
                document.getElementById(elem.id + "Header").onmousedown = dragMouseDown;
            }

            function dragMouseDown(e) {
                e = e || window.event;
                e.preventDefault();
                pos3 = e.clientX;
                pos4 = e.clientY;
                document.onmouseup = closeDragElement;
                document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
                e = e || window.event;
                e.preventDefault();
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;
                elem.style.top = (elem.offsetTop - pos2) + "px";
                elem.style.left = (elem.offsetLeft - pos1) + "px";
            }

            function closeDragElement() {
                document.onmouseup = null;
                document.onmousemove = null;
            }
        }

        // Sistema de abrir ventana de Audios
        function abrirVentana(id) {
            const windowCarp = document.getElementById('winDragg' + id);

            windowCarp.classList.add("open");
            foco(id);
        }
        
        function cerrarVentana(id) {
            const windowCarp = document.getElementById('winDragg' + id);
            
            windowCarp.classList.remove("open");
        } 

        const ventanas = document.getElementsByClassName('win');

        function foco(id) {

            for (let i = 0; i < ventanas.length; i++) {
                ventanas[i].style.zIndex = 0;
            }

            document.getElementById('winDragg' + id).style.zIndex = 100;
        }


    </script>
</body>
</html>