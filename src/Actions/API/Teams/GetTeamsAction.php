<?php

namespace ElfFantasy\API\Actions\API\Teams;

use ElfFantasy\API\Http\Integrations\DataApi\Requests\Teams\GetTeamsRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class GetTeamsAction
{
    use AsAction;

    public function handle($options)
    {
        $getTeamsRequest = new GetTeamsRequest();
        $getTeamsRequest->setQuery($options);
        $response = $getTeamsRequest->send();

        $teams = null;

        if($response->successful()) {
            $teams = json_decode($response->body());
        }

        return $teams;
    }
}
