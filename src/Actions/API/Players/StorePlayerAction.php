<?php

namespace ElfFantasy\API\Actions\API\Players;

use ElfFantasy\API\Http\Integrations\DataApi\Requests\Players\StorePlayerRequest;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class StorePlayerAction
{
    use AsAction;

    public function handle(Request $request)
    {
        $storePlayerRequest = new StorePlayerRequest();
        $storePlayerRequest->setQuery([
            'name'     => $request->get('name'),
            'position' => $request->get('position'),
            'number'   => $request->get('number'),
            'team_id'  => $request->get('team_id'),
        ]);
        $storePlayerRequest->send();
    }
}
