@extends('layouts.master')
@section('title','Shop')
@section('content')
<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"> All Products</span></h2>
        <div class="row px-xl-5">
        @foreach($prodetails  as $prodetail)
        <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{asset('/images/'.$prodetail->image)}}" alt="">
                               
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="{{route('details',$prodetail->id)}}">{{$prodetail->pro_name }}</a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>{{$prodetail->price }}</h5><h6 class="text-muted ml-2"></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
    </div>
    <!-- Products End -->
    @endsection