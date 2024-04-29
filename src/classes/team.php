<?php

class Team {

    private int $team_id;
    private string $team_name;
    private int $point;

    public function __construct(int $team_id, sting $team_name, int $point) {
        $this->team_id = $team_id;
        $this->team_name = $team_name;
        $this->point = $point;
    }

    /**
     * Get the value of team_id
     */
    public function getTeamId(): int
    {
        return $this->team_id;
    }

    /**
     * Set the value of team_id
     */
    public function setTeamId(int $team_id): self
    {
        $this->team_id = $team_id;

        return $this;
    }

    /**
     * Get the value of team_name
     */
    public function getTeamName(): string
    {
        return $this->team_name;
    }

    /**
     * Set the value of team_name
     */
    public function setTeamName(string $team_name): self
    {
        $this->team_name = $team_name;

        return $this;
    }

    /**
     * Get the value of point
     */
    public function getPoint(): int
    {
        return $this->point;
    }

    /**
     * Set the value of point
     */
    public function setPoint(int $point): self
    {
        $this->point = $point;

        return $this;
    }
}

?>