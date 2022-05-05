<?php

namespace ElfFantasy\API\Actions\API\Players;

use ElfFantasy\API\Http\Integrations\DataApi\Requests\Players\GetPlayersRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class GetPlayersAction
{
    use AsAction;

    public function handle($options)
    {
        $getPlayersRequest = new GetPlayersRequest();
        $getPlayersRequest->setQuery($options);
        $response = $getPlayersRequest->send();

        $players = null;

        if($response->successful()) {
            $players = json_decode($response->body());
        }

        return $players;
    }
}
