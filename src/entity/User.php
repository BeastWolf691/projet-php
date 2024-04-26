<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table]

class User
{
    // ... properties including references to the User and Room entities ...

[ORM\ManyToOne(targetEntity="booking")]
[ORM\JoinColumn(name="user_id", referencedColumnName="id")]
    private $user;

[ORM\ManyToOne(targetEntity="Room")]
[ORM\JoinColumn(name="room_id", referencedColumnName="id")]
    private $room;

[ORM\Column(type="datetime")]
    private $checkIn;

[ORM\Column(type="datetime")]
    private $checkOut;

    // ... getters and setters ...
}