<?php

namespace ElfFantasy\API\Actions\API\Locations;

use ElfFantasy\API\Http\Integrations\DataApi\Requests\Locations\GetLocationsRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class GetLocationsAction
{
    use AsAction;

    public function handle($options)
    {
        $getLocationsRequest = new GetLocationsRequest();
        $getLocationsRequest->setQuery($options);
        $response = $getLocationsRequest->send();

        $locations = null;

        if ($response->successful()) {
            $locations = json_decode($response->body());
        }

        return $locations;
    }
}
