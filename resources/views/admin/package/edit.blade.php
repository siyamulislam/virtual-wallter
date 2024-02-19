@extends('admin.master')
@section('title')
    Edit Package
@endsection
@section('body')
    <div class="row">
        <div class="col-md-10 py-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto float-start">Edit Package</h3>
                    <a href="{{route('packages.index')}}" class="btn btn-primary float-end">Manage</a>
                </div>
                <div class="card-body">
                    <form action="{{route('packages.update',$package->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control" value="{{$package->title }}"/>
                                @error('title') <span class="text-danger">{{$errors->first('title')}}</span> @enderror
                            </div>

                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Price</label>
                            <div class="col-md-8">
                                <input type="number" name="price"  value="{{$package->price }}" class="form-control"/>
                            </div>
                        </div>


                        <div class="row mt-1">
                            <label for="" class="col-md-4">Short Description</label>
                            <div class="col-md-8">
                                <textarea name="short_description" id="" class="form-control" cols="30"
                                          rows="2">{{$package->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Long Description</label>
                            <div class="col-md-8">
                                <textarea name="long_description" id="" class="form-control" cols="30"
                                          rows="3">{{$package->long_description }}</textarea>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image"/> <br>
                                <img src="{{asset($package->image)}}"   alt="" style="height: 70px" width="70px">
                                <br> @error('image') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success " value="Update Package"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@section( 'script')--}}
{{--    <script>--}}
{{--        $(document).on('change', '#category_id', function () {--}}
{{--            let categoryId = $(this).val();--}}
{{--            // alert(categoryId);--}}
{{--            $.ajax({--}}
{{--                url: "/get-sub-category-by-category-id/"+categoryId,--}}
{{--                --}}{{--url:"{{route("ggfgf")}}",--}}
{{--                url: "/get-sub-category-by-category-id",--}}
{{--                // method: "GET",--}}
{{--                method: "POST",--}}
{{--                dataType: "JSON",--}}
{{--                data:{category_id:categoryId},--}}
{{--                success: function (response) {--}}
{{--                    console.log(response);--}}

{{--                    var option = '';--}}
{{--                    option += '<option  class="text-muted">Select a sub Category</option>';--}}
{{--                    $.each(response, function (index, value) {--}}
{{--                        option += '<option value="'+value.id+'">'+value.name+'</option>';--}}
{{--                    })--}}
{{--                    $('#subCategory').empty().append(option); //empty akta delete kore--}}
{{--                    // $('#subCategory').empty().append(option);  //remove full element delete kore--}}
{{--                    // $.eah(response, (key,value))--}}
{{--                }--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}

{{--@endsection--}}



