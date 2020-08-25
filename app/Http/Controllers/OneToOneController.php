<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    public function OneToOne()
    {
        //$country = Country::find(1);
        $country = Country::where('name', 'Brazil')->get()->first();
        echo $country->name;
        //$location = $country->location;
        $location = $country->location()->get()->first();
        echo "<hr>Latitude: {$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<hr><br>";
    }
}
