<?php

namespace ElfFantasy\API\Http\Integrations\DataApi\Requests\Locations;

use ElfFantasy\API\Http\Integrations\DataApi\DataApiConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;

class DeleteLocationRequest extends SaloonRequest
{
    protected ?string $method    = Saloon::DELETE;

    protected ?string $connector = DataApiConnector::class;

    public function __construct(public int $locationId)
    {
    }

    public function defineEndpoint(): string
    {
        return '/v1/locations/'.$this->locationId;
    }
}
