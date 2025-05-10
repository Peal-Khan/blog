@extends('DashBoard.dashboard')
@section('page-title','Post/Create')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('post_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Post Title</label>
                            <input type="text" class="form-control" name="title" id="exampleFormControlInput1"
                                placeholder="New Title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Post Heading</label>
                            <input type="text" class="form-control" name="heading" id="exampleFormControlInput2"
                                placeholder="New Heading">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Post Image</label>
                            <input type="file" class="form-control" name="image" id="exampleFormControlInput3"
                                placeholder="New Image">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea4" class="form-label">Post Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" name="description" placeholder="New Ddescription..."
                                rows="8"></textarea>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
