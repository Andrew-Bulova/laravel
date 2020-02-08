@extends('main')

@section('content')
    <div class="container">
        <form action="{{route('filter')}}" method="post">
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
                <label for="bookName">Email address</label>
                <input type="text" class="form-control" id="bookName" name="name" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="bookYear">Example select</label>
                <input type="text" size="4" class="form-control" id="bookYear" name="year">
            </div>
            <div class="form-group">
                <label for="bookPublisherSelect">Published by </label>
                <select class="form-control" id="bookPublisherSelect" name="publisher">
                    <option></option>
                    @foreach($publishers as $publisher)
                        <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="bookAuthorSelect">Author </label>
                <select class="form-control" id="bookAuthorSelect" name="author">
                    <option></option>
                    @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->fullName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="publisherOwnerSelect">Owner</label>
                <select class="form-control" id="publisherOwnerSelect" name="owner">
                    <option></option>
                    @foreach($publishers as $publisher)
                        <option value="{{$publisher->owner->id}}">{{$publisher->owner->fullName}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Apply</button>
        </form>
    </div>
@endsection
