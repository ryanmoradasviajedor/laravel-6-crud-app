@extends('books.layout')

@section('content')
    <div class="row">
        <form action="{{route('store_book')}}" method="POST">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div>
                @csrf
                <button type="submit" class="btn btn-primary btn-xs">Submit</button>
            </div>
        </form>
    </div>
@endsection