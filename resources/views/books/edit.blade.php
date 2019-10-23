@extends('books.layout')

@section('content')
    <div class="row">
        <form action="{{route('update_book',$findBook->id)}}" method="POST">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{$findBook->title}}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" value="{{$findBook->description}}">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control" value="{{$findBook->author}}">
            </div>
            <div>
                @csrf
                <button type="submit" class="btn btn-primary btn-xs">Update</button>
            </div>
        </form>
    </div>
@endsection