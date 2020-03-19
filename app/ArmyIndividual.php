<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArmyIndividual extends Model
{
    protected $guarded = ['army_id'];

    protected $casts = [
        'army_hq_units' => 'array',
        'army_troops_units' => 'array',
        'army_elites_units' => 'array',
        'army_fast_units' => 'array',
        'army_heavy_units' => 'array',
        'army_flyer_units' => 'array',
        'army_transport_units' => 'array',

    ];
    //protected $casts = [
    //    //    //   'email_verified_at' => 'datetime',
    //    //   // ];
}
