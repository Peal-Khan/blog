@extends('DashBoard.dashboard')
@section('content')
    <div class="row">
        {{-- @dd($post->id) --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('post_update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Post Title</label>
                            <input type="text" class="form-control" value="{{ $post->title }}" name="title"
                                id="exampleFormControlInput1" placeholder="post Title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Post Heading</label>
                            <input type="text" class="form-control" value="{{ $post->heading }}" name="heading"
                                id="exampleFormControlInput2" placeholder="post Heading">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Post Image</label>
                            <input type="file" class="form-control" name="image" id="exampleFormControlInput3"
                                placeholder="post Image">

                            <div class="">
                                <img src="{{ $post->image }}" alt="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea4" class="form-label">Post Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" name="description" rows="8">{{ $post->description }}</textarea>
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
