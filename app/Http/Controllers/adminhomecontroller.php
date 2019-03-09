<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminhomecontroller extends Controller
{
    public function index(Request $request){
    	if(session('admin') != null)
    	{
    	return view('admin.home');
    }
    }

    public function search(Request $request){
    	
    	if($request->ajax())
 
		{
			
			 
			$employe=DB::table('employes')
							->where('firstname','like','%'.$request->search.'%')
							->get();
			
			if($employe)
			 
			{
			  
      				return response()->json($employe, 200);
      				
			}
			else
			{
				return response()->json(['msg'=>'no result found'], 404);
			}
			
		}
			 
	}		 
 
    //}
}
