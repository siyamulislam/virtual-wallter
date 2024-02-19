@extends('admin.master')
@section('title')
    Manage User
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
                        <div class=" fw-normal display-6 text-secondary float-start">Manage Document
{{--                            <a href="{{route('users.create')}}"--}}
                               class="btn btn-primary  float-end">Create</a>
                        </div>
                    </div>
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
            $('#userTable').DataTable( {
                scrollX:true,
            } );
        } );
    </script>
@endsection


