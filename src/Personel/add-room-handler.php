<?php
// add-room-handler.php

require_once "bootstrap.php"; // The file where you set up your EntityManager

use Entity\Room;

$roomNumber = $_POST['roomNumber'];
$type = $_POST['type'];
$price = $_POST['price'];

$room = new Room();
$room->setRoomNumber($roomNumber);
$room->setType($type);
$room->setPrice($price);

$entityManager->persist($room);
$entityManager->flush();

echo "Room created with ID " . $room->getId();
