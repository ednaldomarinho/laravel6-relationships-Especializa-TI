<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class OneToManyController extends Controller
{
    public function oneToMany()
    {
        //$country = Country::where('name', 'Brazil')->get()->first();
        $keySearch = 'a';
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->get();
        echo "<hr><hr>";
        foreach ($countries as $country) {
            echo "<b>$country->name</b>";
            ///$states = $country->states;
            $states = $country->states()->get();
            //$states = $country->states()->where('initials', 'LIKE', '%O%')->get();

            foreach ($states as $state) {
                echo "<hr>{$state->initials} - {$state->name}";
            }
            echo "<hr><hr>";
        }
    }
}