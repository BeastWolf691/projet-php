<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name:'user')]

class User {
#[ORM\Id]
#[ORM\Column(type:'integer')]
#[ORM\GeneratedValue]
protected int $id;

#[ORM\Column(type:'string')]
protected string $firstname_user;

#[ORM\Column(type:'string')]
protected string $lastname_user;

#[ORM\Column(type:'string')]
protected string $password_user;

#[ORM\Column(type:'string')]
protected string $address_user;

#[ORM\Column(type:'string')]
protected string $email_user;


    public function __construct(string $firstname_user, string $lastname_user, string $password_user, string $address_user, string $email_user){
        $this->firstname_user = $firstname_user;
        $this->lastname_user = $lastname_user;
        $this->password_user = $password_user;
        $this->address_user = $address_user;
        $this->email_user = $email_user;
    }



/**
 * Get the value of id
 */
public function getId(): int
{
return $this->id;
}

/**
 * Set the value of id
 */
public function setId(int $id): self
{
$this->id = $id;

return $this;
}

/**
 * Get the value of firstname_user
 */
public function getFirstnameUser(): string
{
return $this->firstname_user;
}

/**
 * Set the value of firstname_user
 */
public function setFirstnameUser(string $firstname_user): self
{
$this->firstname_user = $firstname_user;

return $this;
}

/**
 * Get the value of lastname_user
 */
public function getLastnameUser(): string
{
return $this->lastname_user;
}

/**
 * Set the value of lastname_user
 */
public function setLastnameUser(string $lastname_user): self
{
$this->lastname_user = $lastname_user;

return $this;
}

/**
 * Get the value of password_user
 */
public function getPasswordUser(): string
{
return $this->password_user;
}

/**
 * Set the value of password_user
 */
public function setPasswordUser(string $password_user): self
{
$this->password_user = $password_user;

return $this;
}

/**
 * Get the value of address_user
 */
public function getAddressUser(): string
{
return $this->address_user;
}

/**
 * Set the value of address_user
 */
public function setAddressUser(string $address_user): self
{
$this->address_user = $address_user;

return $this;
}

/**
 * Get the value of email_user
 */
public function getEmailUser(): string
{
return $this->email_user;
}

/**
 * Set the value of email_user
 */
public function setEmail(string $email): void
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new \InvalidArgumentException('L\'adresse email n\'est pas valide.');
    }
    $this->email_user = $email;
}

#[ORM\PrePersist]
#[ORM\PreUpdate]

public function validateEmail(): void
{
   if (!filter_var($this->email_user, FILTER_VALIDATE_EMAIL)) {
       throw new \InvalidArgumentException('L\'adresse email n\'est pas valide.');
   }
}
}



?>