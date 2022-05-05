<?php

namespace ElfFantasy\API\Http\Integrations\DataApi\Requests\Locations;

use ElfFantasy\API\Http\Integrations\DataApi\DataApiConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;

class UpdateLocationRequest extends SaloonRequest
{
    /**
     * Define the method that the request will use.
     *
     * @var string|null
     */
    protected ?string $method = Saloon::PATCH;

    /**
     * The connector.
     *
     * @var string|null
     */
    protected ?string $connector = DataApiConnector::class;

    public function __construct(public int $locationId)
    {
    }

    /**
     * Define the endpoint for the request.
     *
     * @return string
     */
    public function defineEndpoint(): string
    {
        return '/v1/locations/'.$this->locationId;
    }
}
