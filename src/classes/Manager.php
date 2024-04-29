<?php

class Manager implements Employee {

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

    private int $employee_id;
    private int $health_insurance_id;
    private string $employee_position;
    private Date $employee_hire_date;
    private Date $employee_fire_date;
    private float $employee_hour_salary;
    private int $hotel_id;

    public function __construct() {
        $this->user_id = $user_id;
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
        $this->employee_id = $employee_id;
        $this->health_insurance_id = $health_insurance_id;
        $this->employee_position = $employee_position;
        $this->employee_hire_date = $employee_hire_date;
        $this->employee_fire_date = $employee_fire_date;
        $this->employee_hour_salary = $employee_hour_salary;
        $this->hotel_id = $hotel_id;
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
     * Get the value of employee_id
     */
    public function getEmployeeId(): int
    {
        return $this->employee_id;
    }

    /**
     * Set the value of employee_id
     */
    public function setEmployeeId(int $employee_id): self
    {
        $this->employee_id = $employee_id;

        return $this;
    }

    /**
     * Get the value of health_insurance_id
     */
    public function getHealthInsuranceId(): int
    {
        return $this->health_insurance_id;
    }

    /**
     * Set the value of health_insurance_id
     */
    public function setHealthInsuranceId(int $health_insurance_id): self
    {
        $this->health_insurance_id = $health_insurance_id;

        return $this;
    }

    /**
     * Get the value of employee_position
     */
    public function getEmployeePosition(): string
    {
        return $this->employee_position;
    }

    /**
     * Set the value of employee_position
     */
    public function setEmployeePosition(string $employee_position): self
    {
        $this->employee_position = $employee_position;

        return $this;
    }

    /**
     * Get the value of employee_hire_date
     */
    public function getEmployeeHireDate(): Date
    {
        return $this->employee_hire_date;
    }

    /**
     * Set the value of employee_hire_date
     */
    public function setEmployeeHireDate(Date $employee_hire_date): self
    {
        $this->employee_hire_date = $employee_hire_date;

        return $this;
    }

    /**
     * Get the value of employee_fire_date
     */
    public function getEmployeeFireDate(): Date
    {
        return $this->employee_fire_date;
    }

    /**
     * Set the value of employee_fire_date
     */
    public function setEmployeeFireDate(Date $employee_fire_date): self
    {
        $this->employee_fire_date = $employee_fire_date;

        return $this;
    }

    /**
     * Get the value of employee_hour_salary
     */
    public function getEmployeeHourSalary(): float
    {
        return $this->employee_hour_salary;
    }

    /**
     * Set the value of employee_hour_salary
     */
    public function setEmployeeHourSalary(float $employee_hour_salary): self
    {
        $this->employee_hour_salary = $employee_hour_salary;

        return $this;
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
}

?>