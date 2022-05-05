<?php

namespace ElfFantasy\API\Actions\API\Locations;

use ElfFantasy\API\Http\Integrations\DataApi\Requests\Locations\StoreLocationRequest;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreLocationAction
{
    use AsAction;

    public function handle(Request $request)
    {
        $storeLocationRequest = new StoreLocationRequest();
        $storeLocationRequest->setQuery([
            'name'     => $request->get('name'),
            'city'     => $request->get('city'),
            'capacity' => $request->get('capacity'),
        ]);
        $storeLocationRequest->send();
    }
}
