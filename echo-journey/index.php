<?php
define('varovalka', true);

session_start();

include_once "data.php";

$naloga = $_GET['naloga'] ?? 'home';

// Basic routing logic to determine which file to include and set metadata
switch ($naloga) {
    case 'news':
        $partial_file = "_news.php";
        $title = 'News .::. ' . $site_name;
        break;
    case 'services':
        $partial_file = "_services.php";
        $title = 'Services .::. ' . $site_name;
        break;
    case 'mission':
        $partial_file = "_mission.php";
        $title = 'Mission .::. ' . $site_name;
        break;
    case 'gallery':
        $partial_file = "_gallery.php";
        $title = 'Gallery .::. ' . $site_name;
        break;
    case 'contact':
        $partial_file = null; // No separate file for contact in this example
        $title = 'Contact .::. ' . $site_name;
        break;
    case 'home':
    default:
        $partial_file = "_home.php";
        $title = 'Home .::. ' . $site_name;
        $naloga = 'home';
        break;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>

    <header>
        <h1><?php echo $site_name; ?></h1>
    </header>

    <nav>
        <ul class="nav-bar">
            <li><a class="<?php echo $naloga === 'home' ? 'active' : ''; ?>" href="index.php">Domov</a></li>
            <li><a class="<?php echo $naloga === 'news' ? 'active' : ''; ?>" href="?naloga=news">Novice</a></li>
            <li><a class="<?php echo $naloga === 'services' ? 'active' : ''; ?>" href="?naloga=services">Storitve</a></li>
            <li><a class="<?php echo $naloga === 'mission' ? 'active' : ''; ?>" href="?naloga=mission">O nas</a></li>
            <li><a class="<?php echo $naloga === 'gallery' ? 'active' : ''; ?>" href="?naloga=gallery">Galerija</a></li>
            <li><a class="<?php echo $naloga === 'contact' ? 'active' : ''; ?>" href="?naloga=contact">Sledite nam</a></li>
        </ul>
    </nav>


    <main>
        <?php 
        if ($partial_file && file_exists($partial_file)) {
            include $partial_file;
        } else if ($naloga === 'contact') {
            echo '<section class="section-contact"><h1>SLEDITE NAM</h1><div class="placeholder-box">Povezave do družbenih omrežij kmalu na voljo</div></section>';
        } else {
            echo '<p>Stran ni bila najdena.</p>';
        }
        ?>
    </main>


    <footer>
        <div class="footer-column">
            <h3>Raziskuj</h3>
            <ul>
                <li><a href="?naloga=news">Novice</a></li>
                <li><a href="?naloga=services">Storitve</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Podjetje</h3>
            <ul>
                <li><a href="?naloga=mission">O nas</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Poveži se</h3>
            <ul>
                <li><a href="?naloga=contact">Sledite nam</a></li>
            </ul>
        </div>
    </footer>


</body>

</html>
