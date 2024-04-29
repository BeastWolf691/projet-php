<?php
namespace App\Classes;

/**
* @ORM\Entity
* @ORM\Table(name="hotels")
*/
class Hotel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $hotel_id;
 
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $status;

     /**
     * @ORM\Column(type="string", length=250)
     */
    private $address;

     /**
     * @ORM\Column(type="string", length=30)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    public function __construct () {
        $this->hotel_id = $hotel_id;
        $this->status = $status;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }


    /**
     * Get the value of hotel_id
     */
    public function getHotelId(): int
    {
        return $this->hotel_id;
    }

    /**
     * Set the value of hotel_id
     */
    public function setHotelId(int $hotel_id): self
    {
        $this->hotel_id = $hotel_id;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

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
}

?>
