<?php

class Stadium implements City {

    private int $stadium_id;
    private string $stadium_name;
    private int $seat;
    private string $city_name;
    private int $city_id;

    public function __construct(int $stadium_id, string $stadium_name, int $city_id, string $city_name, int $seat) {
        $this->stadium_id = $stadium_id;
        $this->stadium_name = $stadium_name;
        $this->city_id = $city_id;
        $this->city_name = $city_name;
        $this->seat = $seat;
    }

    /**
     * Get the value of stadium_id
     */
    public function getStadiumId(): int
    {
        return $this->stadium_id;
    }

    /**
     * Set the value of stadium_id
     */
    public function setStadiumId(int $stadium_id): self
    {
        $this->stadium_id = $stadium_id;

        return $this;
    }

    /**
     * Get the value of stadium_name
     */
    public function getStadiumName(): string
    {
        return $this->stadium_name;
    }

    /**
     * Set the value of stadium_name
     */
    public function setStadiumName(string $stadium_name): self
    {
        $this->stadium_name = $stadium_name;

        return $this;
    }

    /**
     * Get the value of stadium_id
     */
    public function getCityName(): int
    {
        return $this->city_name;
    }

    /**
     * Set the value of stadium_id
     */
    public function setCityName(int $city_name): self
    {
        $this->city_name = $city_name;

        return $this;
    }

    /**
     * Get the value of seat
     */
    public function getSeat(): int
    {
        return $this->seat;
    }

    /**
     * Set the value of seat
     */
    public function setSeat(int $seat): self
    {
        $this->seat = $seat;

        return $this;
    }
}

?>