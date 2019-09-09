<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OptinLink extends Model
{
    protected $table = 'optin_links';

    public function funnel()
    {
        return $this->hasOne('App\Models\Funnel', 'id', 'funnel_id');
    }
}
