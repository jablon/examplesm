<?php

namespace Example;

use Psr\Http\Message\RequestInterface as PsrRequestInterface;

class CompanyRequest implements RequestInterface
{
    private string $endpoint;

    public function __construct(string $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    public function create(array $args = [], array $data = []): PsrRequestInterface
    {
        return new Request(Request::GET, $this->endpoint . '/company-info.json?' . http_build_query($args));
    }
}
