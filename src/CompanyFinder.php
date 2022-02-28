<?php

namespace Example;

class CompanyFinder extends AbstractFinder
{
    public function find(array $args = []): ?CompanyDTOInterface
    {
        $response = $this->client->sendRequest($this->request->create($args));

        if ($response->getStatusCode() == 200) {
            $json = json_decode($response->getBody(), true);

            $dto = new CompanyDTO();
            $dto->setName($json['company_data']['company_name']);

            return $dto;
        }

        return null;
    }
}
