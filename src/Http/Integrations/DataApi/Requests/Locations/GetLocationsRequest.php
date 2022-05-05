<?php

namespace ElfFantasy\API\Http\Integrations\DataApi\Requests\Locations;

use ElfFantasy\API\Http\Integrations\DataApi\DataApiConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;

class GetLocationsRequest extends SaloonRequest
{
    protected ?string $method = Saloon::GET;

    protected ?string $connector = DataApiConnector::class;

    public function defineEndpoint(): string
    {
        return '/v1/locations';
    }

    public function defaultQuery(): array
    {
        return [
            'page' => 1,
        ];
    }
}
