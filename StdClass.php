<?php

$arrayNama = [
    "firstName" => "Dwiki",
    "middleName" => "Nuri",
    "lastName" => "Dhuha"
];

$objectNama = (object) $arrayNama;

var_dump($objectNama);

echo $objectNama->firstName . PHP_EOL;

$arrayNamaLagi = (array) $objectNama;

var_dump($arrayNamaLagi);

echo "First Name $arrayNamaLagi[firstName]" . PHP_EOL;
