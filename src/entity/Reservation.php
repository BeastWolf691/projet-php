<?php
// src/Entity/Reservation.php
namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservations")
 */
class Reservation
{
    // ... (properties, getters, and setters)
}

// add-reservation-handler.php
use Entity\Reservation;

// Gather POST data from the form
// ...

$reservation = new Reservation();
// Set properties based on POST data
// ...

$entityManager->persist($reservation);
$entityManager->flush();

echo json_encode(['message' => 'Reservation réussie']);
?>