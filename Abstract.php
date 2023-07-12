<?php
// bài 1 
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    protected $length;
    protected $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Sử dụng các lớp con
$circle = new Circle(5);
echo "Diện tích hình tròn: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(4, 6);
echo "Diện tích hình chữ nhật: " . $rectangle->calculateArea() . "<br>";

// bài 2 
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    protected $sound;

    public function __construct() {
        $this->sound = "Gau gau";
    }

    public function makeSound() {
        return $this->sound;
    }
}

class Cat extends Animal {
    protected $sound;

    public function __construct() {
        $this->sound = "Meo meo!";
    }

    public function makeSound() {
        return $this->sound;
    }
}

$dog = new Dog();
echo $dog->makeSound() . "<br>";
$cat = new Cat();
echo $cat->makeSound() . "<br>";


// bài 3 
abstract class Employee {
    abstract public function name();
    abstract public function salary();
}

class Manager extends Employee {
    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function name() {
        return $this->name;
    }

    public function salary() {
        return $this->salary;
    }
class Staff extends Employee {
        protected $name;
        protected $salary ;
    
        public function __construct($name, $salary){
            $this->name = $name;
            $this->salary = $salary;
        }
    
        public function getName(){
            return $this->name;
        }
    
        public function getSalary(){
            return $this->salary;
        }
    }
}

$manager = new Manager("bat luc", 5000);
echo "Name: " . $manager->name() . "<br>";
echo "Salary: " . $manager->salary() . "<br>";

$staff = new Staff ("ngao ngo", 1123)
echo "Name: ".$staff->name2(). "<br>";
echo "Salary: ".$staff->salary2(). "<br>"; 

// Bài 4 
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    protected $sound;

    public function __construct() {
        $this->sound = "mmmmmmmmmm";
    }

    public function start() {
        return $this->sound;
    }
}

class Motorcycle extends Vehicle {
    protected $sound;

    public function __construct() {
        $this->sound = "gggggggggg";
    }

    public function start() {
        return $this->sound;
    }
}

$car = new Car();
echo $car->start(). "<br>";

$motorcycle = new Motorcycle();
echo $motorcycle->start(). "<br>";  

