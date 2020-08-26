<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class OneToManyController extends Controller
{
    public function oneToMany()
    {
        //$country = Country::where('name', 'Brazil')->get()->first();
        $keySearch = 'a';
        //$countries = Country::where('name', 'LIKE', "%{$keySearch}%")->get();
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();
        echo "<hr><hr>";
        foreach ($countries as $country) {
            echo "<b>$country->name</b>";
            //$states = $country->states()->get();
            $states = $country->states;            
            //$states = $country->states()->where('initials', 'LIKE', '%O%')->get();

            foreach ($states as $state) {
                echo "<hr>{$state->initials} - {$state->name}";
            }
            echo "<hr><hr>";
        }
    }

    public function manyToOne()
    {
        $stateName = 'Berlin';
        $state = State::where('name', $stateName)->get()->first();
        echo "State: <b>{$state->name}</b>";
        $country = $state->country;
        echo "<br>Country: {$country->name}";
    }

    public function oneToManyTwo()
    {
        $keySearch = 'a';
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();
        echo "<hr><hr>";
        foreach ($countries as $country) {
            echo "<b>$country->name</b>";
            $states = $country->states;    

            foreach ($states as $state) {
                echo "<hr>{$state->initials} - {$state->name} - cidades:";

                foreach ($state->cities as $city) {
                    echo "  {$city->name}, ";
                }
            }
            echo "<hr><hr>";
        }
    }

    public function oneToManyInsert()
    {        
        $dataForm = [
            'name' => 'Ceará',
            'initials' => 'CE',
        ];
        
        
        $country = Country::find(1);
        $insertState = $country->states()->create($dataForm);
        var_dump($insertState->name);
    }

    public function oneToManyInsertTwo()
    {        
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA',
            'country_id' => '1' ,       
        ];
        
        
        $insertState = State::create($dataForm);
        var_dump($insertState->name);
    }

    public function hasManyThrough()
    {
        $country = Country::find(1);
        echo "<b>{$country->name}:</b> <br>";

        $cities = $country->cities;

        foreach ($cities as $city) {
            echo " {$city->name}, ";
        }

        echo "<br><b>Total de cidades:</b> {$cities->count()}";
    }
}