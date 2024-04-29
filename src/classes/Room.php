<?php
namespace App\Classes;

// src/Entity/Room.php
namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rooms")
 */
class Room
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $roomNumber;

    /**
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $price;

    // Getters and Setters
    public function getId()
    {
        return $this->id;
    }

    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    public function setRoomNumber($roomNumber)
    {
        $room_nb_end == substr($roomNumber, -2);
        if ($room_nb_end != '13') {
            $this->roomNumber = $roomNumber;
        } else {
            echo ('Erreur : le numéro de chambre ne peut pas terminer par \"13\".');
        }
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
