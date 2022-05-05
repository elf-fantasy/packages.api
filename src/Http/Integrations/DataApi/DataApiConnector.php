<?php

namespace ElfFantasy\API\Http\Integrations\DataApi;

use ElfFantasy\API\Services\DataApiTokenService;
use Sammyjo20\Saloon\Http\SaloonConnector;
use Sammyjo20\Saloon\Traits\Plugins\AcceptsJson;

class DataApiConnector extends SaloonConnector
{
    use AcceptsJson;

    /**
     * Register Saloon requests that will become methods on the connector.
     * For example, GetUserRequest would become $this->getUserRequest(...$args)
     *
     * @var array
     */
    protected array $requests = [];

    public function __construct(DataApiTokenService $dataApiTokenService)
    {

    }

    /**
     * Define the base url of the api.
     *
     * @return string
     */
    public function defineBaseUrl(): string
    {
        return env('DATA_API_URL', 'http://api.elf-data.local');
    }

    /**
     * Define the base headers that will be applied in every request.
     *
     * @return string[]
     */
    public function defaultHeaders(): array
    {
        return [
            'Authorization' => 'Bearer '.session('access_token'),
        ];
    }
}
