<?php

namespace ElfFantasy\API\Actions\API\Teams;

use ElfFantasy\API\Http\Integrations\DataApi\Requests\Teams\StoreTeamRequest;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreTeamAction
{
    use AsAction;

    public function handle(Request $request)
    {
        $storeTeamRequest = new StoreTeamRequest();
        $storeTeamRequest->setQuery([
            'name'        => $request->get('name'),
            'location_id' => $request->get('location_id'),
        ]);
        $storeTeamRequest->send();
    }
}
