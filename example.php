<?php

require __DIR__.'/vendor/autoload.php';

$builder = new SON\Db\Builder\MySqlBuilder;

$director = new SON\Db\Builder\SqlDirector($builder); 

// // $sql = $director->getSqlAll();

// $banks = new App\Model\Banks($builder);

// $sql = $banks->getSqlAll();

// var_dump($sql);

$pdo = new \PDO('mysql:host=localhost;dbname=teste;', 'root', '1234');

$db = new SON\Db\Db($pdo);

$db->setDirector($director);

$data = $db->getAll()
    ->execute();
