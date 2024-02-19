@extends('admin.master')
@section('title')
    Manage Package
@endsection

@section("link")
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class=" fw-normal display-6 text-secondary float-start">Manage Packages
                            <a href="{{route('packages.create')}}"
                               class="btn btn-primary  float-end">Create</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="packageTable" class="table  table-striped dt-responsive table-hover nowrap w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Short Des</th>
                            <th>Price</th>
                            <th>View</th>
                            <th>Status</th>
                            <th class="">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($packages as $package)
                            <tr >
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{asset($package->image)}}" alt="" style="height: 70px;width: 70px"></td>

                                <td>{{\Illuminate\Support\Str::limit($package->title,30)}}</td>
                                <td>{{\Illuminate\Support\Str::limit($package->short_description,35)}}</td>
                                <td>{{ $package->price }}</td>
                                <td>{{ $package->hit_count }}</td>
                                <td>{{ $package->status==1?"Published":"Unpublished" }}</td>
                                <td class=" ">
                                    @if(auth()->user()->role_type==1)
                                    <a href="{{route('packages.approve',['id'=>$package->id])}}"
                                       class="btn btn-sm {{ $package->status == 1 ? 'btn-secondary' : 'btn-warning' }}"  title="Change Package Status ">
                                            <i class="{{ $package->status == 1 ? 'uil-arrow-up' : 'uil-arrow-down' }}"></i></a>
                                    @endif
                                    <a href="{{route('packages.show',$package->id)}}"
                                       class="btn btn-primary btn-sm">
                                        <i class="uil-eye"></i></a>
{{--                                        @if(auth()->user()->role_type==2)--}}
                                    <a href="{{route('packages.edit',$package->id)}}"
                                       class="btn btn-success btn-sm">
                                            <i class="uil-edit-alt"></i></a>
{{--                                        @endif--}}
                                        <form action="{{route('packages.destroy',$package->id)}}"
                                              method="post" style="display: inline-block"
                                              onsubmit="return confirm('Are you sure to delete this ?')" >
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class=" uil-trash-alt"></i></button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
{{--    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">--}}
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"> </script>
    <script>
        $(document).ready( function () {
            $('#packageTable').DataTable( {
                scrollX:true,
            } );
        } );
    </script>
@endsection


