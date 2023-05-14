<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <?php  include "connect.php" ; ?>
    <title>bibliothèque</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.jpg" alt="library logo">
            </div>

            <span class="logo_name">Gestion bibliothèque </span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.html">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Pricipale</span>
                </a></li>
                <li><a href="gestionLivres.html">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Gestion des livres</span>
                </a></li>
                <li><a href="gestionUsagers.html">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Gestion des usagers</span>
                </a></li>
                <li><a href="gestionEmprunts.html">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Gestion des emprunts</span>
                </a></li>
                
            </ul>
            
            <ul class="logout-mode">

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Mode sombre</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="chercher livre ou personne ...">
            </div>
            
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Resumé</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="text">Total livres</span>
                        <span class="number">
                            <?php
                            $selectSQL = "SELECT COUNT(*) as count FROM `livres`";
                                $result=@mysql_query($selectSQL,$idcon);
                                $row = mysql_fetch_assoc($result);
                                $livres = $row['count'];
                                echo "$livres" ;
                            ?>
                        </span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-chart"></i>
                        <span class="text">Total usagers</span>
                        <span class="number">
                            <?php
                            $selectSQL = "SELECT COUNT(*) as count FROM `usagers`";
                            $result=@mysql_query($selectSQL,$idcon);
                            $row = mysql_fetch_assoc($result);
                            $usagers = $row['count'];
                            echo "$usagers" ;
                            ?>
                        </span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total emprunts</span>
                        <span class="number">
                            <?php
                            $selectSQL = "SELECT COUNT(*) as count FROM `emprunts`";
                            $result=@mysql_query($selectSQL,$idcon);
                            $row = mysql_fetch_assoc($result);
                            $emprunt = $row['count'];
                            echo "$emprunt" ;
                            ?>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        
    </section>

    <script src="script.js"></script>
</body>
</html>