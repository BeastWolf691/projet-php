<?php
// src/Entity/User.php
 
use Doctrine\ORM\Mapping as ORM;
 
/**
* @ORM\Entity
* @ORM\Table(name="users")
*/
abstract class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
 
    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $username;
 
    /**
     * @ORM\Column(type="string")
     */
    private $password;
 
    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $email;
 
    /**
     * @ORM\Column(type="string")
     */
    private $first_name;
 
    /**
     * @ORM\Column(type="string")
     */
    private $last_name;
 
    /**
     * @ORM\Column(type="string")
     */
    private $account_type;
 
    /**
     * @ORM\Column(type="string")
     */
    private $address_street;
 
    /**
     * @ORM\Column(type="string")
     */
    private $address_postcode;
 
    /**
     * @ORM\Column(type="string")
     */
    private $address_city;
 
    /**
     * @ORM\Column(type="string")
     */
    private $address_country;
 
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $phone_home;
 
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $phone_mobile;

}

?>