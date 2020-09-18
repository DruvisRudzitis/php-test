<?php

class Auto
{
    private string $brand;
    private int $fuelTank;
    private string $number;
    private int $fuelConsumption;
    private int $pin;

    public function __construct(string $brand, int $fuelTank, string $number, float $fuelConsumption, int $pin)
    {
        $this->brand = $brand;
        $this->fuelTank = $fuelTank;
        $this->number = $number;
        $this->fuelConsumption = $fuelConsumption;
        $this->pin = $pin;
    }
    public function getBrand(): string
    {
        return $this->brand;
    }
    public function getFuelTank(): int
    {
        return $this->fuelTank;
    }
    public function getNumber(): string
    {
        return $this->number;
    }
    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }
    public function getPin(): int
    {
        return $this->pin;
    }
}


$cars = [
    new auto("vw", 60, "me4232", 5.0, 1234),
    new auto("audi", 80, "gn3030", 7.0, 1111),
    new auto("bmw", 100, "ma4270", 9.0, 1212),
];


foreach ($cars as $carKey => $car) {
    echo $car->getBrand() . ' ';
    echo $car->getNumber() . ' ';
    echo 'KEY: ' . $carKey . ' ' . PHP_EOL;
}

$carKey = (int)readline('Enter car key: ');
$car = $cars[$carKey] ?? null;

if ($car === null) {
    echo 'Wrong car key!' . PHP_EOL;
}


$carPin = $car->getPin() ?? null;
$tries = 0;

while ($tries < 3) {
    $pin = (int)readline('Enter pin: ');
    if ($pin != $carPin) {
        echo "wrong pin, try again\n";
        $tries++;
    } else {
        break;
    }
}

if ($tries >= 3) {
    echo "car blocked \n";
} else {

    $gas = $car->getFuelTank();
    $per100km = $car->getfuelConsumption();
    $per10km = ($per100km / 100) * 10;
    $actualGas = 0;
    $km = 0;

    while ($gas >= 0 && $km >= 0) {
        $gas = $gas - $per10km;
        $actualGas = round($gas);
        $km = $km + 10;
        echo $car->getBrand() . " " . $car->getNumber() . " " . $km . "km " . $actualGas . " l " . "\n";
        sleep(1);
    }
}
