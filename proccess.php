<?php

	$data = json_decode(file_get_contents('php://input'), true);

// var_dump($data["cmd"]);

   	if (isset($data["cmd"]) ) {
		$cmd = $data["cmd"];
	} else {
		return;
	}


	if ( $cmd == "texto" ) {
		echo json_encode("¬Este es un texto generico");
        exit;
	}

    if ( $cmd == "pene" ) {
		echo json_encode("¬Tu vieja degustante");
        exit;
	}

	if ( $cmd == "sudo show pic" ) {
		$filename = "prueba.jpg";
		$filetype = "jpg";
		$imgbinary = fread(fopen($filename, "r"), filesize($filename));
        echo json_encode(
          "<img src='data:image/" . $filetype . ";base64," . base64_encode($imgbinary) . "' width=300px />"
        );
        exit;

	}

    if ( $cmd == "sudo show video" ) {
        $filename = "prueba.mp4";
        $filetype = "video/mp4";
        $imgbinary = fread(fopen($filename, "r"), filesize($filename));
        echo json_encode(
          "<video controls autoplay width=300px><source src='data:video/" . $filetype . ";base64," . 
          base64_encode($imgbinary). "' type='video/mp4' ></video>"
        );
        exit;
    }


    echo json_encode("Error: Command not found");