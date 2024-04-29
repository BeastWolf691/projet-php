<?php

use Doctrine\ORM\Mapping as ORM;

abstract class Employee implements User {

    private int $user_id;
    private string $username;
    private string $password;
    private string $email;
    private string $first_name;
    private string $last_name;
    private string $account_type;
    private string $address_street;
    private string $address_postcode;
    private string $address_city;
    private string $address_country;
    private string $phone_home;
    private string $phone_mobile;
 
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $employee_id;
 
    /**
     * @ORM\Column(type="integer")
     */
    private int $health_insurance_id;
 
    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $employee_position;
 
    /**
     * @ORM\Column(type="datetime")
     */
    private DateTime $employee_hire_date;
 
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private ?DateTime $employee_fire_date;
 
    /**
     * @ORM\Column(type="float")
     */
    private float $employee_hour_salary;
}

?>