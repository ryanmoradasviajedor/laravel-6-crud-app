@extends('books.layout')

@section('content')
    <div class="row">
        <a href="{{route('create_book')}}" class="btn btn-primary btn-xs">Create Book</a>
        <table class="table table-hover">
            <thead>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Actions</th>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <a href="{{route('edit_book',$book->id)}}" class="btn btn-info btn-xs">Edit</a>
                        <a href="{{route('delete_book',$book->id)}}" class="btn btn-danger btn-xs">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

