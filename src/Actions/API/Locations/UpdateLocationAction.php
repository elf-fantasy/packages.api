<?php

namespace ElfFantasy\API\Actions\API\Locations;

use ElfFantasy\API\Http\Integrations\DataApi\Requests\Locations\UpdateLocationRequest;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateLocationAction
{
    use AsAction;

    public function handle(Request $request, $id)
    {
        $updateLocationRequest = new UpdateLocationRequest((int) $id);
        $updateLocationRequest->setQuery([
            'id'       => $id,
            'name'     => $request->get('name'),
            'city'     => $request->get('city'),
            'capacity' => $request->get('capacity'),
        ]);
        $updateLocationRequest->send();
    }
}
