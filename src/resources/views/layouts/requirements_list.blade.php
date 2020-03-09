@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Требования пожарной безопасности</h4></li>
            @foreach($requirements as $requirement)
                <li class="list-group-item">
                    <!--Требование пожарной беопасности-->
                    <h6>{{$requirement->title}}</h6>
                    <p>{{$requirement->description}}</p>
                    <!--Кнопка редактирования-->
                    <a href="{{route('requirement_edit_form', [$requirement->id])}}" class="btn btn-outline-primary"
                       role="button" aria-pressed="true">Редактировать</a>
                    <!--Кнопка удаления-->
                    <a href="{{route('requirement_destroy', [$requirement->id])}}" class="btn btn-outline-danger">
                        Удалить
                    </a>
                </li>
            @endforeach
        </ul>
        <div>{{$requirements->links()}}</div>
    </div>
@endsection
