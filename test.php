<?php

require_once __DIR__ . "/vendor/autoload.php";

$collection = (new MongoDB\Client)->ToDoApp->Users;

$findResult = $collection->findOne(
    ['Name' => 'fgds']
);

?>
