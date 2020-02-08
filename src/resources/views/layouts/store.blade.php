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
                       <tr>

                           <th scope="row">{{$loop->iteration}}</th>
                           <td>
                               <a href="{{route('showBook', ['id'=>$book->id])}}">
                               {{$book->name}}
                               </a>
                           </td>
                           <td>
                               <a href="{{route('showBook', ['id'=>$book->id])}}">
                               {{$book->author->first_name . ' ' . $book->author->last_name}}
                               </a>
                           </td>
                           <td>
                               <a href="{{route('showBook', ['id'=>$book->id])}}">
                               {{$book->year}}
                               </a>
                           </td>
                           <td>
                               <a href="{{route('showBook', ['id'=>$book->id])}}">
                               {{$book->publisher->name}}
                               </a>
                           </td>
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
