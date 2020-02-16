@extends('main')

@section('content')
    <div class="container">
        @foreach($students as $student)
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">{{$student->id}}</li>
                        <li class="list-group-item">{{$student->first_name}}</li>
                        <li class="list-group-item">{{$student->last_name}}</li>
                        <li class="list-group-item">{{$student->second_name}}</li>
                        <li class="list-group-item">
                            <a class="btn btn-primary" href="{{route('missing', [$student->id])}}" role="button">
                                Добавить погул
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        @endforeach
    </div>
@endsection
