<?php
    define("MYHOST","localhost");
    define("MYUSER","root");
    define("MYPASS","");
    define("MYDB","bibliotheque");
    $idcon=@mysqli_connect(MYHOST,MYUSER,MYPASS,MYDB);

    if (!$idcon) {
    echo "Erreur de connexion à la base de données.";
    exit();
    }

    ?>