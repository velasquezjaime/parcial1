<?php
require_once("models/auto_model.php");


class auto_controller{

public static function mostrar (){

    $auto[]= new auto(1, "Toyota", "Highlander", "80$", "", "", "assets/img/higlander.webp", "");
    $auto[]= new auto(2, "Nissan", "Skyline", "200$", "", "", "assets/img/skyline.jpeg", "");
    $auto[]= new auto(3, "Honda", "Pilot", "95$", "", "", "assets/img/pilot.jpg", "");
    $auto[]= new auto(4, "Mazda", "3", "50$", "", "", "assets/img/mazda3.png", "");
    $auto[]= new auto(5, "Hyundai", "Accent", "35$", "", "", "assets/img/accent.webp", "");
    return $auto;

}
 
}




