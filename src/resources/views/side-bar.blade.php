@extends('main')

@section('side-bar')

    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-3">
                <ul class="nav flex-column">
                    <!--Список пользователей-->
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('user_list')}}">Список пользователей</a>
                    </li>
                    <!--Список подрядчиков-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contractor_list')}}">Список подрядчиков</a>
                    </li>
                    <!--Список требований ПБ-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('requirement_list')}}">Список требований ПБ</a>
                    </li>
                    <!--Возврат к полю авторизации-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Выход</a>
                    </li>
                </ul>
            </div>
                    @yield('content')
        </div>
    </div>
@endsection
