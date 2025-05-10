@extends('DashBoard.dashboard');
@section('content')

<form action="{{route('category_store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Category Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="Category_name" aria-describedby="emailHelp" placeholder="Naam De">
        <small id="emailHelp" class="form-text text-muted">naam ko hala.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Image</label>
      <input type="file" class="form-control" name="Category_image" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

