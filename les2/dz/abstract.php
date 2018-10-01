<?php
    abstract class Goods{
        const EXTRA_CHARGE = 10;
        protected $name;
        protected $count;
        protected $price;
        protected $unit;
        protected $finalPrice;
        protected $weight;
        abstract function finalPrice();
        abstract function profitCost();
    }

    class DigitalGoods extends Goods{

        const PRICE = 1000;

        function __construct($name,$count){
            self::setName($name);
            self::setCount($count);
            $this->info();
        }

        public function getPrice(){
                return PRICE;
        }
        public function getCount(){
            return $this->count;
        }
        public function setCount($count = 0){
            $this->count = $count;
        }
        public function setName($name){
            $this->name = $name;
        }


        public function finalPrice(){
                return self::PRICE*$this->count;
        }
        public function profitCost(){
                return self::PRICE*$this->count/100*parent::EXTRA_CHARGE;
        }
        public function info(){
            echo "Товар: ".$this->name."<br>";
            echo "колличество: ".$this->count."<br>";
            echo "цена за единицу: ".self::PRICE."<br>";
            echo "цена за все товары: ".self::finalPrice()."<br>";
            echo "прибыль: ".self::profitCost()."<br>";
            echo "<hr><br>";
        }
    }

    class PieceGoods extends DigitalGoods{

        public function getPrice(){
            return parent::PRICE*2;
        }

        public function finalPrice(){
            return self::PRICE*2*$this->count;
        }
        public function profitCost(){
            return self::PRICE*2*$this->count/100*parent::EXTRA_CHARGE;
        }

        public function info(){
            echo "Товар: ".$this->name."<br>";
            echo "колличество: ".$this->count."<br>";
            echo "цена за единицу: ".(self::PRICE*2)."<br>";
            echo "цена за все товары: ".self::finalPrice()."<br>";
            echo "прибыль: ".self::profitCost()."<br>";
            echo "<hr><br>";
        }
    }

    class LooseGoods extends Goods{

        function __construct($name,$weight,$price,$unit){
            self::setName($name);
            self::setWeight($weight);
            self::setPrice($price);
            self::setUnit($unit);
            $this->info();
        }
        public function getName(){
            return $this->name;
        }
        public function getWeight(){
            return $this->weight;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getUnit(){
            return $this->unit;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function setWeight($weight){
            $this->weight = $weight;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function setUnit($unit){
            $this->unit = $unit;
        }
        public function finalPrice(){
            return $this->price*$this->weight;
        }
        public function profitCost(){
            return $this->price*$this->weight/100*parent::EXTRA_CHARGE;
        }

        public function info(){
            echo "Товар: ".$this->name."<br>";
            echo "колличество: ".$this->weight." ".$this->unit."<br>";
            echo "цена за единицу: ".$this->price."<br>";
            echo "цена за все товары: ".self::finalPrice()."<br>";
            echo "прибыль: ".self::profitCost()."<br>";
            echo "<hr><br>";
        }
    }

    new DigitalGoods("книга",2);
    new PieceGoods("диск с книгой",3);
    new LooseGoods("пластик",1000,10,"г.");
?>