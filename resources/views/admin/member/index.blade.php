@extends('admin.layoutadmin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></h4>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">List Member</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                    <th>Authorities</th>
                                    <th>Created</th>
                                    <th>Dlete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            @foreach($members as $member)
                            <tfoot>
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <th>{{ $member->email }}</th>
                                    <th>@if ($member->id==1) SuperAdmin @elseif($member->level==1) Admin @else Member @endif</th>
                                    <th>{{ date('d-m-Y : H:i:s',strtotime($member->created_at)) }}</th>
                                    <th><a onclick="return deleteConfirm()" href="{{ route('admin.member.delete',['id'=> $member->id]) }}">Delete</a></th>
                                    <th><a href="{{ route('admin.member.edit',['id'=> $member->id]) }}">Edit</a></th>
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