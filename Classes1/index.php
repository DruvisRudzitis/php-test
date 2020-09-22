<?php

require_once __DIR__ . '/app/Spice.php';
require_once __DIR__ . '/app/SpicesCollection.php';

foreach (glob('app/Spices/*.php') as $filename)
{
    require_once $filename;
}

use App\SpicesCollection;
use App\Spice;
use App\Spices\{Salt, Basil, Pepper};

$spices = new SpicesCollection();

$spices->add(new Salt());
$spices->add(new Basil());
$spices->add(new Pepper());

foreach ($spices->all() as $spice) {
    /** @var Spice $spice */
    echo $spice->getName() . PHP_EOL;
}