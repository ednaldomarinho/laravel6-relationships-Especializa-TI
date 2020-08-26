<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    public function manyToMany()
    {
        $city = City::where('name', 'São Paulo')->get()->first();
        echo "<b>{$city->name}</b><br>";

        $companies = $city->companies;

        foreach ($companies as $company) {
            echo "{$company->name}";
        }
    }

    public function manyToManyInverse()
    {
        $company = Company::where('name', 'Especializa TI')->get()->first();
        echo "<b>{$company->name}</b><br>";

        $cities = $company->cities;

        foreach ($cities as $city) {
            echo "{$city->name}, ";
        }
    }
}
