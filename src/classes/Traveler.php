<?php
namespace App\Classes;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="travelers")
 */
class Traveler extends User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $user_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $password;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private string $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $last_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $account_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $address_street;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $address_postcode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $address_city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $address_country;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private string $phone_home;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private string $phone_mobile;

    /**
     * @ORM\Column(type="integer")
     */
    private int $traveler_id;

    // Constructors are generally not used in Doctrine entities in the traditional sense,
    // because properties are set directly via setters or loaded by Doctrine.
    // However, you can still define it if you need to initialize any properties.
    public function __construct() {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->account_type = $account_type;
        $this->address_street = $address_street;
        $this->address_postcode = $address_postcode;
        $this->address_city = $address_city;
        $this->address_country = $address_country;
        $this->phone_home = $phone_home;
        $this->phone_mobile = $phone_mobile;
        $this->traveler_id = $traveler_id;
    }


    // ===  GETTERS & SETTERS   =====================================================================================================================

    /**
     * Get the value of user_id
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set the value of username
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of first_name
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     */
    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     */
    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of account_type
     */
    public function getAccountType(): string
    {
        return $this->account_type;
    }

    /**
     * Set the value of account_type
     */
    public function setAccountType(string $account_type): self
    {
        $this->account_type = $account_type;

        return $this;
    }

    /**
     * Get the value of address_street
     */
    public function getAddressStreet(): string
    {
        return $this->address_street;
    }

    /**
     * Set the value of address_street
     */
    public function setAddressStreet(string $address_street): self
    {
        $this->address_street = $address_street;

        return $this;
    }

    /**
     * Get the value of address_postcode
     */
    public function getAddressPostcode(): string
    {
        return $this->address_postcode;
    }

    /**
     * Set the value of address_postcode
     */
    public function setAddressPostcode(string $address_postcode): self
    {
        $this->address_postcode = $address_postcode;

        return $this;
    }

    /**
     * Get the value of address_city
     */
    public function getAddressCity(): string
    {
        return $this->address_city;
    }

    /**
     * Set the value of address_city
     */
    public function setAddressCity(string $address_city): self
    {
        $this->address_city = $address_city;

        return $this;
    }

    /**
     * Get the value of address_country
     */
    public function getAddressCountry(): string
    {
        return $this->address_country;
    }

    /**
     * Set the value of address_country
     */
    public function setAddressCountry(string $address_country): self
    {
        $this->address_country = $address_country;

        return $this;
    }

    /**
     * Get the value of phone_home
     */
    public function getPhoneHome(): string
    {
        return $this->phone_home;
    }

    /**
     * Set the value of phone_home
     */
    public function setPhoneHome(string $phone_home): self
    {
        $this->phone_home = $phone_home;

        return $this;
    }

    /**
     * Get the value of phone_mobile
     */
    public function getPhoneMobile(): string
    {
        return $this->phone_mobile;
    }

    /**
     * Set the value of phone_mobile
     */
    public function setPhoneMobile(string $phone_mobile): self
    {
        $this->phone_mobile = $phone_mobile;

        return $this;
    }

    /**
     * Get the value of traveler_id
     */
    public function getTravelerId(): int
    {
        return $this->traveler_id;
    }

    /**
     * Set the value of traveler_id
     */
    public function setTravelerId(int $traveler_id): self
    {
        $this->traveler_id = $traveler_id;

        return $this;
    }
}

?>
