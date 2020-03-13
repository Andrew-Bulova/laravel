@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Список объеков юр.лица</h4></li>
            @foreach($buildings as $building)
                <li class="list-group-item">
                    <div class="row justify-content-between">
                        <!--Название компании-->
                        <div class="col-6">
                            <a href="{{route('building_edit_form', [$building->id])}}" class="btn" aria-pressed="true">
                                {{$building->name}}</a>
                        </div>
                        <!--Кнопка "Удалить"-->
                        <div class="col-2">
                            <a href="{{route('building_destroy', [$building->id])}}" type="button"
                               class="btn btn-outline-danger btn-block">Удалить</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
