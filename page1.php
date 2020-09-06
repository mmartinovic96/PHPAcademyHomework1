<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kalkulator</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="foundation/css/foundation.css" rel="stylesheet"/>
    <link href="foundation/css/app.css" rel="stylesheet"/>

</head>

<body>
<header>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul>
                <li class="menu-text">Kalkulator</li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="index.php">Pocetna</a></li>
                <li><a href="page2.php">Info</a></li>

            </ul>
        </div>
    </div>

</header>
    <main>
        <?php
    $a=$_GET['fnumber'];
    $b=$_GET['lnumber'];
    ?>
        <fieldset>
            Unesite dva broja.
        </fieldset>
    <form action="page1.php" method="get" >
        <label for="fnumber">Prvi broj :</label>
        <input type="number" id="fnumber" value="<?php $a ?>" name="fnumber"><br>
        <label for="lnumber">Drugi broj :</label>
        <input type="number" id="lnumber" value="<?php $b ?>" name="lnumber"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    </main>

<footer>


    <?php

    if(isset($_GET['submit'])){
        echo 'Rezultati su sljedeci: <br>';
        echo 'Prvi + drugi = ' .( $a + $b). '<br>';
        echo 'Prvi - drugi = ' . ($a - $b) . '<br>';
        echo 'Prvi * drugi = ' . $a * $b . '<br>';
        echo 'Prvi / drugi = ' . $a / $b . '<br>';
        echo 'Prvi % drugi = ' . $a % $b . '<br>';
        echo 'Prvi ** drugi = ' . $a ** $b . '<br>';
    };

    ?>

    <div >
        <pre>
        + je zbroj prvog i drugog broja.
        - je razlika prvog i drugog broja.
        * je umnozak prvog i drugog broja.
        / je kolicnik prvog i drugog broja.
        % je ostatak dijeljanja medjusobno prvog i drugog broja.
        ** je rezultat prvog na drugom broju.
        </pre>
    </div>
    </footer>

<script src="js/script.js"></script>
</body>

</html>