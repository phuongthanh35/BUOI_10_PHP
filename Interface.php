<?php 
// bài 1 
interface Resizable {
    public function resize($percentage);
}

class Rectangle implements Resizable {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($percentage) {
        $this->width *= $percentage / 100;
        $this->height *= $percentage / 100;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}

$rectangle = new Rectangle(10, 5);
echo "Original size: " . $rectangle->getWidth() . "x" . $rectangle->getHeight() . "<br>";

$rectangle->resize(150);
echo "Size after change: " . $rectangle->getWidth() . "x" . $rectangle->getHeight(). "<br>";


// bài 2 
interface Logger {
    public function logInfo ($message ) ;
    public function logWarning ($message );
    public function logError ($message );

}

class FileLogger implements Logger {
    protected $filename ;
    public function __construct ($filename){
        $this ->filename =$filename ;
    }
    public function logInfo ($message){
        $this ->insertToDatabase("INFO", $message);
    }

    public function logWarning($message) {
        $this->insertToDatabase("WARNING", $message);
    }

    public function logError($message) {
        $this->insertToDatabase("ERROR", $message);
    }

    private function insertToDatabase($level, $message) {
        $query = "INSERT INTO logs (level, message) VALUES (, ?)";
        $statement = $this->connection->prepare($query);
        $statement->bind_param("ss", $level, $message);
        $statement->execute();
    }
}

$fileLogger = new FileLogger("log.txt");
$fileLogger->logInfo("This is an information message");
$fileLogger->logWarning("This is a warning message");
$fileLogger->logError("This is an error message");

$databaseLogger = new DatabaseLogger("localhost", "root", "password", "logs");
$databaseLogger->logInfo("This is an information message");
$databaseLogger->logWarning("This is a warning message");
$databaseLogger->logError("This is an error message");


// bài 3 
interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function draw() {
        echo "Drawing a circle with radius: " . $this->radius . "<br>";
    }
}

class Square implements Drawable {
    protected $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function draw() {
        echo "Drawing a square with side length: " . $this->side . "<br>";
    }
}


$circle = new Circle(5);
$circle->draw();

$square = new Square(10);
$square->draw();

