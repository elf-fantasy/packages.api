<?php

namespace ElfFantasy\API\Services;

use Illuminate\Support\Facades\Http;

class DataApiTokenService
{
    public function __construct()
    {
        if (! session('access_token')) {
            $this->getToken();
        } else {
            $response = Http::withHeaders([
                'Accept'        => 'application/json',
                'Authorization' => 'Bearer '.session('access_token'),
            ])->get(config('elffantasy-api.url').'/v1/auth/check');

            if (! $response->successful()) {
                $this->getToken();
            }
        }
    }

    private function getToken()
    {
        $response = Http::asForm()->withHeaders(['accept' => 'application/json'])->post(config('elffantasy-api.url').'/v1/oauth/token', [
            'username'      => config('elffantasy-api.credentials.username'),
            'password'      => config('elffantasy-api.credentials.password'),
            'client_id'     => config('elffantasy-api.credentials.client_id'),
            'client_secret' => config('elffantasy-api.credentials.client_secret'),
            'grant_type'    => 'password',
            'scope'         => '',
        ]);

        if ($response->successful()) {
            $data = json_decode($response->body(), false, 512, JSON_THROW_ON_ERROR);;
            session(['access_token' => $data->access_token]);
        }
    }
}
