@extends('front.master')
@section('title')
    Home
@endsection
@section('body')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-intervel="100">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}front/img/slider/1.jpg" class="d-block w-100" style="height: 550px"
                     alt="Package Title">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/img/slider/2.jpg" class="d-block w-100" style="height: 550px"
                     alt="Package Title">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/img/slider/3.jpg" class="d-block w-100" style="height: 550px"
                     alt="Package Title">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">All Packages</h2>
                    <div class="row mt-4">
{{--                      @include('front.include.card')--}}
                        @forelse($packages as $package)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{asset($package->image)}}" alt="" class="w-100"
                                         style="height: 250px">
                                    <div class="card-body">
                                        <h4 class="card-title text-success">{{$package->title}}</h4>
                                        <h6>Price: {{$package->price}}tk</h6>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('front.package.details',['slug'=>$package->slug])}}" class="btn btn-success">View details</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h1 class="text-center">No Package Available</h1>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
