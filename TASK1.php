<?php

class Person {
    protected string $name;
    protected string $surname;
    protected ?string $middleName;

    public function __construct(string $name, string $surname, string $middleName = null){
        $this->name = $name;
        $this->surname = $surname;
        $this->middleName = $middleName;
    }
    public function name(): ?string {
        return $this->name;
    }
    public function surname(): string {
        return $this->surname;
    }
    public function middleName(): ?string {
        return $this->middleName;
    }
}
$persons = [
    new Person('Druvis', 'Rudzitis'),
    new Person('Peteris', 'Kalnins', 'Janis'),
    new Person('Juris', 'Liepins', 'Ivars')
];
foreach ($persons as $person) {
    echo $person->name() . " ";
    if ($person->middleName()) {
        echo $person->middleName() . " ";
    }
    echo $person->surname() . " ";
    echo "\n";
}

