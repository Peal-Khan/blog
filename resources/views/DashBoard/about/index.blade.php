@extends('DashBoard.dashboard')
@section('page-title','About/Index')
@section('content')
    <a href="{{ route('about_create') }}" class="btn btn-success">Create</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($abouts) --}}
                    @foreach ($abouts as $item)
                        <tr>
                            <td scope="row">{{ $item->id }}</td>
                            <td><img src="{{ Storage::url($item->image) }}" alt="Image" width="100"></td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ route('about.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('about_delete', $item->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
