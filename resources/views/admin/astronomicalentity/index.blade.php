@extends('admin.layoutadmin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></h4>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">List Astronomical Entity</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            {{-- <table id="datatable" class="table table-bordered table-striped"> --}}
                            <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th style="width: 40px">Delete</th>
                                    <th style="width: 40px">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php
                                     dequytable($AEs,0)
                                ?>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
@endsection