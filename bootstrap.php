<?php
require_once "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

// Create a simple "default" Doctrine ORM configuration for Annotations
$config = ORMSetup::createAttributeMetadataConfiguration(
    array(__DIR__."/src/entity"),  // Specify the path to your entities
    true                           // Enable development mode
);

// Configuring the database connection
$connectionOptions = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'gthotel',
    'port'     => 3306
];

$connection = DriverManager::getConnection($connectionOptions, $config);

// Obtaining the entity manager
$entityManager = EntityManager::create($connection, $config);
