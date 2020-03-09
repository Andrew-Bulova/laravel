@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Список отзывов</h4></li>
            @foreach($feedback_list as $feedback)
                <li class="list-group-item">
                    <!--Дата отзыва-->
                    <div class="col">
                        <h6>Дата отзыва</h6>
                        <p>{{$feedback->updated_at}}</p>
                    </div>
                    <!--Отзыв-->
                    <div class="col">
                        <h6>Отзыв</h6>
                        <p>{{$feedback->feedback}}</p>
                    </div>
                    <!--Кнопка "Редактировать отзыв"-->
                    <a href="{{route('feedback_edit_form', [$feedback->id])}}" class="btn btn-outline-primary"
                       role="button" aria-pressed="true">Редактировать отзыв</a>
                    <!--Кнопка "Удалить"-->
                    <a href="{{route('feedback_deleting', [$feedback->id])}}" class="btn btn-outline-danger">Удалить</a>
                </li>
            @endforeach
        </ul>
        <div>{{$feedback_list->links()}}</div>
    </div>
@endsection
