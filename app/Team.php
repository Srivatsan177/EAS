<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;



class Team extends Model
{
    protected $table='teams';

    public $primaryKey='team_id';
    use Rateable;


    // public $timestamps=false;
}
