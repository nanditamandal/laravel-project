<?php

namespace App\Http\Controllers;
use App\Http\Requests\customerRequest;

use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use Validator;



class customerController extends Controller
{
    public function create(Request $request)
    {
		return view('customer.create');
	}
	public function store(customerRequest $request)
    {
      
			DB::table('customer')->insert([
										'firstname'=> $request->firstname,
										'lastname'=> $request->lastname,
										'password'=>$request->password,
										'email' =>$request->email,
										'mobile'=>$request->mobile,
										'address'=>$request->address

									]);


    	return redirect()->route('login.index');
		
		
		
    }

     public function homepage(Request $request)
    {
    	if(session('id') != null)
    	{
			return view('customer.homepage');
		}
	}

	public function search(Request $request){
    	
    	if($request->ajax())
 
		{
			
			 
			$product=DB::table('product_details')
							->where('product_name','like','%'.$request->search.'%')
							->get();
			
			if($product)
			 
			{
			  
      				return response()->json($product, 200);
      				
			}
			else
			{
				return response()->json(['msg'=>'no result found'], 404);
			}
			
		}
			 
	}
}
