@extends('front.master')

@section('title')
    {{$package->slug}}
@endsection

@section('body')
    <section class="py-5" style="min-height: 85vh">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset(($package->image))}}" alt="" style="height: 100px">
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>Package Name:</th>
                            <th>Package Price:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$package->title}}</td>
                            <td>{{$package->price}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 ">
                    <form action="{{route('front.package.order')}}" method="post" class="d-flex">
                    @csrf
                    <div class="  ms-auto" style="max-width: 200px">
                        <label for="" class="">Payment Method</label>
                        <div class="mt-3">
                            <label for=""><input type="radio" name="payment_method" value="cash"> Cash</label><br>
                            <label for=""><input type="radio" name="payment_method" value="ssl"> Stripe</label>
                        </div>
                        <input type="hidden" name="package_id" value="{{$package->id}}">
                        <br>
                        <input type="submit" class="btn btn-success" value="Order This Package">
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
