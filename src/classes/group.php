<?php

abstract class Group {
    private int $group_id;
    private string $group_name;

    public function __construct(int $group_id, string $group_name) {
        $this->group_id = $group_id;
        $this->group_name = $group_name;
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

    /**
     * Get the value of group_name
     */
    public function getGroupName(): string
    {
        return $this->group_name;
    }

    /**
     * Set the value of group_name
     */
    public function setGroupName(string $group_name): self
    {
        $this->group_name = $group_name;

        return $this;
    }
}

?>