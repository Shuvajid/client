@extends('layouts.master')
@section('title','Online Shop')
@section('content')

     <!-- Shop Detail Start -->
     <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="" class="" data-ride="">
                    <div class="">
                        <div class="">
                            <img class="w-100 h-100" src="{{asset('/images/'.$product->image)}}" alt="Image">
                        </div>
                       
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{$product->pro_name}}</h3>
                   
                    <h3 class="font-weight-semi-bold mb-4">{{$product->price}}.00 BDT</h3>
                    <p class="mb-4">{{$product->description}}</p>
                    <div class="d-flex mb-3">
                        
                    </div>
                    
                    <div class="d-flex align-items-center mb-4 pt-2">
                        
                        <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart</button>
                    </div>
                    
                </div>
            </div>
        </div>
       
    </div>
    <!-- Shop Detail End -->





@endsection