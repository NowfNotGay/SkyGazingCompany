@extends('admin.layoutadmin')
@section('content')
@if ($errors->any())
    <div> 
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('admin.ss.store') }}" enctype="multipart/form-data">
    @csrf

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Create Solar System</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Name</span>
                        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Intro</span>
                        <textarea type="text" class="form-control" name="intro" placeholder="Intro" aria-label="name" aria-describedby="basic-addon11" ></textarea>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Ordinal</span>
                        <input type="text" class="form-control" name="ordinal" placeholder="Ordinal" aria-label="name" aria-describedby="basic-addon11" />
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Weight</span>
                        <input type="text" class="form-control" name="weight" placeholder="Weight" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Distance</span>
                        <input type="text" class="form-control" name="distance" placeholder="Distance" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Element</span>
                        <input type="text" class="form-control" name="element" placeholder="Element" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Temperature</span>
                        <input type="text" class="form-control" name="temperature" placeholder="Temperature" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Year Of Formation</span>
                        <input type="text" class="form-control" name="year_of_formation" placeholder="Year Of Formation" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Lifespan</span>
                        <input type="text" class="form-control" name="lifespan" placeholder="Lifespan" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <select class="form-select" id="inputGroupSelect03" name="status_life" aria-label="Example select with button addon">
                        <option selected="">Status Life</option>
                        <option value="1">Life</option>
                        <option value="0">No life</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Atmospheric Pressure</span>
                        <input type="text" class="form-control" name="atmospheric_pressure" placeholder="Atmospheric Pressure" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Sidereal Rotation Period Sun</span>
                        <input type="text" class="form-control" name="sidereal_rotation_period_sun" placeholder="Sidereal Rotation Period Sun" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Sidereal Rotation Period (Itself)</span>
                        <input type="text" class="form-control" name="sidereal_rotation_period_itself" placeholder="Sidereal Rotation Period (Itself)" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        {{-- <label>Hình ảnh</label> --}}
                        <span class="input-group-text" id="basic-addon11">Image</span>
                        <input type="file" class="form-control" name="image" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
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

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Create Solar System</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Name</span>
                        <input type="text" class="form-control" name="name" placeholder="Name" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Intro</span>
                        <textarea type="text" class="form-control" name="intro" placeholder="Intro" aria-label="name" aria-describedby="basic-addon11" ></textarea>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Ordinal</span>
                        <input type="text" class="form-control" name="ordinal" placeholder="Ordinal" aria-label="name" aria-describedby="basic-addon11" />
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Weight</span>
                        <input type="text" class="form-control" name="weight" placeholder="Weight" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Distance</span>
                        <input type="text" class="form-control" name="distance" placeholder="Distance" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Element</span>
                        <input type="text" class="form-control" name="element" placeholder="Element" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Temperature</span>
                        <input type="text" class="form-control" name="temperature" placeholder="Temperature" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Year Of Formation</span>
                        <input type="text" class="form-control" name="year_of_formation" placeholder="Year Of Formation" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Lifespan</span>
                        <input type="text" class="form-control" name="lifespan" placeholder="Lifespan" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <select class="form-select" id="inputGroupSelect03" name="status_life" aria-label="Example select with button addon">
                        <option selected="">Status Life</option>
                        <option value="1">Life</option>
                        <option value="0">No life</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Atmospheric Pressure</span>
                        <input type="text" class="form-control" name="atmospheric_pressure" placeholder="Atmospheric Pressure" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Sidereal Rotation Period Sun</span>
                        <input type="text" class="form-control" name="sidereal_rotation_period_sun" placeholder="Sidereal Rotation Period Sun" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon11">Sidereal Rotation Period (Itself)</span>
                        <input type="text" class="form-control" name="sidereal_rotation_period_itself" placeholder="Sidereal Rotation Period (Itself)" aria-label="name" aria-describedby="basic-addon11" />
                    </div>

                    <div class="input-group">
                        {{-- <label>Hình ảnh</label> --}}
                        <span class="input-group-text" id="basic-addon11">Image</span>
                        <input type="file" class="form-control" name="image" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <div class="demo-inline-spacing">
                        <button type="submit" class="btn btn-outline-primary">Create</button>
                        <button type="reset" class="btn btn-outline-secondary">Delete</button>
                    </div>
            </div>
        </div>
    </div>
</div>