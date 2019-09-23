<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='teams';

    public $primaryKey='team_id';

    // public $timestamps=false;
}
