<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@300&family=Arvo&family=Inter:wght@300&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:wght@100;300&family=Source+Code+Pro&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/kontakt.css">
    <title>NORBY'S FISH | KONTAKT</title>
    <link rel="shortcut icon" href="../pics/favicon-16x16.png" type="image/x-icon">
</head>

<body>

    <section class="hornáčasť">
        <nav>
            <a href="../html/hlavnástránka.html" class="logo">
                <h1>NORBY'S FISH</h1>
            </a>
            <div class="nav-links">
                <i class="fas fa-times" onclick="hideMenu()" id="navLinks"></i>
                <ul>
                <?php
               $pages = array('DOMOV'=>'hlavnástránka.php',
                    'ONÁS'=>'onas.php',
                    'GALÉRIA'=>'galeria.php',
                    'BLOG'=>'blog.php',
                    'KONTAKT'=>'kontakt.php'  
               );
               //echo(generate_menu($pages));
               $menu_object  = new Menu($pages);
               echo($menu_object->generate_menu());
    
            ?>
                </ul>
            </div>
            <div class="hladat">
                <input type="text" placeholder="HLADAŤ..." class="hladatinput">
                <div class="hladat-ikon">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>