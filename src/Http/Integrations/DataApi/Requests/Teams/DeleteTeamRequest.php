<?php

namespace ElfFantasy\API\Http\Integrations\DataApi\Requests\Teams;

use ElfFantasy\API\Http\Integrations\DataApi\DataApiConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;

class DeleteTeamRequest extends SaloonRequest
{
    protected ?string $method = Saloon::DELETE;

    protected ?string $connector = DataApiConnector::class;

    public function __construct(public int $teamId)
    {
    }

    public function defineEndpoint(): string
    {
        return '/v1/teams/'.$this->teamId;
    }
}
