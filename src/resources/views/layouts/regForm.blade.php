@extends('main')

@section('addUser')
    <!--Создание фейкового пользователя-->
    <div class="col-10
                no-gutters">
        <div class="border-bottom
                    no-gutters
                    col-12
                    mb-2">
            <p class="text-secondary
                      text-center
                      py-2
                      pb-3
                      m-0
                      h3">Создание фейкового пользователя</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('create_user')}}"
              method="post"
              class="text-secondary
                     border-bottom
                     p-2"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nameInput">Имя</label>
                <input type="text"
                       class="form-control"
                       name="nameInput"
                       id="nameInput"
                       placeholder="Введите имя">
            </div>

            <div class="form-group">
                <label for="userProfilePhoto">Фото</label>
                <div class="userProfilePhoto
                    mb-2">
                    <img src="http://www.bienhealth.com/img/articles/5-genov-forma-chelovecheskogo-litsa.jpg"
                         class="image-fluid"
                         alt="userProfilePhoto">
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="userProfilePhoto" name="userProfilePhoto">
                    <label class="custom-file-label"
                           for="userProfilePhoto">Выберите файл</label>
                </div>
            </div>

            <div class="form-group">
                <label for="dateBirthday">Дата рождения</label>
                <input type="date"
                       id="dateBirthday"
                       name="dateBirthday"
                       class="form-control">
            </div>

            <div class="form-group">
                <label for="userGender">Пол</label>
                <select id="userGender"
                        name="userGender"
                        class="form-control">
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                </select>
            </div>

            <div class="form-group">
                <label for="userCountry">Страна</label>
                <select id="userCountry"
                        name="userCountry"
                        class="form-control">
                @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->country}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="userCity">Город</label>
                <input type="text"
                       id="userCity"
                       name="userCity"
                       class="form-control"
                       placeholder="Укажите город">
            </div>

            <div class="form-group">
                <label for="userAboutYourself">О себе</label>
                <textarea class="form-control"
                          id="userAboutYourself"
                          name="userAboutYourself"
                          rows="3"
                          placeholder="Расскажите немного о себе..."></textarea>
            </div>

            <button class="btn
                   btn-primary
                   btn-success"
                    type="submit"
                    aria-pressed="true">Сохранить</button>
        </form>
    </div>

@endsection()
