<?php
// Inclure l'autoload de Composer
require_once "vendor/autoload.php";

// Utiliser les classes de Doctrine ORM
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Configuration de la connexion à la base de données
$dbParams = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'gthotel',
];

// Configuration Doctrine ORM
$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . "/src/entity"], true);

// Créer l'EntityManager
$entityManager = EntityManager::create($dbParams, $config);

// Récupérer les données soumises par le formulaire
$firstname_user = $_POST['firstname_user'];
$lastname_user = $_POST['lastname_user'];
$password_user = $_POST['password_user'];
$address_user = $_POST['address_user'];
$email_user = $_POST['email_user'];


// Créer une nouvelle instance de l'entité Utilisateur
$user = new User();
$user->setLastNameUser($lastname_user);
$user->setFirstnameUser($firstname_user);
$user->setPasswordUser($password_user);
$user->setAddressUser($address_user);
$user->setEmailUser($email_user);

// Persister l'entité Utilisateur dans la base de données
$entityManager->persist($user);
$entityManager->flush();

echo "Utilisateur enregistré avec succès.";
