<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    public function oneToOne()
    {
        //$country = Country::find(1);
        $country = Country::where('name', 'Brazil')->get()->first();
        echo $country->name;
        //$location = $country->location;
        $location = $country->location()->get()->first();
        echo "<hr>Latitude: {$location->latitude}<br>";
        echo "Longitude: {$location->longitude}<hr><br>";
    }

    public function oneToOneInverse()
    {
        
        $latitude = 456;
        $longitude = 654;
        
        //$country = Country::find(1);
        $location = Location::where('latitude', $latitude)
                              ->where('longitude', $longitude)
                              ->get()->first();
        $country = $location->country;
        //$country = $location->country()->get()->first();
        echo $country->name;
    }

    public function oneToOneInsert()
    {
        $dataForm = [
            'name' => 'Uruguai',
            'latitude' => 122,
            'longitude' => 221,
        ];

        $country = Country::create($dataForm);
        //$dataForm['country_id'] = $country->id;
        //$location = Location::create($dataForm);

        $location = new Location;
        $location->latitude = $dataForm['latitude'];
        $location->longitude = $dataForm['longitude'];
        $location->country_id = $country->id;
        $saveLocation = $location->save();

    }
}
