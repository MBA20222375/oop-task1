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
    }

    public function getName() {
        return $this->name;
    }

    public function priceAfterDiscount($discount) {
        return $this->price - ($this->price * $discount / 100);
    }

    public function getFinalPrice() {
        return $this->price;
    }
}






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


class Gift extends Product {
    public $type;

    public function __construct($name, $price, $description, $image, $type) {
        parent::__construct($name, $price, $description, $image);
        $this->type = $type;
    }
}

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


