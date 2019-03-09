<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;

class cartController extends Controller
{
     public function cart(Request $request, $id)
    {
    	$cart=DB::table('product_details')->where('pro_det_id', $id)->first();
		return view('customer.cartpage')->with('cart', $cart);
    }
  

    public function show(Request $request, $id)
    {
      if(session('id') != null)
      {
      $product=DB::table('product_details')->where('pro_det_id', $id)->first();
      return view('cart.showproduct')->with('product',$product);
     }
      
    }
     public function insertcart(Request $request, $id)
    {
      DB::table('cart')->insert(['productid'=> $request->id,
                    'productname'=> $request->product_name,
                    'price'=> $request->price,
                    'quantity'=>$request->quantity,
                    'total_price'=>$request->price*$request->quantity,
                    'customerid'=>$request->userid
                    ]);

      return redirect()->route('customer.homepage');
      
    }

    public function showcart()
    {
         if(session('id') != null)
        {
            $cart=DB::table('cart')
                ->join('customer','customer.id','=','cart.customerid')
                ->where('cart.customerid','=',session('id'))
               
                ->select('cart.*','customer.id')


                ->get();
          
                return view('cart.show_my_cart')->with('cart', $cart);
              }
        
    }
        
    public function totalbill()
    {
         
        
       
            $a = DB::table('cart') ->where('cart.customerid','=',session('id'))->sum('total_price');
                
               
         
                return view('cart.balance')->with('a', $a);
              
    }
    public function edit(Request $request, $id )
    {

      $cart = DB::table('cart')->where('cart_id', $id)->first();
    
      return view('cart.edit')->with('cart',$cart);
    }
    public function update(Request $request, $id)
    {
        DB::table('cart')
            ->where('cart_id', $id)
            ->update([  'quantity'=> $request->quantity,
                        'price'=>$request->price,
                        'total_price'=>$request->price*$request->quantity
                       ]);


      return redirect()->route('cart.showcart');
    }
    public function destroy(Request $request, $id)
    {
        DB::table('cart')->where('cart_id', $id)->delete();
        //User::destroy($request->uid);

        return redirect()->route('cart.showcart');
    }

     public function confirm(Request $request)
    {

        if(session('id') != null)
        {
            $rows=DB::table('cart')
            ->join('customer','customer.id','=','cart.customerid')
            ->where('cart.customerid','=',session('id'))
            ->select('cart.*', 'customer.id')
                ->get();
                  foreach ($rows as $key => $row) {
                    echo $row->productid;
                    $data[] = [
                                'cart_id' => $row->cart_id,
                                'productid' => $row->productid,
                                'productname' => $row->productname,
                                'price' => $row->price,
                                'picture' => $row->picture,
                                'quantity' => $row->quantity,
                                'total_price' =>  $row->total_price,
                                'customerid'=>$row->customerid
                             ];
                  }
                  DB::table('order')->insert($data); 

                  DB::table('cart') ->where('cart.customerid','=',session('id'))->delete();
           

             
              return redirect()->route('customer.homepage');

             


              }
                
            
                
          
                
        }
         public function showallproduct(Request $request)
         {
            if(session('id') != null)
            {
            $product = DB::table('product_details')->get();
             
            return view('cart.showallproduct')->with('product', $product);
            }
        }

        

        
    
}
