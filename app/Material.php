<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Material extends Model
{

    public function getFeaturedItems($max = 50) {

        $client = new Client([
            'base_uri' => env('API_URI'),
        ]);

        return $client->request('GET', 'material/all');
    }

}
