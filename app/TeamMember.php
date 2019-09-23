<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table='team_members';

    public $primaryKey='uid';

    public $timestamps=false;
}
