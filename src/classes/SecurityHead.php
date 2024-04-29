<?php

class SecurityHead implements Employee {

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
}


?>