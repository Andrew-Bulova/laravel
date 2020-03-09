@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Список подрядчиков</h4></li>
            @foreach($contractors as $contractor)
                <li class="list-group-item">
                    <!--Имя подрядчика-->
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <a href="{{route("contractor_edit_form", [$contractor->id])}}" class="btn"
                               aria-pressed="true">{{$contractor->name}}</a>
                        </div>
                        <div class="col-4 btn-group btn-group" role="group" aria-label="Basic example">
                            <!--Кнопка "Список отзывов"-->
                            <a href="{{route('feedback_list', [$targetType, $contractor->id])}}"
                               class="btn btn-outline-primary"
                               role="button" aria-pressed="true">Список отзывов</a>
                            <!--Кнопка "Удалить"-->
                            <a href="{{route('contractor_destroy', [$contractor->id])}}" type="button"
                               class="btn btn-outline-danger">Удалить</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
