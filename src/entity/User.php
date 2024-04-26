<?php

class User {

protected $id;

protected string $firstname_user;

protected string $lastname_user;

protected string $address_user;

protected string $email_user;


    public function __construct(string $firstname_user, string $lastname_user, string $address_user, string $email_user){
        $this->firstname_user = $firstname_user;
        $this->lastname_user = $lastname_user;
        $this->address_user = $address_user;
        $this->email_user = $email_user;
    }

/**
 * Get the value of id
 */
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 */
public function setId($id): self
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
public function setEmailUser(string $email_user): self
{
$this->email_user = $email_user;

return $this;
}
}



?>