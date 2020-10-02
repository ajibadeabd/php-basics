<?php
class Car{


    private $make;
    private $model;
    private $color;
  
    public function __construct($make,$model,$color){
        $this->make=$make;
        $this->model=$model;
        $this->color=$color;
    }
    
    public function start (){
        echo '  car starting';
    }
    public function setmake ($newmake){
        $this->make=$newmake;
    }
    public function getcolor (){
       return  $this->color;
    }
    
    }

?>