@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Все пользователи</h4></li>
            @foreach($users as $user)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('user_edit_form', [$user->id])}}" class="btn"
                           aria-pressed="true">{{$user->name}}</a>
                    </div>
                    <div class="col-6 btn-group btn-group" role="group" aria-label="Basic example">
                        <!--Кнопка "список отзывов"-->
                        <a href="{{route('feedback_list', [$targetType,$user->id])}}"
                           class="btn btn-outline-primary btn" role="button" aria-pressed="true">Список отзывов</a>
                        <!--Кнопка "список юр.лиц"-->
                        <a href="{{route('entity_list', [$user->id])}}"
                           class="btn btn-outline-primary btn" role="button" aria-pressed="true">Список юр.лиц</a>
                        <!--Кнопка "удалить"-->
                        <a href="{{route('user_deleting', [$user->id])}}" type="button" class="btn btn-outline-danger">Удалить</a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <div>{{$users->links()}}</div>
    </div>
@endsection
