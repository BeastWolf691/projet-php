<?php

class Game implements Stadium {

    // Game :
    private int $game_id;
    private string $game_score;
    private DateTime $day;
    // Team :
    private string $team_home;
    private string $team_away;
    // Stadium :
    private int $stadium_id;
    private string $stadium_name;
    private int $seat;
    // Group :
    private int $group_id;

    public function __construct(int $game_id, string $team_home, string $team_away, string $game_score, int $group_id, DateTime $day, int $stadium_id) {
        $this->game_id = $game_id;
        $this->team_home = $team_home;
        $this->team_away = $team_away;
        $this->game_score = $game_score;
        $this->day = $day;
        $this->stadium_id = $stadium_id;
    }

    /**
     * Get the value of game_id
     */
    public function getGameId(): int
    {
        return $this->game_id;
    }

    /**
     * Set the value of game_id
     */
    public function setGameId(int $game_id): self
    {
        $this->game_id = $game_id;

        return $this;
    }

    /**
     * Get the value of team_home
     */
    public function getTeamHome(): string
    {
        return $this->team_home;
    }

    /**
     * Set the value of team_home
     */
    public function setTeamHome(string $team_home): self
    {
        $this->team_home = $team_home;

        return $this;
    }

    /**
     * Get the value of team_away
     */
    public function getTeamAway(): string
    {
        return $this->team_away;
    }

    /**
     * Set the value of team_away
     */
    public function setTeamAway(string $team_away): self
    {
        $this->team_away = $team_away;

        return $this;
    }

    /**
     * Get the value of game_score
     */
    public function getGameScore(): string
    {
        return $this->game_score;
    }

    /**
     * Set the value of game_score
     */
    public function setGameScore(string $game_score): self
    {
        $this->game_score = $game_score;

        return $this;
    }

    /**
     * Get the value of day
     */
    public function getDay(): DateTime
    {
        return $this->day;
    }

    /**
     * Set the value of day
     */
    public function setDay(DateTime $day): self
    {
        $this->day = $day;

        return $this;
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

    /**
     * Get the value of group_id
     */
    public function getGroupId(): int
    {
        return $this->group_id;
    }

    /**
     * Set the value of group_id
     */
    public function setGroupId(int $group_id): self
    {
        $this->group_id = $group_id;

        return $this;
    }
}

?>