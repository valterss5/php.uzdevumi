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
            <?php
            $main->numberOne(5);
            $main->numberTwo(4);
            $main->getSum();
            ?>
        </div>
    </div>
</div>
</body>
</html>