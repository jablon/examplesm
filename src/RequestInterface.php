<?php

namespace Example;

use Psr\Http\Message\RequestInterface as PsrRequestInterface;

interface RequestInterface
{
    public function create(array $args = [], array $data = []): PsrRequestInterface;
}
