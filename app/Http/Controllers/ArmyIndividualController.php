<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArmyIndividual;
use App\Http\Resources\armyIndividual as ArmyIndividualResource;

class ArmyIndividualController extends Controller
{
    public function index($army_id)
    {
        // return new ArmyIndividualResource(ArmyIndividual::where('army_id', $army_id)->findOrFail());
        return new ArmyIndividualResource(ArmyIndividual::where('army_id', 7)->firstOrFail());

    }
}
