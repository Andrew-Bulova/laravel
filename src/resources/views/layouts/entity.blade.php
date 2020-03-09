@extends('side-bar')

@section('content')
        <div class="col">
            <ul class="list-group usersList">
                <li class="list-group-item usersHead"><h4>Редактирование юр.лица</h4></li>
                <li class="list-group-item">
                    <form action="{{route('entity_update', [$entity->id])}}" method="post">
                        @csrf
                        <!--Название организации-->
                        <div class="form-group">
                            <label for="userOrganizationName">Название организации</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="userOrganizationName" name="name"
                                   placeholder="Введите название организации" value="{{$entity->name}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--Юридический адрес организации-->
                        <div class="form-group">
                            <label for="userAddress">Юридический адресс</label>
                            <input type="text" class="form-control @error('legal_address') is-invalid @enderror"
                                   id="userAddress" name="legal_address"
                                   placeholder="Введите юридический адресс" value="{{$entity->legal_address}}">
                            @error('legal_address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--ИНН-->
                        <div class="form-group">
                            <label for="userTIN">ИНН</label>
                            <input type="text" class="form-control @error('tin') is-invalid @enderror"
                                   id="userTIN" name="tin"
                                   placeholder="Введите ИНН" value="{{$entity->tin}}">
                            @error('tin')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--Контактное лицо-->
                        <div class="form-group">
                            <label for="userContactPerson">Контактное лицо</label>
                            <input type="text" class="form-control @error('contact_person') is-invalid @enderror"
                                   id="userContactPerson" name="contact_person"
                                   placeholder="Введите контактное лицо" value="{{$entity->contact_person}}">
                            @error('contact_person')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--Должность руководителя-->
                        <div class="form-group">
                            <label for="userHeadPosition">Должность руководителя</label>
                            <input type="text" class="form-control @error('head_position') is-invalid @enderror"
                                   id="userHeadPosition" name="head_position"
                                   placeholder="Введите должнсть руководителя" value="{{$entity->head_position}}">
                            @error('head_position')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--ФИО-->
                        <div class="form-group">
                            <label for="legalUserName">ФИО</label>
                            <input type="text" class="form-control @error('head_name') is-invalid @enderror"
                                   id="legalUserName" name="head_name"
                                   placeholder="Введите фамилию, имя и отчество" value="{{$entity->head_name}}">
                            @error('head_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--Телефон-->
                        <div class="form-group">
                            <label for="legalUserTelephoneNumber">Телефон</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                   id="legalUserTelephoneNumber" name="phone"
                                   placeholder="Введите номер телефона" value="{{$entity->phone}}">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--Ввод Email-->
                        <div class="form-group">
                            <label for="legalUserEmail">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="legalUserEmail" name="email"
                                   placeholder="Введите почту" value="{{$entity->email}}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--Кнопка "Сохранить"-->
                        <button class="btn btn-primary btn-block" role="button" aria-pressed="true">СОХРАНИТЬ</button>
                    </form>
                </li>
            </ul>
        </div>
@endsection
