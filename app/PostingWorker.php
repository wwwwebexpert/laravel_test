<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostingWorker extends Model
{
    public function Users()
    {
        return $this->hasMany('App\User','id','worker_id')
        ->select('id','name')
        ->where('uuid','=','f5080890-07d4-46dc-8a30-263bbac83481');
    }
}
