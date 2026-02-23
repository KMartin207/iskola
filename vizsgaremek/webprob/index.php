<?php 

    session_start();

?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8" />
    <title>
        <?php
        if (isset($_GET['p'])) $p = $_GET['p'];
        else $p = "";

        if ($p == "") print "Főoldal";
        else if ($p == "admin") print "Admin";
        else if ($p == "setparkspot") print "Mentsd el a parkolóhelyed";
        else if ($p == "findparkspot") print "Keresd meg a parkolóhelyed";
        else print "404 ProParking ";

        print " - proparking.hu";
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <div class="header">
        <h1>ProParking.hu</h1>
        <p>Egyszerű, megbízható és gyors parkolóhely-megosztó szolgáltatás Magyarországon</p>
    </div>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="./?p=">Főoldal</a>
        <a href="./?p=setparkspot">Parkolóhely mentése</a>
        <a href="./?p=findparkspot">Parkolóhely keresése</a>
        <a href="http://proparking.hu" target="_blank" rel="noopener">ProParking weboldal</a>
    </div>

    <?php if ($p == "") : ?>
        <div class="row">
            <div class="side">
                <h2>Mi az a ProParking?</h2>
                <img src="https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?auto=format&fit=crop&w=600&q=80"
                    alt="Parkoló autók" />
                <p>A ProParking egy innovatív megoldás a parkolóhelyek megosztására és keresésére. Segítségével
                    egyszerűen megtalálhatod vagy megoszthatod a szabad parkolóhelyeket, így időt és energiát spórolva
                    meg.</p>

                <h3>Hogyan működik?</h3>
                <ul>
                    <li>Regisztrálj és jelentkezz be könnyedén</li>
                    <li>Jelöld meg elérhető parkolóhelyedet egy kattintással</li>
                    <li>Keresd meg a hozzád legközelebbi parkolóhelyeket interaktív térképen</li>
                    <li>Foglalj vagy ossz meg parkolóhelyeket a közösséggel</li>
                </ul>
            </div>
            <div class="main">
                <h2>Miért válaszd a ProParkingot?</h2>
                <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&w=800&q=80"
                    alt="Kényelmes parkolás" />
                <p>Nem kell többé órákig körözni parkolóhely után. A ProParking segítségével:</p>
                <ul>
                    <li>Gyorsan és egyszerűen találsz parkolóhelyet bárhol Magyarországon</li>
                    <li>Megoszthatod saját parkolóhelyed, és plusz bevételre tehetsz szert</li>
                    <li>Közösségi alapon működő rendszer, így mindig friss információkat kapsz</li>
                    <li>Mobilról is használható, útközben is elérhető</li>
                </ul>
                <h2>Kezdd el most!</h2>
                <p>Próbáld ki te is a <a href="https://proparking.hu" target="_blank" rel="noopener">proparking.hu</a>
                    szolgáltatást, és élvezd a kényelmes parkolást!</p>
            </div>
        </div>

    <?php elseif ($p == "setparkspot") : ?>
        <div class="row">
            <div class="main">
                <h2>Parkolóhely mentése</h2>
                <?php include("setparkplace.php") ?>
            </div>
        </div>

    <?php elseif ($p == "findparkspot") : ?>
        <div class="row">
            <div class="main">
                <h2>Parkolóhely keresése</h2>
                <?php include("getparkplace.php") ?>
            </div>
        </div>

    <?php else : ?>
        <div class="row">
            <div class="main">
                <h2>404 - Az oldal nem található</h2>
                <p>A keresett oldal nem létezik. Kérjük, térj vissza a <a href="./?p=">főoldalra</a>.</p>
            </div>
        </div>

    <?php endif; ?>

    <div class="footer">
        © 2025 ProParking.hu | Minden jog fenntartva
    </div>

</body>

</html>
