<?php
// Define the base class Device
class Device {
    protected $brand;
    protected $model;
    protected $price;

    public function __construct($brand, $model, $price) {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }

    public function getInfo() {
        return "Brand: $this->brand, Model: $this->model, Price: $this->price";
    }
}

// Subclass Smartphone inheriting from Device
class Smartphone extends Device {
    protected $os;

    public function __construct($brand, $model, $price, $os) {
        parent::__construct($brand, $model, $price);
        $this->os = $os;
    }

    public function getInfo() {
        return parent::getInfo() . ", OS: $this->os";
    }
}

// Subclass Tablet inheriting from Device
class Tablet extends Device {
    protected $screenSize;

    public function __construct($brand, $model, $price, $screenSize) {
        parent::__construct($brand, $model, $price);
        $this->screenSize = $screenSize;
    }

    public function getInfo() {
        return parent::getInfo() . ", Screen Size: $this->screenSize inches";
    }
}

// Subclass Laptop inheriting from Device
class Laptop extends Device {
    protected $processor;

    public function __construct($brand, $model, $price, $processor) {
        parent::__construct($brand, $model, $price);
        $this->processor = $processor;
    }

    public function getInfo() {
        return parent::getInfo() . ", Processor: $this->processor";
    }
}

// Usage
$iphone = new Smartphone("Apple", "iPhone 13", 999, "iOS");
echo $iphone->getInfo() . "<br>";

$ipad = new Tablet("Apple", "iPad Air", 599, 10.9);
echo $ipad->getInfo() . "<br>";

$macbook = new Laptop("Apple", "MacBook Pro", 1999, "Intel Core i7");
echo $macbook->getInfo() . "<br>";

?>
