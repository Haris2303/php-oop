<?php

class Category
{
    private string $name;
    private bool $expensive;

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name)
    {
        if (trim($name) != "") {
            $this->name = $name;
        }

        return $this;
    }

    /**
     * Get the value of expensive
     */
    public function getExpensive(): bool
    {
        return $this->expensive;
    }

    /**
     * Set the value of expensive
     *
     * @return  self
     */
    public function setExpensive(bool $expensive)
    {
        $this->expensive = $expensive;

        return $this;
    }
}
