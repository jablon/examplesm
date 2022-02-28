<?php

namespace Example;

interface CompanyDTOInterface extends DTOInterface
{
    public function setName(string $name): void;

    public function getName(): string;
}
