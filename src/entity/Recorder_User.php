<?php
namespace Entity;

// Inclure l'autoload de Composer
require_once "vendor/autoload.php";


// Configuration de la connexion à la base de données
$db = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'gthotel',
];

// Récupérer les données soumises par le formulaire
$firstname_user = $_POST['firstname_user'];
$lastname_user = $_POST['lastname_user'];
$password_user = $_POST['password_user'];
$address_user = $_POST['address_user'];
$email_user = $_POST['email_user'];


// Créer une nouvelle instance de l'entité Utilisateur
$user = new User();
$user->setFirstnameUser($firstname_user);
$user->setLastNameUser($lastname_user);
$user->setPasswordUser($password_user);
$user->setAddressUser($address_user);
$user->setEmailUser($email_user);

// Persister l'entité Utilisateur dans la base de données
$entityManager->persist($user);
$entityManager->flush();

echo "Utilisateur enregistré avec succès.";
