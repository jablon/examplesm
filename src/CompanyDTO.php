<?php

namespace Example;

class CompanyDTO implements CompanyDTOInterface
{
    private string $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function jsonSerialize()
    {
        return ['name' => $this->name];
    }
}
