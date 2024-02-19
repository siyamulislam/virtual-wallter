@extends('admin.master')
@section('title')
    Mange Enroll
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary float-start">My Enrolled Package

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Package Name</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Price</th>
                            <th>Applied Date</th>
                            <th>Payment Method</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($enrolls as $enroll)
                            <tr class="">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $enroll->package->title }}</td>
                                <td>{{ $enroll->user->name }}</td>
                                <td>{{ $enroll->user->email }}</td>
                                <td>{{ $enroll->package->price }}</td>
                                <td>{{ $enroll->created_at->format('d-m-Y') }}</td>
                                <td>{{ $enroll->payment_method }}</td>
                                <td>{{ $enroll->status==0?"Rejected":($enroll->status==1?"Pending":"Paid") }}</td>
                                <td class="float-end">

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
