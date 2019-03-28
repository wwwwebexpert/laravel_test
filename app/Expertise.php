<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    public function PostingExpertises(){
    	 return $this->hasMany('App\PostingExpertise','expertise_id','id');
    }

    public function PostingCount()
	{
	  return $this->hasOne('App\PostingExpertise','expertise_id','id')
	    ->selectRaw('expertise_id, count(posting_id) as posting_count')
	    ->groupBy('expertise_id');
	}

}
