<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once ("./classes/TemplateClass.php");
require_once ("./classes/MainClass.php");
$main = new MainClass();
?>

<!doctype html>
<html lang="en">
<head>
    <?php
    TemplateClass::getLibs();
    ?>
    <title>Document</title>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <span><b>1.Noskaidrot, kura php versija ir uzlikta.</b></span>
        </div>
        <div class="col-md-12">
            <b>Uzdevuma rezultāts:</b>
            <?php
            $main->showPhpVersion();
            ?>
        </div>
        <div class="col-md-12">
            <span><b>2.Uzrakstīt php skriptu, kas izvada tekstu uz ekrāna.</b></span>
        </div>
        <div class="col-md-12">
            <b>Uzdevuma rezultāts:</b>
            <?php
            $main->showText("teksts uz ekrāna");
            ?>
        </div>
        <div class="col-md-12">
            <span><b>3.Uzrakstīt php skriptu, kas saskaita divus skaitļus un uz ekrāna izvada to rezultātu.</b></span>
        </div>
        <div class="col-md-12">
             <span> <b>Uzdevuma rezultāts:</b></span>
            <p>
                <form action="index.php" method="post">
                <input type="text" name="numberOne"/>
                <input type="text" name="numberTwo"/>
                <input type="submit" name="plus" value="+"/>
            </form>
            <?php
            if(isset($_POST['plus'])){
                $main->numberOne($_POST['numberOne']);
                $main->numberTwo($_POST['numberTwo']);
                $main->getSum();
            }
            ?>
            </p>

        </div>
        <div class="col-md-12">
            <span> <b>4.Uzrakstīt php skriptu, kas nosaka virknes garumu.</b></span>
        </div>
        <div class="col-md-12">
            <span> <b>Uzdevuma rezultāts:</b></span>
            <?php
            $main->getLength("Uzrakstīt php skriptu, kas nosaka virknes");
            ?>
        </div>
        <div class="col-md-12">
            <span> <b>5. Dots teikums: „Es mācos programmēt PHP valodā.” Uzrakstīt php skriptu, kas
nosaka, kurā pozīcijā atrodas mazais un lielais "p" burts.</b></span>
        </div>
        <div class="col-md-12">
            <span><b>Uzdevuma rezultāts: P -</b></span>
            <?php
            $main->getPos("Es mācos programmēt PHP valodā.","P");

            ?>
            <span>; p - </span>
            <?php
            $main->getPos("Es mācos programmēt PHP valodā.","p");
            ?>
        </div>
        <div class="col-md-12">
            <span><b>6. Uzrakstīt php skriptu, kas izvada šādu noformatētu tekstu: „PHP ir php <i>skriptu valoda ar kuras</i> <u>palīdzību tiek veidoti</u> MySql vaicājumi”.</b></span>
        </div>
    </div>
</div>
</body>
</html>