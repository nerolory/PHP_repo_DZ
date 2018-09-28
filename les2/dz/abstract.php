<?php
    abstract class Goods{
        protected $name;
        protected $count;
        protected $price;
        protected $unit;
        protected $finalPrice;
        abstract function prices();
        function show(){
            $this->finalPrice = $this->count*$this->price;
            echo "Общая стоимость: ".$this->finalPrice;
        }
    }

    class DigitalGoods extends Goods{

        function __construct($name,$count,$price){
            $this->name  = $name;
            $this->price = $price;
            $this->count = $count;
            $this->prices();
        }
        function prices(){
            echo "Товар: ".$this->name."<br>";
            echo "колличество: ".$this->count."<br>";
            echo "цена за единицу: ".$this->price."<br>";
            echo parent:: show()."<br>";
            echo "<hr><br>";

        }
    }

    class PieceGoods extends Goods{

        function __construct($name,$count,$price){
            $this->name  = $name;
            $this->price = $price;
            $this->count = $count;
            $this->prices();
        }

        function prices(){
            echo "Товар: ".$this->name."<br>";
            echo "колличество: ".$this->count."<br>";
            echo "цена за единицу: ".$this->price."<br>";
            echo parent:: show()."<br>";
            echo "<hr><br>";

        }
    }

    class LooseGoods extends Goods{

        function __construct($name,$count,$price,$unit){
            $this->name  = $name;
            $this->price = $price;
            $this->count = $count;
            $this->unit = $unit;
            $this->prices();
        }

        function prices(){
            echo "Товар: ".$this->name."<br>";
            echo "колличество: ".$this->count." ".$this->unit."<br>";
            echo "цена за единицу: ".$this->price."<br>";
            echo parent:: show()."<br>";
            echo "<hr><br>";

        }
    }

    new DigitalGoods("книга",2,1000);
    new PieceGoods("диск с книгой",1,1000);
    new LooseGoods("пластик",1000,10,"кг.");
?>