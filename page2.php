<?php
require 'page1.php';
?>

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
                <li><a href="page1.php">Prezentacija</a></li>
            </ul>
        </div>
    </div>

    <div>
        <h3>
            Postoje jos mnoge radnje koje su moguce sa brojevima,no vecinom obavljane na modernijim kalkulatorima.
            Neke mozemo vidjeti dole, koje se koriste na racunalima, te u programiranju radi usporedbe.
        </h3>
    </div>
</header>


        <b>
            Unesite dva broja.
        </b>
<main>
    <?php
    $a=$_GET['fdnumber'];
    $b=$_GET['ldnumber'];
    ?>
        <form action="page2.php" metod="get">
            <label for="fdnumber">Prvi broj :</label>
            <input type="number" id="fdnumber" value="<?php $a ?>" name="fdnumber"><br>
            <label for="ldnumber">Drugi broj :</label>
            <input type="number" id="ldnumber" value="<?php $b ?>" name="ldnumber"><br>
            <input type="submit" name="button" value="Submit">
        </form>
</main>


<footer>
    <?php

    if(isset($_GET['button'])){
        echo 'Rezultati su sljedeci: <br>';

        if($a==$b){
           echo 'Prvi i drugi su jednaki(==). <br>';}
        else{
            echo 'Prvi i drugi nisu jednaki(==).<br>';
        }
       if($a===$b) {
           echo 'Prvi i drugi su identicni(===).<br>';}
       else{
           echo 'Prvi i drugi nisu identicni(===).<br>';
       }
       if($a>$b){
           echo 'Prvi je veci od drugog(>).<br>';}
       else{
           echo 'Prvi nije veci od drugog(>).<br>';
       }
       if($a<$b){
           echo 'Prvi je manji od drugog(<).<br>';}
       else{
           echo 'Prvi nije manji od drugog(<).<br>';

       }
    };

    ?>
</footer>



<script src="js/script.js"></script>
</body>

</html>