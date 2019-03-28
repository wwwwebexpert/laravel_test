<?php

namespace App\Http\Controllers;
use App\User;
use App\Posting;
use App\Expertise;
use Illuminate\Http\Request;
use DB; 
class UserController extends Controller
{
    /*Function for execute query 1*/
    public function index(){

    
    	$PostingDataQuery1 = Posting::select('id','name','status')->where('status','=','done')->with(['PostingWorkersMatched','PostingWorkersMatched.Users'])->get();
        
    	echo "<pre>"; print_r($PostingDataQuery1);echo "<pre>";die;

    	
    }
    /*Function for execute query 2*/
    public function secondQuery(){

        $PostingDataQuery2 = Posting::select('id','name','status')->where('status','=','available')->with(['PostingWorkers.Users'])->get();
    	
    	echo "<pre>"; print_r($PostingDataQuery2); echo "<pre>";die;
    }

    /*Function for execute query 3*/
    public function thirdQuery(){
        $ExpertiseDataQuery3  = Expertise::select('id','name')->with(['PostingCount'])->get();
    	echo "<pre>";print_r($ExpertiseDataQuery3);die;
    }
}
