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
                                <th>Constellation's name</th>
                                <th>Symbolism</th>
                                <th>Image</th>
                                <th>Intro</th>
                                <th>Sense</th>
                                <th>Time visible</th>
                                <th>Main Stars</th>
                                <th>Latitudes</th>
                                <th>Created At</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($AEs as $constellation)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $constellation->constellation_name }}</td>
                                    <td>{{ $constellation->symbolism }}</td>
                                    <td>
                                        @php
                                            $image = $constellation->image == NULL ? 'no-image-found.png' : $constellation->image;
                                            $image_url = asset('images/'.$image);
                                        @endphp
                                        <img src="{{ $image_url }}" width="100px" height="100px">
                                    </td>
                                    <td>{{ $constellation->intro }}</td>
                                    <td>{{ $constellation->sense }}</td>
                                    <td>{{ $constellation->time_visible }}</td>
                                    <td>{{ $constellation->main_stars }}</td>
                                    <td>{{ $constellation->latitudes }}</td>
                                    <td>{{ date('d-m-Y : H:i:s', strtotime($constellation->created_at)) }}</td>
                                    <td><a href="{{ route('admin.constellation.edit',['id'=>$constellation->id]) }}">Edit</a></td>
                                    <td><a onclick="return deleteConfirm()" href="{{ route('admin.constellation.delete',['id'=>$constellation->id]) }}">Delete</a></td>
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