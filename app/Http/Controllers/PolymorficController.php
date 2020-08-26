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
        
        $city = City::where('name', 'Guarulhos')->get()->first();
        echo "<b>{$city->name}</b><br>";
        $comments = $city->comments()->get();

        foreach ($comments as $comment) {
           echo "{$comment->description}<hr>";
        }

        $state = State::where('name', 'Tocantins')->get()->first();
        echo "<b>{$state->name}</b><br>";
        $comments = $state->comments()->get();

        foreach ($comments as $comment) {
           echo "{$comment->description}<hr>";
        }

        $country = Country::where('name', 'Germany')->get()->first();
        echo "<b>{$country->name}</b><br>";
        $comments = $country->comments()->get();

        foreach ($comments as $comment) {
           echo "{$comment->description}<hr>";
        }
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
