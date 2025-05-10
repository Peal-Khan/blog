@extends('DashBoard.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="">
                <a href="{{ route('post_create') }}" class="btn btn-warning">Cteate Post</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($abouts) --}}
                    @foreach ($posts as $item)
                        {{-- @dd($item->title_1); --}}
                        <tr>
                            <td scope="row">{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->heading }}</td>
                            <td>{{ $item->image }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <div class="but" style="display: flex; justify-content: space-between;" >
                                    <a href="{{ route('post_edit', $item->id) }}" class="btn btn-success">Edit</a>
                                    <form action="">
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
