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

  if ( $cmd == "Bee-Noid" ) {
		echo json_encode("¬Bee Noids are living beings with abilities directly related genetically to bees specifically. The normal creation of a Bee Noid consists of a fusion process of a human specimen and a bee specimen, being able to vary organs or parts essential for its development. Thus giving an uncertain result of abilities in each Bee Noid unit.");
      exit;
	}

  if ( $cmd == "Tech-Noid" ) {
		echo json_encode("¬Tech Noids are technological beings with advanced neural plasticity, giving them the direct ability to feel, think and learn. However, they also have a clear purpose from their inception: to protect the Experiments. These units are usually old computers reused at the time of assembly.");
      exit;
	}

  if ( $cmd == "TheFirstExperiment" ) {
		echo json_encode("¬The Fly Noids were the company's discarded project, however, that doesn't end there. The only specimen they tested at the time of the fusion was tested with a human soul, a company scientist, owner and main boss in the development of the project. When they started the fusion, they realized a factor they hadn't taken into account: The brain's reaction to everything that comes with genetically changing your body to improve it. The scientist couldn't stand it, and in the middle of the tragedy, he died.
                    The scientist would not have managed to mutate, but the beloved butterfly suffered an inexplicable glitch in its mass, quickly fusing with the scientist's brain. Those values ​​became orders, that ambitious mind became a monster with an insatiable hunger. It wasn't what they expected. Thus the first Fly Noid was born. The zero experiment.
                    ");
      exit;
	}

  if ( $cmd == "TheEnderTukiProject" ) {
		echo json_encode("¬The EnderTuki Project originally consisted of a single specimen, Yellow. Yellow was perfect, the most complete and functional fusion to date. He had the senses of a bee, the ability to fly freely in a human body, the brain of a gifted person, and incomparable physical regeneration. Scientists took advantage of this to clone Yellow instead of creating new Bee Noids.");
      exit;
	}

  if ( $cmd == "atlas" ) {
		echo json_encode("¬404 [NULL] CRITIC ERR0R");
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