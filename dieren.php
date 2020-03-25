<?php


printer_r($_POST['dieren']);
foreach ($_POST['dieren'] as $dier){
    echo"<img src='img/" . $dier .".jpg'>";
}