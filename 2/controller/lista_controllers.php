<?php
require_once("models/lista_model.php");


class veg_controller{
    public static function mostrar (){

        $veg[]= new veg("Lechuga", "Vegetal", "15", "2.9g", "1.4g", "assets/img/vegetales/lechuga.jpg");
        $veg[]= new veg("Zanahoria", "Vegetal", "39", "6.9g", "1.25g", "assets/img/vegetales/zanahoria.jpg");
        $veg[]= new veg("Espinaca", "Vegetal", "31", "1.2g", "2.6g", "assets/img/vegetales/espinaca.webp");
        $veg[]= new veg("Brócoli", "Vegetal", "38", "1.8g", "4.4g", "assets/img/vegetales/brocoli.jpg");
        $veg[]= new veg("Calabaza", "Vegetal", "28", "4.59g", "1.13g", "assets/img/vegetales/calabaza.jpg");    
        return $veg;
    }
}

class frut_controller{
    public static function mostrar (){
    $frut[]= new frut("Manzana", "Fruta", "52", "14g", "0.3g", "assets/img/frutas/manzana.jpg", "");
    $frut[]= new frut("Pera", "Fruta", "57", "15g", "0.4g", "assets/img/frutas/pera.jpg", "");
    $frut[]= new frut("Banana", "Fruta", "89", "23g", "1.1g", "assets/img/frutas/banana.jpg", "");
    $frut[]= new frut("Sandía", "Fruta", "30", "8g", "0.6g",  "assets/img/frutas/sandia.webp", "");
    $frut[]= new frut("Uva", "Fruta", "67", "17g", "0.6g",  "assets/img/frutas/uva.jpg", "");
    return $frut;

}
}

class carne_controller{
public static function mostrar (){
    $carne[]= new carne("Pollo", "Carnes", "239", "0g", "27g",  "assets/img/carnes/pollo.webp", "");
    $carne[]= new carne("Rib Eye", "Carnes", "291", "0g", "24g", "assets/img/carnes/ribeye.jpg", "");
    $carne[]= new carne("Chuleta de cerdo", "Carnes", "231", "0g", "24g", "assets/img/carnes/chuleta.jpg", "");
    $carne[]= new carne("Tocino", "Carnes", "541", "1.4g", "37g", "assets/img/carnes/tocino.jpg", "");
    $carne[]= new carne("Pato", "Carnes", "214", "0g", "22g", "assets/img/carnes/pato.jpg", "");
    return $carne;
}
}

class todos_controller{
    public static function mostrar (){
        $todos[]= new todos("Lechuga", "Vegetal", "15", "2.9g", "1.4g", "assets/img/vegetales/lechuga.jpg");
        $todos[]= new todos("Zanahoria", "Vegetal", "39", "6.9g", "1.25g", "assets/img/vegetales/zanahoria.jpg");
        $todos[]= new todos("Espinaca", "Vegetal", "31", "1.2g", "2.6g", "assets/img/vegetales/espinaca.webp");
        $todos[]= new todos("Brócoli", "Vegetal", "38", "1.8g", "4.4g", "assets/img/vegetales/brocoli.jpg");
        $todos[]= new todos("Calabaza", "Vegetal", "28", "4.59g", "1.13g", "assets/img/vegetales/calabaza.jpg"); 
        $todos[]= new todos("Manzana", "Fruta", "52", "14g", "0.3g", "assets/img/frutas/manzana.jpg", "");
        $todos[]= new todos("Pera", "Fruta", "57", "15g", "0.4g", "assets/img/frutas/pera.jpg", "");
        $todos[]= new todos("Banana", "Fruta", "89", "23g", "1.1g", "assets/img/frutas/banana.jpg", "");
        $todos[]= new todos("Sandía", "Fruta", "30", "8g", "0.6g",  "assets/img/frutas/sandia.webp", "");
        $todos[]= new todos("Uva", "Fruta", "67", "17g", "0.6g",  "assets/img/frutas/uva.jpg", "");
        $todos[]= new todos("Pollo", "Carnes", "239", "0g", "27g",  "assets/img/carnes/pollo.webp", "");
        $todos[]= new todos("Rib Eye", "Carnes", "291", "0g", "24g", "assets/img/carnes/ribeye.jpg", "");
        $todos[]= new todos("Chuleta de cerdo", "Carnes", "231", "0g", "24g", "assets/img/carnes/chuleta.jpg", "");
        $todos[]= new todos("Tocino", "Carnes", "541", "1.4g", "37g", "assets/img/carnes/tocino.jpg", "");
        $todos[]= new todos("Pato", "Carnes", "214", "0g", "22g", "assets/img/carnes/pato.jpg", "");
        return $todos;
    }
    }