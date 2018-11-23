<?php
require_once ('classes/json.php');
require_once ('traits/feeding.php');
require_once ('classes/animal-facts.php');

$json = file_get_contents('php://input');
$obj = json_decode($json);
$_POST = $obj;

if (!empty($_POST)) {
    foreach ($_POST as $key => $value){//key is the species e.g sheep / value is 'add'
        $animalFacts = new AnimalFacts();
        $fact = $animalFacts->findFact($key);
        $feedingTimes = $animalFacts->feedAnimals($key);

        $arr = $fact;
        $arr[0]['feedingTimes'] = $feedingTimes;

        $json = new JSON();
        $json->returnJSON($arr);
    }
} else {
	echo 'No animal found';
}

