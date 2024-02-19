@extends('admin.master')
@section('title')
    Add Package
@endsection
@section('body')
    <div class="row">
        <div class="col-md-10 py-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto float-start">Add Package</h3>
                    <a href="{{route('packages.index')}}" class="btn btn-primary float-end">Manage</a>
                </div>
                <div class="card-body">
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <span class="text-danger">{{$error}}</span> <br>--}}
{{--                        @endforeach--}}
                    <form action="{{route('packages.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Title</label>
                            <div class="col-md-8">
                                <input type="text" name="title" class="form-control"/>
                                @error('title') <span class="text-danger">{{$errors->first('title')}}</span> @enderror

                            </div>

                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Price</label>
                            <div class="col-md-8">
                                <input type="number" name="price" class="form-control"/>
                            </div>
                        </div>

                      
                        
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Short Description</label>
                            <div class="col-md-8">
                                <textarea name="short_description" id="" class="form-control" cols="30"
                                          rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <label for="" class="col-md-4">Long Description</label>
                            <div class="col-md-8">
                                <textarea name="long_description" id="" class="form-control" cols="30"
                                          rows="3"></textarea>
                            </div>
                        </div>

                        {{--                        <div class="row mt-1">--}}
                        {{--                            <label  class="col-md-4">Status</label>--}}
                        {{--                            <div class="col-md-8">--}}
                        {{--                                <label ><input type="radio" name="status" value="1" checked > Published</label>--}}
                        {{--                                <label class="ms-2"><input type="radio" name="status" value="0" > UnPublished</label>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        <div class="row mt-1">
                            <label for="" class="col-md-4">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image"/>
                                <br> @error('image') <span class="text-danger">{{$message}}</span> @enderror

                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success " value="Create Package"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

