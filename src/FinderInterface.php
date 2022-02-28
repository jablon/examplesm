<?php

namespace Example;

interface FinderInterface
{
    public function find(array $args = []): ?DTOInterface;
}
