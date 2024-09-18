<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

    <?php

class Vehicle {
    protected $make;
    protected $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    final public function getDetails() {
        return "{$this->year} {$this->make} {$this->model}";
    }

    public function describe() {
        return "This is a vehicle.";
    }
}

class Car extends Vehicle {
    private $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }

    public function getDoors() {
        return $this->doors;
    }

    public function describe() {
        return "This is a car with {$this->doors} doors.";
    }
}

final class Motorcycle extends Vehicle {
    private $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this->type = $type;
    }

    public function describe() {
        return "This is a motorcycle of type {$this->type}.";
    }
}

interface ElectricVehicle {
    public function chargeBattery();
}

class ElectricCar extends Car implements ElectricVehicle {
    private $batteryLevel;

    public function __construct($make, $model, $year, $doors, $batteryLevel = 100) {
        parent::__construct($make, $model, $year, $doors);
        $this->batteryLevel = $batteryLevel;
    }

    public function chargeBattery() {
        $this->batteryLevel = 100;
        return "Battery charged to 100%.";
    }

    public function describe() {
        return "This is an electric car with {$this->getDoors()} doors and a battery level of {$this->batteryLevel}%.";
    }
}

$car = new Car("Toyota", "Camry", 2020, 4);
$motorcycle = new Motorcycle("Harley-Davidson", "Street 750", 2021, "Cruiser");
$electricCar = new ElectricCar("Tesla", "Model S", 2022, 4);

echo $car->getDetails() . " " . $car->describe() . "<br>";
echo $motorcycle->getDetails() . " " . $motorcycle->describe() . "<br>";
echo $electricCar->getDetails() . " " . $electricCar->describe() . " " . $electricCar->chargeBattery() . "<br>";

?>

    </h1>
</body>
</html>
