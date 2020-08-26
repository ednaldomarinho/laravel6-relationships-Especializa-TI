<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    public function manyToMany()
    {
        $city = City::where('name', 'Osasco')->get()->first();
        echo "<b>{$city->name}</b><br>";

        $companies = $city->companies;

        foreach ($companies as $company) {
            echo "{$company->name}";
        }
    }
}
