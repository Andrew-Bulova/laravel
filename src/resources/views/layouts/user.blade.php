@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Редактирование профиля пользователя</h4></li>
            <li class="list-group-item">
                <form action="@if(isset($user)){{route('user_update', [$user->id])}}
                @else{{route('user_add')}}@endif"
                      method="post">
                @csrf
                <!--Номер телефона-->
                    <div class="form-group">
                        <label for="userTelephoneNumber">Номер телефона</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                               id="userTelephoneNumber" placeholder="Введите номер телефона" name="phone"
                               value="@isset($user){{$user->phone}}@endisset">
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Email-->
                    <div class="form-group">
                        <label for="userEmailNumber">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                               id="userEmailNumber" placeholder="Введите email" name="email"
                               value="@isset($user){{$user->email}}@endisset">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--ФИО-->
                    <div class="form-group">
                        <label for="userName">ФИО Пользователя</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               id="userName" placeholder="Введите имя, фамлию и отчество пользователя"
                               name="name" value="@isset($user){{$user->name}}@endisset">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Должность-->
                    <div class="form-group">
                        <label for="positionUser">Должность пользователя</label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror"
                               id="positionUser" placeholder="Должность пользователя" name="position"
                               value="@isset($user){{$user->position}}@endisset">
                        @error('position')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--О себе-->
                    <div class="form-group">
                        <label for="aboutYourself">О себе</label>
                        <textarea class="form-control @error('about') is-invalid @enderror"
                                  id="aboutYourself" rows="5" placeholder="Расскажите немного о себе..."
                                  name="about">
                                @isset($user){{$user->about}}@endisset
                            </textarea>
                        @error('about')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Кнопка сохранить-->
                    <button class="btn btn-primary btn-block" role="button" aria-pressed="true">СОХРАНИТЬ</button>
                </form>
            </li>
        </ul>
    </div>
@endsection
