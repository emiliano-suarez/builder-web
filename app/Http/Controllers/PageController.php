<?php

namespace App\Http\Controllers;

use App\Material;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function home() {

        $material = new Material();
        $response = $material->getFeaturedItems();

        $materials = "";
        if ('200' == $response->getStatusCode()) {
            $materials = $response->getBody();
            // echo  $materials;
        }

        return view('home', [ 'materials' => json_decode($materials) ]);
    }

}
