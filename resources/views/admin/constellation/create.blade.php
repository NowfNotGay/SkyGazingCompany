@extends('admin.layoutadmin')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action=" {{ route('admin.constellation.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Create Constellation</h5>
                        <div class="card-body demo-vertical-spacing demo-only-element">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Constellation's name</span>
                                <input type="text" class="form-control" name="constellation_name" placeholder="Constellation's name" aria-label="name" aria-describedby="basic-addon11" />
                            </div>
        
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Symbolism</span>
                                <input type="text" class="form-control" name="symbolism" placeholder="Symbolism" aria-label="name" aria-describedby="basic-addon11" >
                            </div>

                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Image</span>
                                <input type="file" class="form-control" name="image" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
        
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Intro</span>
                                <textarea type="text" class="form-control" name="intro" placeholder="Intro" aria-label="name" aria-describedby="basic-addon11" ></textarea>>
                            </div>
                            
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Sense</span>
                                <textarea type="text" class="form-control" name="sense" placeholder="Sense" aria-label="name" aria-describedby="basic-addon11" ></textarea>
                            </div>
        
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Time visible</span>
                                <input type="text" class="form-control" name="time_visible" placeholder="Time visible" aria-label="name" aria-describedby="basic-addon11" />
                            </div>
        
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Main Stars</span>
                                <input type="text" class="form-control" name="main_stars" placeholder="Main Stars" aria-label="name" aria-describedby="basic-addon11" />
                            </div>
        
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Right Ascension</span>
                                <input type="text" class="form-control" name="right_ascension" placeholder="Right Ascension" aria-label="name" aria-describedby="basic-addon11" />
                            </div>
        
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Declination</span>
                                <input type="text" class="form-control" name="declination" placeholder="Declination" aria-label="name" aria-describedby="basic-addon11" />
                            </div>
        
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Latitudes</span>
                                <input type="text" class="form-control" name="latitudes" placeholder="Latitudes" aria-label="name" aria-describedby="basic-addon11" />
                            </div>
        
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon11">Atmospheric Pressure</span>
                                <select name="parent">
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
</body>
@endsection