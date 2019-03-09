<?php

namespace App\Http\Controllers;
use App\Catagory;
use App\Sub_Catagory;
use App\Product;
use App\Product_Details;
use App\Manufacturer;
use App\Supplier;

use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        return view('employee.create');
    }

     public function store(Request $request)
    {

        return redirect()->route('home.index');
    }
    public function edit(Request $request)
    {

        return view('employee.edit');
    }
    public function update(Request $request)
    {

        return redirect()->route('home.index');
    }

    public function show(Request $request)
    {
        //$user=User::find($id);
        return view('employee.show');
    }
    public function delete(Request $request)
    {
        //$user=User::find($id);
        return view('employee.delete');
    }





    public function index()
    {
        $cat = Catagory::count();
        $sub_cat = Sub_Catagory::count();
        $supp = Supplier::count();
        $man = Manufacturer::count();
        $pro = Product::count();
        $pd = Product_Details::count();



        return view('employee.index')
                ->withCat($cat)
                ->withScat($sub_cat)
                ->withSupp($supp)
                ->withMan($man)
                ->withPro($pro)
                ->withPd($pd);
    }






    public function addCatagory()
    {
        return view('employee.addCatagory');
    }

    public function addSubCatagory()
    {
        return view('employee.addSubCatagory');
    }

     public function addManufacturer()
    {
        return view('employee.addManufacturer');
    }

    public function addSupplier()
    {
        return view('employee.addSupplier');
    }

    public function addProduct()
    {
        return view('employee.addProduct');
    }

    public function addProductDetails()
    {
        return view('employee.addProductDetails');
    }

    public function faddProductDetails($id)
    {
        return view('employee.faddProductDetails');
    }

    public function showCatagory()
    {
        return view('employee.showCatagory');
    }

    public function modifyCatagory($id)
    {
        return view('employee.modifyCatagory');
    }

    public function showSubCatagory()
    {
        return view('employee.showSubCatagory');
    }

    public function modifySubCatagory($id)
    {
        return view('employee.modifySubCatagory');
    }

    public function showManufacturer()
    {
        return view('employee.showManufacturer');
    }

     public function modifyManufacturer()
    {
        return view('employee.modifyManufacturer');
    }

     public function showProduct()
    {
        return view('employee.showProduct');
    }


     public function showSupplier()
    {
        return view('employee.showSupplier');
    }

     public function modifySupplier($id)
    {
        return view('employee.modifySupplier');
    }

     public function modifyProduct($id)
    {
        return view('employee.modifyProduct');
    }








    
}
