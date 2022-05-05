<?php

namespace ElfFantasy\API\Actions\API\Teams;

use ElfFantasy\API\Http\Integrations\DataApi\Requests\Teams\UpdateTeamRequest;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateTeamAction
{
    use AsAction;

    public function handle(Request $request, $id)
    {
        $updateTeamRequest = new UpdateTeamRequest((int) $request->get('real_id'));
        $updateTeamRequest->setQuery([
            'id'          => $request->get('real_id'),
            'name'        => $request->get('name'),
            'location_id' => $request->get('location_id'),
        ]);
        $response = $updateTeamRequest->send();
    }
}
