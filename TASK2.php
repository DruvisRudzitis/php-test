<?php

class Auto {
    public string $brand;
    public int $fuelTank;

    public function __construct(string $brand, int $fuelTank){
        $this->brand = $brand;
        $this->fuelTank = $fuelTank;
    }
    public function getBrand(): string {
        return $this->brand;
    }
    public function getFuelTank(): int {
        return $this->fuelTank;
    }
}
class Bmw extends Auto {
    public function bmwFeature(): string {
        return "Xdrive";
    }
}
class Vw extends Auto {
    public function vwFeature(): string {
        return "4motion";
    }
}

$cars = [
    new bmw("Bmw", 80),
    new vw("Vw", 60)
];

foreach ($cars as $car) {
    echo $car->getBrand() . ' ('. $car->getFuelTank() . ') - ';
    if ($car instanceof Bmw) {
        echo $car->bmwFeature();
    }
    if ($car instanceof Vw) {
        echo $car->vwFeature();
    }
    echo "\n";
}
