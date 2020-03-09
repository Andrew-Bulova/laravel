@extends('side-bar')

@section('content')


    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Редактирование требования пожарной безопасности</h4></li>
            <li class="list-group-item">
                <form action="@if(isset($requirement)){{route('requirement_update', [$requirement->id])}}
                @else{{route('requirement_add')}}@endif"
                      method="post">
                    @csrf
                    <div class="form-group">
                        <!--Название-->
                        <label for="requirementTitle">Название</label>
                        <input type="text" id="requirementTitle"
                               name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="@isset($requirement){{$requirement->title}}@endisset">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="editFireSafety">Редактировать требование ПБ</label>
                        <!--Требование-->
                        <textarea name="description"
                                  class="form-control @error('description') is-invalid @enderror"
                                  id="editFireSafety" rows="5">
                            @isset($requirement){{$requirement->description}}@endisset
                        </textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Кнопка сохранения-->
                    <button class="btn btn-primary btn-block" role="button" aria-pressed="true">СОХРАНИТЬ</button>
                </form>
            </li>
        </ul>
    </div>
@endsection
