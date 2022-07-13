@extends('admin.layoutadmin')
@section('content')
@if (Session::has('success'))
<div>
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ Session::get('success') }}</strong>
</div>
@endif
@if (Session::has('errors')) 
<div>
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ Session::get('errors') }}</strong>
</div>
@endif
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></h4>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">List Solar System</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Intro</th>
                                    <th>Ordinal</th>
                                    <th>Weight</th>
                                    <th>Distance</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            @foreach($ss as $planet)
                            <tfoot>
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <th>{{ $planet->name }}</th>
                                    <th>{{ $planet->intro }}</th>
                                    <th>{{ $planet->ordinal }}</th>
                                    <th>{{ $planet->weight }}</th>
                                    <th>{{ $planet->distance }}</th>
                                    
                                    <th><a onclick="return xoa()" href="{{ route('admin.ss.delete',['id'=> $planet->id]) }}">Delete</a></th>
                                    <th><a href="{{ route('admin.ss.edit',$planet->id) }}">Edit</a></th>
                                </tr>
                            </tfoot>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection