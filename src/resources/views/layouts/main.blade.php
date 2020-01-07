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
                <a href="/" class="sidebar__link">Запахи</a>
            </li>
        </ul>
    </div>
    <div class="main">

        <div class="main__wrap" id="primary">
            <h2 class="main__title">Список запахов</h2>
            <a href="add_perfume" data-fancybox="" class="main__button">Добавить запах</a>
            <div class="main__container">
                <table class="main__table ">
                    <tr class=" row  main__inner smells">
                        <th class="main__name">ИД</th>
                        <th class="main__name">Имя</th>
                        <th class="main__name">Slug</th>
                        <th class="main__name">Описание</th>
                        <th class="main__name">Категория</th>
                        <th class="main__name">Большая иконка</th>
                        <th class="main__name">Маленькая иконка</th>
                        <th class="main__name">QR коды</th>
                        <th class="main__name">Дата создания</th>
                        <th class="main__name">Дата обновления</th>
                        <th class="main__name">Действие</th>
                    </tr>
                    @foreach($perfumes as $perfume)
                        <tr class=" row  main__inner main__info smells">
                            <td>{{$perfume->id}}</td>
                            <td>{{$perfume->name}}</td>
                            <td>{{$perfume->slug}}</td>
                            <td>{{$perfume->description}}</td>
                            <td>{{$perfume->category_id}}</td>
                            <td><img src={{"http://localhost:1111/storage/".$perfume->big_img}} alt="Иконка"></td>
                            <td><img src={{"http://localhost:1111/storage/".$perfume->small_img}} alt="Иконка"></td>
                            <td>
                                Чистый:
                                <a target="_blank" download="qr_code_without_logo_gunpowder.png"
                                   href="http://93.119.155.54:1100/files/perfumes/qr/clear/gunpowder.png">
                                    <img src="http://93.119.155.54:1100/img/download.svg" alt="Download">
                                </a><br>

                                С бабочкой:
                                <a target="_blank" download="qr_code_with_logo_gunpowder.png"
                                   href="http://93.119.155.54:1100/files/perfumes/qr/logo/gunpowder.png">
                                    <img src="http://93.119.155.54:1100/img/download.svg" alt="Download">
                                </a><br>

                            </td>
                            <td>{{$perfume->created_at}}</td>
                            <td>{{$perfume->updated_at}}</td>
                            <td class="row main__action">
                                <div><a href="http://localhost:1111/delete/{{$perfume->id}}">
                                        <img src="http://93.119.155.54:1100/img/delete.svg"
                                                                                alt="delete">
                                    </a></div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>



    </div>
</div>
@endsection
