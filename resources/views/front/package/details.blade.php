@section('title')
    Package Details
@endsection

@extends('front.master')

@section('title')
    {{$package->slug}}
@endsection

@section('body')
    <section class="pt-4">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between ">
                        <h4 class="px-5">Package Details</h4>
                        <div class=" px-5">
                            <ol class="breadcrumb m-0"><li class="breadcrumb-item active">Package Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <!-- Package image -->
                                    <a href="javascript: void(0);" class="text-center d-block mb-4">
                                        <img src="{{asset($package->image)}}" class="img-fluid" style="max-width: 280px;" alt="Package-img" />
                                    </a>
                                    <div class="d-lg-flex d-none justify-content-center">
                                        <a href="javascript: void(0);">
                                            <img src="{{asset($package->image)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Package-img" />
                                        </a>
                                        <a href="javascript: void(0);" class="ms-2">
                                            <img src="{{asset($package->image)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Package-img" />
                                        </a>
                                        <a href="javascript: void(0);" class="ms-2">
                                            <img src="{{asset($package->image)}}" class="img-fluid img-thumbnail p-2" style="max-width: 75px;" alt="Package-img" />
                                        </a>
                                    </div>

                                    <!-- Package View -->
                                    <div class="my-4">
                                        <h6 >Total View: {{$package->hit_count}}</h6>
                                    </div>

                                </div> <!-- end col -->
                                <div class="col-lg-7">
                                    <form class="ps-lg-4">
                                        <!-- Package title -->
                                        <h1 class="mt-0 text-success">{{$package->title}}</h1>

                                        <!-- Package price -->
                                        <div class="mt-3">
                                            <h6 class="font-14">Package Price:</h6>
                                            <h3> ${{$package->price}}</h3>
                                        </div>
                                        <!-- Enroll -->
                                        <div class="mt-4">
                                            <a href="{{route('front.checkout-page',['slug'=>$package->slug])}}" class="btn btn-success ">Enroll Now</a>
                                        </div>


                                        <!-- Package description -->
                                        <div class="mt-4">
                                            <h6 class="font-14">Description:</h6>
                                            <p>{{$package->short_description}}</p>

                                            <h5 class="mt-2">Package Rating </h5>
                                            <p style="font-size: 25px">
                                                <span class="text-warning">&#9733;</span>
                                                <span class="text-warning">&#9733;</span>
                                                <span class="text-warning">&#9733;</span>
                                                <span class="text-warning">&#9733;</span>
                                                <span class="text-warning">&#9733;</span>
                                            </p>
                                            <br>
                                            <h5 class="mt-2">More Details:</h5>

                                            {!!$package->long_description!!}
                                        </div>
                                    </form>
                                </div> <!-- end col -->
                            </div> <!-- end row-->

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->
        </div>
    <section/>
@endsection
