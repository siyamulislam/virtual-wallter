@extends('admin.master')
@section('title')
    Edit Package
@endsection
@section('body')
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                           <li class="breadcrumb-item active">Package Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Package Details</h4>
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
                            </div> <!-- end col -->
                            <div class="col-lg-7">
                                <form class="ps-lg-4">
                                    <!-- Package title -->
                                    <h3 class="mt-0">{{$package->title}}<a href="{{route('packages.edit',$package->id)}}" class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                                    <p class="mb-1">Added Date: 09/12/2018</p>
                                    <p class="mb-1">Package Duration: {{$package->total_hour}}</p>
                                    <p class="mb-1">Starting: {{$package->starting_date}}</p>
                                    <p class="mb-1">Ending: {{$package->ending_date}}</p>
                                    <p class="font-16">
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                        <span class="text-warning mdi mdi-star"></span>
                                    </p>

                                    <!-- Package stock -->
                                    <div class="mt-3">
                                        <h4><span class="badge badge-success-lighten">Instock</span></h4>
                                    </div>

                                    <!-- Package description -->
                                    <div class="mt-4">
                                        <h6 class="font-14">Package Price:</h6>
                                        <h3> ${{$package->price}}</h3>
                                    </div>

                                    <!-- Enroll -->
                                    <div class="mt-4">
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-success ms-2"><i class="mdi mdi-cart me-1"></i> Enroll Now</button>
                                        </div>
                                    </div>

                                    <!-- Package description -->
                                    <div class="mt-4">
                                        <h6 class="font-14">Description:</h6>
                                        <p>{{$package->short_description}}</p>
                                        <br>
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
    <!-- content -->

@endsection

@section( 'script')
    <script>
        $(document).on('change', '#category_id', function () {
            let categoryId = $(this).val();
            // alert(categoryId);
            $.ajax({
                url: "/get-sub-category-by-category-id/" + categoryId,
                url: "/get-sub-category-by-category-id",
                // method: "GET",
                method: "POST",
                dataType: "JSON",
                data: {category_id: categoryId},
                success: function (response) {
                    console.log(response);

                    var option = '';
                    option += '<option  class="text-muted">Select a sub Category</option>';
                    $.each(response, function (index, value) {
                        option += '<option value="' + value.id + '">' + value.name + '</option>';
                    })
                    $('#subCategory').empty().append(option);
                }
            })
        });
    </script>

@endsection



