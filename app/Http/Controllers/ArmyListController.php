<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArmyList;
use App\Http\Resources\armyIndividual as ArmyIndividualResource;
use App\Http\Resources\armyList as ArmyListResource;

class ArmyListController extends Controller
{
    public function index()
    {
        return new ArmyListResource(ArmyList::all());
    }

    public function show($id)
    {
        return new ArmyListResource(ArmyListResource::findOrFail($id));
    }
}
