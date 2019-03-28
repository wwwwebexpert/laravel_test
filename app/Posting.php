<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    public function Users()
    {
        return $this->hasMany('App\User','uuid','uuid');
    }
    public function PostingWorkers()
    {
        return $this->hasMany('App\PostingWorker','posting_id','id');
    }

    public function PostingWorkersMatched()
    {
        return $this->PostingWorkers()->where('status','=','matched');
    }
    
}
