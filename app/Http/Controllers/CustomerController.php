<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Offer;
use App\Models\Notice;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function viewpage(){

        $categories= Category::all();
        $recents= Product::all();
        $offers= Offer::all();
        $notices= Notice::all();
        return view('index',compact('categories','recents','offers','notices'));
    }
    public function shoppage(){
        return view('pages/shop');
    }
    public function propage(){
        $prodetails= Product::all();
        return view('pages/pro',compact('prodetails',));
       
    }
}
