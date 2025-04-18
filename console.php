<?php 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Consola Personalizada</title>
    <meta charset="UTF-8">
    <style>

        @font-face {
            font-family: 'Mx357';
            src: url("../fonts/Mx437_IBM_PS-55_re.ttf");
        }

        #console {
            width: 100%;
            height: 100%;
            overflow-y: scroll !important;
            padding: 10px;
            background-color: black !important;
            color: #ff5454;
            text-shadow: 0 0 10px red;
            font-family: 'Mx357';
            /* font-family: monospace; */
            font-size: 15px;
        }

        @keyframes blink-cursor {
            0% { color: red; }
            50% { color: red; }
            51% { color: transparent; }
            100% { color: transparent; }
        }
        .cursor {
          animation: blink-cursor 0.75s infinite;
        }

    </style>
</head>
<body>
    <div id="console"></div>


    <script>
      interval = null;

        cursor = '<span class="cursor">_</span>';
        prompttext = 'root@MacLibro-Pro ~ % ';

        wel = '███╗░░░███╗███████╗██████╗░██╗░█████╗░  ░░░░░░  ░██████╗░█████╗░·████╗░████║██╔════╝██╔══██╗██║██╔══██╗  ░░░░░░  ██╔════╝██╔══██╗·██╔████╔██║█████╗░░██║░░██║██║███████║  █████╗  ╚█████╗░██║░░██║·██║╚██╔╝██║██╔══╝░░██║░░██║██║██╔══██║  ╚════╝  ░╚═══██╗██║░░██║·██║░╚═╝░██║███████╗██████╔╝██║██║░░██║  ░░░░░░  ██████╔╝╚█████╔╝·╚═╝░░░░░╚═╝╚══════╝╚═════╝░╚═╝╚═╝░░╚═╝  ░░░░░░  ╚═════╝░░╚════╝░··';

        function beep() {
            var snd = new Audio("data:audio/wav;base64,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qJrx4KOQjahZxWbcZgztj2c49nKmkId44S71j0c8eV9yDK6uPRzx5X18eDvjvQ6yKo9ZSS6l//8elePK/Lf//IInrOF/FvDoADYAGBMGb7FtErm5MXMlmPAJQVgWta7Zx2go+8xJ0UiCb8LHHdftWyLJE0QIAIsI+UbXu67dZMjmgDGCGl1H+vpF4NSDckSIkk7Vd+sxEhBQMRU8j/12UIRhzSaUdQ+rQU5kGeFxm+hb1oh6pWWmv3uvmReDl0UnvtapVaIzo1jZbf/pD6ElLqSX+rUmOQNpJFa/r+sa4e/pBlAABoAAAAA3CUgShLdGIxsY7AUABPRrgCABdDuQ5GC7DqPQCgbbJUAoRSUj+NIEig0YfyWUho1VBBBA//uQZB4ABZx5zfMakeAAAAmwAAAAF5F3P0w9GtAAACfAAAAAwLhMDmAYWMgVEG1U0FIGCBgXBXAtfMH10000EEEEEECUBYln03TTTdNBDZopopYvrTTdNa325mImNg3TTPV9q3pmY0xoO6bv3r00y+IDGid/9aaaZTGMuj9mpu9Mpio1dXrr5HERTZSmqU36A3CumzN/9Robv/Xx4v9ijkSRSNLQhAWumap82WRSBUqXStV/YcS+XVLnSS+WLDroqArFkMEsAS+eWmrUzrO0oEmE40RlMZ5+ODIkAyKAGUwZ3mVKmcamcJnMW26MRPgUw6j+LkhyHGVGYjSUUKNpuJUQoOIAyDvEyG8S5yfK6dhZc0Tx1KI/gviKL6qvvFs1+bWtaz58uUNnryq6kt5RzOCkPWlVqVX2a/EEBUdU1KrXLf40GoiiFXK///qpoiDXrOgqDR38JB0bw7SoL+ZB9o1RCkQjQ2CBYZKd/+VJxZRRZlqSkKiws0WFxUyCwsKiMy7hUVFhIaCrNQsKkTIsLivwKKigsj8XYlwt/WKi2N4d//uQRCSAAjURNIHpMZBGYiaQPSYyAAABLAAAAAAAACWAAAAApUF/Mg+0aohSIRobBAsMlO//Kk4soosy1JSFRYWaLC4qZBYWFRGZdwqKiwkNBVmoWFSJkWFxX4FFRQWR+LsS4W/rFRb/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VEFHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAU291bmRib3kuZGUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMjAwNGh0dHA6Ly93d3cuc291bmRib3kuZGUAAAAAAAAAACU=");  
            snd.play();
        }


        function tipear(text, speed) {
            const consoleDiv = document.getElementById('console');
            let i = 0;
            text += 'Ç';

            consoleDiv.innerHTML += '<br>';
            const interval = setInterval(function() {
                c = text[i];
                n = c.charCodeAt(0);
                // console.log(c.charCodeAt(0));
                if ( n === 183 ) {
                  // console.log("ENTRE A PUNTO");
                  c = '<br>';
                }
                if ( n === 199 ) {
                  // console.log("ENTRE A PROPMPT");
                  c = "<br>" + prompttext + cursor;
                }
                consoleDiv.innerHTML += c;
                consoleDiv.scrollTop = consoleDiv.scrollHeight;
                i++;
                if (i === text.length) {
                    clearInterval(interval);
                }
            }, speed || 50);
            
        }

        async function sendCmd(cmd) {
          // console.log(cmd);
          fetch('http://localhost/media/proccess.php', {
            method: 'POST',
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              cmd: cmd
            })
          })
          .then(res => res.json())
          .then(res => {
            // console.log(res.substring(0, 5));
            consoleDiv = document.getElementById('console');

            if ( res.substring(0, 5) == "Error") {
              consoleDiv.innerHTML += "<br>" + res + "<br>";
            } else if ( res.substring(0, 1) == "¬" ) {
              consoleDiv.innerHTML += "<br>" + res.substring(1) + "<br>";
            } else {
              document.getElementById("show").innerHTML = res;
            }
            consoleDiv.innerHTML += "<br>" + prompttext;
            consoleDiv.innerHTML += cursor;
          })
          .catch(err => console.error(err));
        }


        function main() {
          clearInterval(interval);
          document.getElementById('console').innerHTML = "";
          // document.getElementById('boton').style.display = 'none';
          const consoleDiv = document.getElementById('console');
          tipear(wel, 1);
        }

        document.addEventListener('keydown', function(event) {
          const consoleDiv = document.getElementById('console');
          switch ( event.key ) {
            case 'ArrowUp':
              console.log('ArrowUp<br>');
              break;
            case 'ArrowDown':
              console.log('ArrowDown<br>');
              break;
            case 'ArrowLeft':
              console.log('ArrowLeft<br>');
              break;
            case 'ArrowRight':
              console.log('ArrowRight<br>');
              break;
            case 'Control':
              console.log('Control<br>');
              break;
            case 'Shift':
              console.log('Shift');
              break;
            case 'Alt':
              console.log('Alt<br>');
              break;
            case 'Meta':
              console.log('Meta');
              break;
            case 'CapsLock':
              console.log('CapsLock<br>');
              break;
            case 'Tab':
              console.log('Tab<br>');
              break;
            case 'Enter':
              consoleDiv.innerHTML = consoleDiv.innerHTML.replaceAll(cursor, '');
              cmdp = consoleDiv.innerHTML.lastIndexOf("%") + 1;
              cmd = consoleDiv.innerHTML.substring(cmdp);
              sendCmd(cmd.trim());
              break;
            case 'Escape':
              consoleDiv.innerHTML = prompttext;
              break;
            case 'Backspace':
              if ( consoleDiv.innerHTML.slice(-(4+cursor.length)) !== '~ % ' + cursor ) {
                consoleDiv.innerHTML = consoleDiv.innerHTML.replaceAll(cursor, '');
                consoleDiv.innerHTML = consoleDiv.innerHTML.slice(0, -1);
                consoleDiv.innerHTML += cursor;

              } else {
                beep();
              }
              break;
            case 'Dead':
              console.log("DEAD");
              break;
            case 'Delete':
              console.log('Delete<br>');
              break;
            case 'Insert':
              console.log('Insert<br>');
              break;
            case 'Home':
              console.log('Home<br>');
              break;
            case 'End':
              console.log('End<br>');
              break;
            case 'PageUp':
              console.log('PageUp<br>');
              break;
            case 'PageDown':
              console.log('PageDown<br>');
              break;
            case 'F1':
              console.log('F1<br>');
              break;
            case 'F2':
              console.log('F2<br>');
              break;
            case 'F3':
              console.log('F3');
              break;
            case 'F4':
              console.log('F4<br>');
              break;
            case 'F5':
              console.log('F5<br>');
              break;
            case 'F6':
              console.log('F6<br>');
              break;
            case 'F7':
              console.log('F7<br>');
              break;
            case 'F8':
              console.log('F8<br>');
              break;
            case 'F9':
              console.log('F9<br>');
              break;
            case 'F10':
              console.log('F10<br>');
              break;
            case 'F11':
              console.log('F11<br>');
              break;
            case 'F12':
              console.log('F12<br>');
              break;
            case 'ScrollLock':
              console.log('ScrollLock<br>');
              break;
            case 'Pause':
              console.log('Pause<br>');
              break;
            case 'PrintScreen':
              console.log('PrintScreen<br>');
              break;
            case 'ContextMenu':
              console.log('ContextMenu<br>');
              break;
            case 'MediaPlayPause':
              console.log('MediaPlayPause<br>');
              break;
            case 'MediaStop':
              consoleDiv.innerHTML += 'MediaStop<br>';
              break;
            case 'MediaTrackPrevious':
              consoleDiv.innerHTML += 'MediaTrackPrevious<br>';
              break;
            case 'MediaTrackNext':
              consoleDiv.innerHTML += 'MediaTrackNext<br>';
              break;
            case 'MediaFastForward':
              consoleDiv.innerHTML += 'MediaFastForward<br>';
              break;
            case 'MediaRewind':
              consoleDiv.innerHTML += 'MediaRewind<br>';
              break;
            case 'MediaRecord':
              consoleDiv.innerHTML += 'MediaRecord<br>';
              break;
            case 'MediaEject':
              consoleDiv.innerHTML += 'MediaEject<br>';
              break;
            case 'VolumeMute':
              consoleDiv.innerHTML += 'VolumeMute<br>';
              break;
            case 'VolumeDown':
              consoleDiv.innerHTML += 'VolumeDown<br>';
              break;
            case 'VolumeUp':
              consoleDiv.innerHTML += 'VolumeUp<br>';
              break;
            case 'BrowserHome':
              consoleDiv.innerHTML += 'BrowserHome<br>';
              break;
            case 'BrowserSearch':
              consoleDiv.innerHTML += 'BrowserSearch<br>';
              break;
            case 'BrowserFavorites':
              consoleDiv.innerHTML += 'BrowserFavorites<br>';
              break;
            case 'BrowserRefresh':
              consoleDiv.innerHTML += 'BrowserRefresh<br>';
              break;
            case 'BrowserStop':
              consoleDiv.innerHTML += 'BrowserStop<br>';
              break;
            case 'BrowserForward':
              consoleDiv.innerHTML += 'BrowserForward<br>';
              break;
            case 'BrowserBack':
              consoleDiv.innerHTML += 'BrowserBack<br>';
              break;
            case 'BrowserOpen':
              consoleDiv.innerHTML += 'BrowserOpen<br>';
              break;
            case 'BrowserClose':
              consoleDiv.innerHTML += 'BrowserClose<br>';
              break;
            case 'LaunchMail':
              consoleDiv.innerHTML += 'LaunchMail<br>';
              break;
            case 'LaunchCalendar':
              consoleDiv.innerHTML += 'LaunchCalendar<br>';
              break; 
            case 'LaunchContacts':
              consoleDiv.innerHTML += 'LaunchContacts<br>';
              break;
            case 'LaunchApp1':
              consoleDiv.innerHTML += 'LaunchApp1<br>';
              break;
            case 'LaunchApp2':
              consoleDiv.innerHTML += 'LaunchApp2<br>';
              break;
            case 'ProcessKey':
              consoleDiv.innerHTML += 'ProcessKey<br>';
              break;
            case 'Attn':
              consoleDiv.innerHTML += 'Attn<br>';
              break;
            case 'Crsel':
              consoleDiv.innerHTML += 'Crsel<br>';
              break;
            case 'Exsel':
              consoleDiv.innerHTML += 'Exsel<br>';
              break;
            case 'EraseEof':
              consoleDiv.innerHTML += 'EraseEof<br>';
              break;
            case 'Play':
              consoleDiv.innerHTML += 'Play<br>';
              break;
            case 'Zoom':
              consoleDiv.innerHTML += 'Zoom<br>';
              break;
            case 'Clear':
              consoleDiv.innerHTML += 'Clear<br>';
              break;
            default: 
                consoleDiv.innerHTML = consoleDiv.innerHTML.replaceAll(cursor, '');
                consoleDiv.innerHTML += event.key;
                consoleDiv.innerHTML += cursor;
              
            }
            consoleDiv.scrollTop = consoleDiv.scrollHeight;
        });

        

        main();



    </script>
    <!-- <button id=boton onclick="main()">Iniciar Consola</button> -->
    <div id="show"></div>
</body>
</html>
