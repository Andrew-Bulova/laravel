@extends('main')

@section('auth')
    <div class="container main_container">
        <div class="row justify-content-center">
            <div class="col-5 form_authorization">
                <form action="{{route('login')}}" method="post">
                @csrf
                <!--Логин-->
                    <div class="form-group">
                        <label for="inputLogin">EMAIL</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="inputLogin"
                               placeholder="Введите Логин" name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                <!--Пароль-->
                    <div class="form-group">
                        <label for="inputPassword">Пароль</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               id="inputPassword" placeholder="Введите пароль" name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary btn-block" value="АВТОРИЗОВАТЬСЯ">
                </form>
            </div>
        </div>
    </div>
@endsection
