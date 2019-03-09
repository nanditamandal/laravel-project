<?php

namespace App\Http\Controllers;
use App\Http\Requests\employeRequest;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Validator;
use App\Employe;

class employecontroller extends Controller
{
	public function create(Request $request)
    {
        if(session('admin') != null)
        {
		  return view('employe.create');
         }
	}


	 public function store(employeRequest $request)
    {
      
		
		DB::table('employes')->insert(['userid'=> $request->userid,
										'firstname'=> $request->firstname,
										'lastname'=> $request->lastname,
										'password'=>$request->password,
										'email' =>$request->email]);

   

    	return redirect()->route('home.index');
    }
    public function edit(Request $request, $id )
    {

    	//$employe=Employe::find($id);
        //return view('employe.edit')->with('employe',$employe);
		$employe = DB::table('employes')->where('id', $id)->first();
		
    	return view('employe.edit')->with('employe',$employe);
    }
    public function update(Request $request, $id)
    {
        if(session('admin') != null)
        {
            DB::table('employes')
                ->where('id', $id)
                ->update([  'userid'=> $request->userid,
                            'firstname'=> $request->firstname,
                            'lastname'=> $request->lastname,
                            'password'=>$request->password,
                             'email' =>$request->email]);


        	return redirect()->route('home.index');
     }
    }

    public function show(Request $request)
    {
        if(session('admin') != null)
        {
        $employe = DB::table('employes')->get();
         
        return view('employe.show')->with('employe', $employe);
        }
    }

    public function delete(Request $request, $id)
    {
        if(session('admin') != null)
        {
            $employe = DB::table('employes')->where('id', $id)->first();
            
        	return view('employe.delete')->with('employe',$employe);
        }
    }
    public function destroy(Request $request, $id)
    {
        DB::table('employes')->where('id', $id)->delete();
        //User::destroy($request->uid);

        return redirect()->route('employe.show');
    }

     

}
