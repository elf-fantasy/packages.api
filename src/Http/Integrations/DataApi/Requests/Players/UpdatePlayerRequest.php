<?php

namespace ElfFantasy\API\Http\Integrations\DataApi\Requests\Players;

use ElfFantasy\API\Http\Integrations\DataApi\DataApiConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;

class UpdatePlayerRequest extends SaloonRequest
{
    protected ?string $method = Saloon::PATCH;

    protected ?string $connector = DataApiConnector::class;

    public function __construct(public string $playerId)
    {
    }

    public function defineEndpoint(): string
    {
        return '/v1/players/'.$this->playerId;
    }
}
