@extends('admin.layoutadmin')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
    @endif
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></h4>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">List Constellation</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Observatory's name</th>
                                    <th>Location</th>
                                    <th>Intro</th>
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                @foreach ($AEs as $observatory)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $observatory->observatory_name }}</td>
                                        <td>{{ $observatory->location }}</td>
                                        <td>{{ $observatory->intro }}</td>
                                        <td>{{ date('d-m-Y : H:i:s', strtotime($observatory->created_at)) }}</td>
                                        <td><a href="{{ route('admin.observatory.edit',['id'=>$observatory->id]) }}">Edit</a></td>
                                        <td><a onclick="return deleteConfirm()" href="{{ route('admin.observatory.delete',['id'=>$observatory->id]) }}">Delete</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</body>
@endsection