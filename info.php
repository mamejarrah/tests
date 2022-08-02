<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : laver la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue)
{
    echo '[' . $property . '] veu.\ph ' . $propertyValue . PHP_EOL;
}