<?php

namespace ElfFantasy\API\Http\Integrations\DataApi\Requests\Teams;

use ElfFantasy\API\Http\Integrations\DataApi\DataApiConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;

class StoreTeamRequest extends SaloonRequest
{
    protected ?string $method = Saloon::POST;

    protected ?string $connector = DataApiConnector::class;

    public function defineEndpoint(): string
    {
        return '/v1/teams';
    }
}
