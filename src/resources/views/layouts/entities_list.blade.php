@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Список юридических лиц</h4></li>
            @foreach($entities as $entity)
                <li class="list-group-item">
                    <div class="row justify-content-between">
                        <!--Название компании-->
                        <div class="col-6">
                            <a href="{{route('entity_edit_form',[$entity->id])}}"
                               class="btn" aria-pressed="true">{{$entity->name}}</a>
                        </div>
                        <!--Группа кнопок-->
                        <div class="col-4 btn-group btn-group" role="group" aria-label="Basic example">
                            <!--Кнопка "Список объектов"-->
                            <a href="{{route('building_list', [$entity->id])}}}"
                               class="btn btn-outline-primary" role="button" aria-pressed="true">Список объектов</a>
                            <!--Кнопка удалить-->
                            <a href="{{route('entity_destroy', [$entity->id])}}" class="btn btn-outline-danger">Удалить</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
