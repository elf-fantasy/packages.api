<?php

namespace ElfFantasy\API\Actions\API\Locations;

use ElfFantasy\API\Http\Integrations\DataApi\Requests\Locations\DeleteLocationRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class DeleteLocationAction
{
    use AsAction;

    public function handle($id)
    {
        $deleteLocationRequest = new DeleteLocationRequest((int) $id);
        $deleteLocationRequest->setQuery([
            'id'       => $id,
        ]);
        $deleteLocationRequest->send();
    }
}
