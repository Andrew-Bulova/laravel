@extends('main')

@section('content')
   <div class="container">
       <div class="row align-items-start">
           <a class="btn btn-primary" href="{{route('add_book')}}" role="button">Add book</a>
           <a class="btn btn-primary" href="{{route('filter_form')}}" role="button">Filter</a>
       </div>
       <div class="row align-items-start">
           <table class="table table-hover">
               <thead>
               <tr>
                   <th scope="col">#</th>
                   <th scope="col">Книга</th>
                   <th scope="col">Автор</th>
                   <th scope="col">Год</th>
                   <th scope="col">Издательство</th>
               </tr>
               </thead>
               <tbody>
               <div class="container">

                   @foreach($books as $book)
                       @php
                           /** @var app\BookModel $book*/
                       @endphp
                       {{--                {{var_dump($book)}}--}}
                       {{--                {{die()}}--}}
                       <tr>
                           <th scope="row">{{$loop->iteration}}</th>
                           <td>{{$book->name}}</td>
                           <td>{{$book->author->first_name . ' ' . $book->author->last_name}}</td>
                           <td>{{$book->year}}</td>
                           <td>{{$book->publisher->name}}</td>
                       </tr>
                   @endforeach
               </div>
               </tbody>
           </table>
       </div>
       <div class="row align-items-start">
           {{$books->links()}}
       </div>
   </div>
@endsection
