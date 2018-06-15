<?php
class TemplateClass
{
    var $title = "Valters Semjonovs";

    static function getLibs()
    {
        echo '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <link href = "./libs/bootstrap/css/bootstrap.css" rel ="stylesheet">
        <script src="./libs/jQuery/jquery2.1.4.min.js"></script>
        <script src="./libs/bootstrap/js/bootstrap.js"> </script>
        <meta rel="stylesheet" href="./css/my.css"/>
        ';
    }
}