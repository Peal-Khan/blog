@extends('DashBoard.dashboard')
@section('page-title','About')
@section('content')
    <form class="row g-3" action="{{ route('about_store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="col-md-8">
            <label for="inputImage" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="inputImage">
        </div>
        <div class="col-md-8">
            <label for="inputDesc" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="inputDesc" cols="36" rows="10"
                placeholder="type here..."></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection
