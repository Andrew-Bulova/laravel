@extends('main')

@section('content')
    <div class="container">
        <div class="row align-items-start">
            <a class="btn btn-primary" href="{{route('edit_book', ['id'=>$books[0]->id])}}" role="button">Change book</a>
            <a class="btn btn-primary" href="{{route('delete_book', ['id'=>$books[0]->id])}}" role="button">Delete book</a>
        </div>
    </div>
    <div class="container">
    <table class="table">
        @foreach($books as $book)
        <thead>
        <tr>
            <th>Название книги</th>
            <th>{{$book->name}}</th>
        </tr>
        <tr>
            <th>Год издания</th>
            <th>{{$book->year}}</th>
        </tr>
        <tr>
            <th>Автор</th>
            <th>{{$book->author->fullName}}</th>
        </tr>
        <tr>
            <th>Издатель</th>
            <th>{{$book->publisher->name}}</th>
        </tr>
        </thead>
    </table>
    </div>
    @endforeach
@endsection
