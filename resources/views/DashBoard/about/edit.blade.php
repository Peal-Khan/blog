@extends('DashBoard.dashboard')
@section('page-title', 'About/Edit')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('about_update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Iamge</label>
                            <input type="file" class="form-control" value="{{ $about->image }}" name="image"
                                id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea4" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" name="description" rows="8">{{ $about->description }} </textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
