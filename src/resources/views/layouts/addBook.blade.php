@extends('main')

@section('content')
    <div class="container">

    <form action="{{route('create_book')}}" method="post">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="bookName">Title</label>
            <input type="text" class="form-control" id="bookName" name="name" placeholder="Title" value="1111111">
        </div>
        <div class="form-group">
            <label for="bookYear">Year</label>
            <input type="number" class="form-control" id="bookYear" name="year">
        </div>
        <div class="form-group">
            <label for="bookPublisherSelect">Published by </label>
            <select multiple class="form-control" id="bookPublisherSelect" name="publisher_id">
                @foreach($publishers as $publisher)
                    <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="bookAuthorSelect">Author </label>
            <select multiple class="form-control" id="bookAuthorSelect" name="author_id">
                @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->fullName}}</option>
                @endforeach
            </select>
        </div>
            <button class="btn btn-primary" type="submit">Add Book</button>
    </form>
    </div>
@endsection
