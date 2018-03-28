<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-28
 * Time: 13:48
 */

include_once 'app/animals/Animal.php';
include_once 'app/animals/Cat.php';
include_once 'app/animals/Dog.php';
include_once 'app/animals/Cow.php';
include_once 'app/animals/Horse.php';
include_once 'app/animals/Chicken.php';

/*function methodBasic()
{
    $weightOfAnimals = [];

    $weightOfAnimals['cat'] = (new \app\animals\Cat())->getName();
}

function BasicOptimized ()
{
    $animals = [new \app\animals\Cat()];
    $weightOfAnimals = [];

    foreach ($animals as $animal)
    {
        $weightOfAnimals[$animal->getType()] = addWeight($animal);
        function addWeight(\app\animals\Animal)
    }
}


function advanced()
{
    $animals = new \app\animals\Animal();

    $data = [];
    foreach ($animals as $animal)
    {
        data= [
          'type'=>
        ];
    }
}*/

function jsonParsing()
{
    return json_decode(file_get_contents('app/data/animals.json'));

}

echo json_encode(jsonParsing());

?>