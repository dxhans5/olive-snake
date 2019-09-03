<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OptinLink extends Model
{
    protected $table = 'optin_links';

    public function list()
    {
        return $this->hasOne('App\Models\EmailList', 'id', 'email_list_id');
    }
}
