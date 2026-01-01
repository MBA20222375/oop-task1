<?php

class Product {
    public $name;
    public $price;
    public $description;
    public $image;

    public function __construct($name, $price, $description, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        echo "Product : $this->name <br>";
    }

    public function uploadImage($image) {
        $this->image = $image;
        echo "Image uploaded <br>";
    }

    public function calcPrice() {
        return $this->price;
    }
}
$pro1=new Product("Laptop", 1000, " laptop", "laptop.jpg");
$pro2=new Product("Phone", 500, "phone", "phone.jpg");


class Book extends Product {
    public $publishers ;
    public $writer;
    public $color;
    public $supplier;
    public $currentPublisher;

    public function __construct($name, $price, $description, $image, $writer, $color, $supplier) {
        parent::__construct($name, $price, $description, $image);
        $this->writer = $writer;
        $this->color = $color;
        $this->supplier = $supplier;
    }

    public function addPublisher($publisher) {
        $this->publishers = $publisher;
    }

    public function choosePublisher($index) {
        if (isset($this->publishers[$index])) {
            $this->currentPublisher = $this->publishers[$index];
        }
    }

    public function setPublisher($publisher) {
        $this->currentPublisher = $publisher;
    }

    public function showAllPublishers() {
        print_r($this->publishers);
    }
}

$book1 = new Book("PHP Programming", 50, "A book about PHP", "php_book.jpg", "John Doe", "Blue", "BookSupplier Inc.");

class Gift extends Product {
    public $type;

    public function __construct($name, $price, $description, $image, $type) {
        parent::__construct($name, $price, $description, $image);
        $this->type = $type;
    }
}
$gift1 = new Gift("Teddy Bear", 30, "A soft teddy bear", "teddy.jpg", "Toy");

class BabyCar extends Product {
    public $age;
    public $weight;
    public $materials ;
    public $specialTax;

    public function __construct($name, $price, $description, $image, $age, $weight, $specialTax) {
        parent::__construct($name, $price, $description, $image);
        $this->age = $age;
        $this->weight = $weight;
        $this->specialTax = $specialTax;
    }

    public function addMaterial($material) {
        $this->materials= $material;
    }

    public function displayMaterials() {
        echo $this->materials;
    }

    public function getFinalPrice() {
        return $this->price + $this->specialTax;
    }
}
$babyCar1 = new BabyCar("Baby Stroller", 200, "A ", "stroller.jpg", "0-3 years", "15kg", 20);


