<?php

namespace ElfFantasy\API\Http\Integrations\DataApi\Requests\Games;

use ElfFantasy\API\Http\Integrations\DataApi\DataApiConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;

class UpdateGameRequest extends SaloonRequest
{
    protected ?string $method    = Saloon::PATCH;

    protected ?string $connector = DataApiConnector::class;

    public function __construct(public int $gameId)
    {
    }

    public function defineEndpoint(): string
    {
        return '/v1/games/'.$this->gameId;
    }
}
