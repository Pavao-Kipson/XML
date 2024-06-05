<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Vrste</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all">
<link href="fonts.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div id="menu-wrapper">
    <div id="menu" class="container">
        <ul>
            <li><a href="index.html">Početna</a></li>
            <li class="ovaStranica"><a href="vrste.php">Vrste</a></li>
            <li><a href="kontakt.html">Kontakt</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</div>

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>Vrste gljiva koje nudimo:</h2>
            </div>
            <?php
                $xml = simplexml_load_file('gljive.xml');
                foreach ($xml->Gljiva as $gljiva) {
                    echo '<div class="title">';
                    echo '<h2>' . $gljiva->Naziv . '</h2>';
                    echo '</div>';
                    echo '<img src="' . $gljiva->Slika . '" alt="' . $gljiva->Naziv . '">';
                    echo '<p>Cijena: <b>' . $gljiva->Cijena . '</b></p>';
                    echo '<p>Kategorija: ' . $gljiva->Kategorija . '</p>';
                    echo '<p>Dostupnost: ' . $gljiva->Dostupnost . '</p>';
                    echo '<a href="#">Dodaj u košaricu</a><br>';
                }
            ?>
        </div>
        <div id="sidebar">
            <div class="box2">
                <div class="title">
                    <h2>Navigacija</h2>
                </div>
                <ul class="style2">
                    <li><a href="index.html">Početna</a></li>
                    <li class="ovaStranica"><a href="vrste.php">Vrste</a></li>
                    <li><a href="kontakt.html">Kontakt</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <p>© Pavao Kipson, Gljive 2024.</p>
    </div>
</div>
</body>
</html>
