@extends('index')

@section('smells')
    <div class="row content">
        <div class="sidebar">
            <div class="sidebar__heading">
                <img src="http://93.119.155.54:1100/img/avatar.svg" alt="Avatar" class="sidebar__avatar">
                <span>Добро пожаловать, admin</span>
            </div>
            <a class="sidebar__menu"><img src="http://93.119.155.54:1100/img/menu.svg" alt="Menu-open"></a>
            <ul class="sidebar__list">
                <li>
                    <a href="main.html" class="sidebar__link">Запахи</a>
                </li>
            </ul>
        </div>
        <div class="main">

            <div class="main__wrap" id="primary">
                <h2 class="main__title">Добавить запах</h2>
                <div id="modalAdd">
                    <form method="post" id="perfume_form" class="main__add" enctype="multipart/form-data" action="save">
                        @csrf
                        <div class=" main__item">
                            <label class="main__clause">Имя </label>
                            <input id="name" name="name" type="text" class="main__input" placeholder="Введите имя">
                            @error('name')
                            <div class="alert alert-danger" style="color: #761b18; padding-top: 20px; font-size: 11px">
                                <p>{{ $message }}</p>
                            </div>@enderror
                        </div>

                        <div class=" main__item">
                            <label class="main__clause">Slug </label>
                            <input id="slug" name="slug" type="text" class="main__input" placeholder="Введите slug">
                            @error('slug')
                            <div class="alert alert-danger" style="color: #761b18; padding-top: 20px; font-size: 11px">
                                <p>{{ $message }}</p>
                            </div>@enderror
                        </div>
                        <div class=" main__item">
                            <label class="main__clause">Описание </label>
                            <textarea id="description" rows="10" name="description" class="main__input"
                                      placeholder="Введите описание"></textarea>
                            @error('description')
                            <div class="alert alert-danger" style="color: #761b18; padding-top: 20px; font-size: 11px">
                                <p>{{ $message }}</p>
                            </div>@enderror
                        </div>
                        <div class=" main__item">
                            <label id="big_icon_label" class="main__clause">Большая иконка</label>
                            <input id="big_icon" name="big_icon" type="file">
                            @error('big_icon')
                            <div class="alert alert-danger" style="color: #761b18; padding-top: 20px; font-size: 11px">
                                <p>{{ $message }}</p>
                            </div>@enderror
                        </div>
                        <div class=" main__item">
                            <label id="small_icon_label" class="main__clause">Маленькая иконка </label>
                            <input id="small_icon" name="small_icon" type="file">
                            @error('small_icon')
                            <div class="alert alert-danger" style="color: #761b18; padding-top: 20px; font-size: 11px">
                                <p>{{ $message }}</p>
                            </div>@enderror
                        </div>
                        <div class=" main__item">
                            <label class="main__clause">Категория</label>
                            <div class="main__selectBox">
                                <select id="category" name="category_id" class="main__select">
                                    <option value="1"
                                            class="main__clause">Action
                                    </option>
                                    <option value="2"
                                            class="main__clause">Nature
                                    </option>
                                    <option value="3"
                                            class="main__clause">Food
                                    </option>
                                    <option value="5"
                                            class="main__clause">City
                                    </option>
                                    <option value="6"
                                            class="main__clause">Village
                                    </option>
                                    <option value="7"
                                            class="main__clause">Aroma
                                    </option>
                                    <option value="8"
                                            class="main__clause">Flowers
                                    </option>
                                    <option value="11"
                                            class="main__clause">Lifestyle
                                    </option>
                                </select>
                                @error('category_id')
                                <div class="alert alert-danger" style="color: #761b18; padding-top: 20px; font-size: 11px">
                                    <p>{{ $message }}</p>
                                </div>@enderror
                            </div>
                        </div>
                        <div class="row main__item main__location">
                            <button id="save_perfumes_button" type="submit" class="main__save">Сохранить</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
