<?php

require_once "register.php";
require_once "bootstrap.php";
use Entity\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = new User();
    $user->setEmail($_POST['email']);
    $user->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));

    $entityManager->persist($user);
    $entityManager->flush();

    echo "User registered with ID " . $user->getId();
}
