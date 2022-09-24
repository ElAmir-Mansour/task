<?php
class Animal {
    private $family;
    private $food;

    public function __construct($family,$food){
$this->family=$family;
$this->food=$food;
    }
    public function set_faimily($family){
        $this->family=$family;
    } 

    public function get_family(){
        return $this->$family;
    }
    
    public function set_food($food){
        $this->food=$food;
    }

    public function get_food(){
        return $this->$food;
    }

    Abstract class Person(){
        public function greet();
    }

    class English extends Person{
        public function greet(){
            echo " Welcome in english";
        }
    }
    class German extends Person{
        public function greet(){
            echo "Welcome in duetch ";
        }
    }
    class French extends Person{
        public  function greet(){
            echo  " Bonjour "
        }
    }

}


?>