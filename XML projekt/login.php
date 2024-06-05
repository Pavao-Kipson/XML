<!DOCTYPE html>
<html>
<head>
    <link href="default.css" rel="stylesheet" type="text/css" media="all">
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Prijava</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<div id="menu-wrapper">
    <div id="menu" class="container">
        <ul>
            <li><a href="index.html">Početna</a></li>
            <li><a href="varieties.php">Vrste</a></li>
            <li><a href="kontakt.html">Kontakt</a></li>
            <li class="ovaStranica"><a href="login.php">Prijava</a></li>
        </ul>
    </div>
</div>

<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>Prijava</h2>
            </div>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><label>Korisnički račun:</label></td>
                        <td><input id="name" name="username" type="text"></td>
                    </tr>
                    <tr>
                        <td><label>Lozinka:</label></td>
                        <td><input id="password" name="password" placeholder="**********" type="password"></td>
                    </tr>
                    <tr>
                        <td><input name="submit" type="submit" value=" Prijava "></td>
                    </tr>
                </table>
            </form>
            <?php
            $username = "";
            $password = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $ans = $_POST;

                if (empty($ans["username"])) {
                    echo "Korisnički račun nije unesen.";
                } else if (empty($ans["password"])) {
                    echo "Lozinka nije unesena.";
                } else {
                    $username = $ans["username"];
                    $password = $ans["password"];

                    provjera($username, $password);
                }
            }

            function provjera($username, $password) {
                $xml = simplexml_load_file("korisnici.xml") or die("Greška: Nije moguće kreirati objekt");

                foreach ($xml->user as $usr) {
                    $usrn = $usr->username;
                    $usrp = $usr->password;
                    $usrime = $usr->ime;
                    $usrprezime = $usr->prezime;
                    if ($usrn == $username) {
                        if ($usrp == $password) {
                            echo "Prijavljeni ste kao $usrime $usrprezime";
                            return;
                        } else {
                            echo "Netočna lozinka";
                            return;
                        }
                    }
                }

                echo "Korisnik ne postoji.";
                return;
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
                    <li><a href="varieties.php">Vrste</a></li>
                    <li><a href="kontakt.html">Kontakt</a></li>
                    <li class="ovaStranica"><a href="login.php">Prijava</a></li>
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
