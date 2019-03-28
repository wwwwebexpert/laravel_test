<?php

namespace App\Http\Controllers;
use App\User;
use App\Posting;
use App\Expertise;
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    /*Function for execute query 1
    Task 1: Query the lists of postings that John Doe is matched and posting is done
    */
    public function index(){
    
    	$PostingDataQuery = Posting::select('id','name','status')->where('status','=','done')->with(['PostingWorkersMatched','PostingWorkersMatched.Users'])->get();
        
    	echo "<pre>"; print_r($PostingDataQuery);echo "<pre>";die;
    	
    }
    /*Function for execute query 2
    Task 2 : Query the lists of postings that John Doe is fully available: 
    */
    public function secondQuery(){
        $PostingDataQuery = Posting::select('id','name','status')->where('status','=','available')->with(['PostingWorkers.Users'])->get();
    	
    	echo "<pre>"; print_r($PostingDataQuery); echo "<pre>";die;
    }

    /*Function for execute query 3
    Task 3: Create an Eloquent ORM where it provides the (id, name,posting_count) of all expertises
    */
    public function thirdQuery(){
        $ExpertiseDataQuery  = Expertise::select('id','name')->with(['PostingCount'])->get();
    	echo "<pre>";print_r($ExpertiseDataQuery);die;
    }
}
