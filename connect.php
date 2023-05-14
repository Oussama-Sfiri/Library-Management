<?php
define("MYHOST","localhost"); 
define("MYUSER","root"); 
define("MYPASS","");
$base="bibliotheque";
$idcon=@mysql_connect(MYHOST,MYUSER,MYPASS);
$idbase=@mysql_select_db($base);

    if (!$idcon) {
    echo "Erreur de connexion à la base de données.";
    exit();
    }

    ?>