<?php 



class auto {

    private $ID;
    private $marca;
    private $modelo;
    private $precio;
    private $diasalq;
    private $preciotot;
    private $enlaceft;
    private $ver;



    public function __construct($ID, $marca, $modelo, $precio, $diasalq, $preciotot, $enlaceft, $ver){

        $this->ID= $ID;
        $this->marca= $marca;
        $this->modelo= $modelo;
        $this->precio= $precio;
        $this->diasalq= $diasalq;
        $this->preciotot= $preciotot;
        $this->enlaceft= $enlaceft;
        $this->ver= $ver;

    }

    public function setID($ID){
        $this->ID = $ID;
    }
    public function getID(){
        return $this->ID;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getMarca(){
        return $this->marca;
    }

    public function setmodelo($modelo){
        $this->modelo = $modelo;
    }
    public function getmodelo(){
        return $this->modelo;
    }

    public function setprecio($precio){
        $this->precio = $precio;
    }
    public function getprecio(){
        return $this->precio;
    }

    public function getdiasalq(){
        $random= rand(1, 10);
        return $random;
    }
    
    public function setenlaceft($enlaceft){
        $this->enlaceleft = $enlaceft;
    }
    public function getenlaceft(){
        return $this->enlaceft;
    }

    public function setver($ver){
        $this->ver = $ver;
    }
    public function getver(){
        return $this->ver;
    }

}
