<?php

namespace Example;

use Psr\Http\Client\ClientInterface;

abstract class AbstractFinder implements FinderInterface
{
    protected ClientInterface $client;

    protected RequestInterface $request;

    public function __construct(ClientInterface $client, RequestInterface $request)
    {
        $this->client = $client;
        $this->request = $request;
    }
}
