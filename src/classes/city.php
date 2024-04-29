<?php

class City {

    private int $city_id;
    private string $city_name;

    public function __construct(int $city_id, string $city_name) {
        $this->id = $city_id;
        $this->name = $city_name;
    }

    /**
     * Get the value of city_id
     */
    public function getCityId(): int
    {
        return $this->city_id;
    }

    /**
     * Set the value of city_id
     */
    public function setCityId(int $city_id): self
    {
        $this->city_id = $city_id;

        return $this;
    }

    /**
     * Get the value of city_name
     */
    public function getCityName(): string
    {
        return $this->city_name;
    }

    /**
     * Set the value of city_name
     */
    public function setCityName(string $city_name): self
    {
        $this->city_name = $city_name;

        return $this;
    }
}

?>