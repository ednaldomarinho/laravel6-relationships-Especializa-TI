<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class PolymorficController extends Controller
{
    public function polymorfic()
    {
        echo "test";
    }

    public function polymorficInsert()
    {
        
        /*
        $city = City::where('name', 'Guarulhos')->get()->first();
        echo $city->name;

        $comment = $city->comments()->create([
            'description' => "New Comment {$city->name}-" . date('YmdHis'),
        ]);

        var_dump($comment->description);

        */

        /*
        $state = State::where('name', 'Tocantins')->get()->first();
        echo $state->name;

        $comment = $state->comments()->create([
            'description' => "A New Comment {$state->name}-" . date('YmdHis'),
        ]);

        var_dump($comment->description);
        */

        $country = Country::where('name', 'Brazil')->get()->first();
        echo $country->name;

        $comment = $country->comments()->create([
            'description' => "A Little Comment for {$country->name}-" . date('YmdHis'),
        ]);

        var_dump($comment->description);
    }
}
