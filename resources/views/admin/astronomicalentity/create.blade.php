@extends('admin.layoutadmin')
@section('content')
    <form action="{{Route('admin.astronomicalentity.store')}}" method="post">
        @csrf
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Create Astronomical Entity</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            <div class="input-group">
                                {{-- <span class="input-group-text" id="basic-addon11">@</span> --}}
                                <input type="text" class="form-control" name="name" placeholder="Name" aria-label="name" aria-describedby="basic-addon11" />
                            </div>
    
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect03" name="parent" aria-label="Example select with button addon">
                                    <option value="0">----------Root------------</option>
                                        <?php dequy($AEs,0) ?>
                                </select>
                            </div>
                            <div class="demo-inline-spacing">
                                <button type="submit" class="btn btn-outline-primary">Create</button>
                                <button type="reset" class="btn btn-outline-secondary">Delete</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
 