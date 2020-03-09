@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Редактирование отзыва</h4></li>
            <li class="list-group-item">
                <form action="{{route('feedback_update', [$feedback->id])}}" method="post">
                    @csrf
                    <!--Текстовое поле отзыва-->
                    <div class="form-group">
                        <label for="editUser">Отзыв</label>
                        <textarea class="form-control" name="feedback"
                                  id="editUser" rows="5">{{$feedback->feedback}}</textarea>
                    </div>
                    <!--Рейтинг отзыва-->
                    <div class="col">
                        <p>Рейтинг отзыва: {{$feedback->rating}}</p>
                    </div>
                    <!--Кнопка "Сохранить"-->
                    <button class="btn btn-primary btn-block" role="button" aria-pressed="true">СОХРАНИТЬ</button>
                </form>
            </li>
        </ul>
    </div>
@endsection
