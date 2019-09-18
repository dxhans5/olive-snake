<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Funnel extends Model
{
    protected $table = 'funnels';

    public function email1()
    {
        return $this->hasOne('App\Models\Email', 'id', 'stage_1_email_id');
    }

    public function email2()
    {
        return $this->hasOne('App\Models\Email', 'id', 'stage_2_email_id');
    }

    public function email3()
    {
        return $this->hasOne('App\Models\Email', 'id', 'stage_3_email_id');
    }

    public function email4()
    {
        return $this->hasOne('App\Models\Email', 'id', 'stage_4_email_id');
    }
}
