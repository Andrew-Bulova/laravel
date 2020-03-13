@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Редактирование объекта</h4></li>
            <!--Название компании-->
            <li class="list-group-item">{{$entity->name}}</li>
            <li class="list-group-item">
                <form action="{{route('building_update', [$building->getProperty('id')])}}" method="post">
                @csrf
                <!--Название объекта-->
                    <input type="text" class="form-control"
                           id="objectName" name="entity_id" hidden
                           placeholder="Введите название название объекта"
                           value="{{$building->getProperty('entity_id')}}">
                <!--Название объекта-->
                    <div class="form-group">
                        <label for="objectName">Название объекта</label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror"
                               id="objectName" name="name"
                               placeholder="Введите название название объекта" value="{{$building->getProperty('name')}}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Фактический адрес объекта-->
                    <div class="form-group">
                        <label for="objectAddress">Фактический адресс объекта</label>
                        <input type="text" class="form-control @error('actual_address') is-invalid @enderror"
                               id="objectAddress" name="actual_address" value="{{$building->getProperty('actual_address')}}"
                               placeholder="Введите фактический адресс адресс">
                        @error('actual_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Дата ввода объекта в эксплуатацаю-->
                    <div class="form-group">
                        <label for="datepicker">Дата регистрации</label>
                        <input type="text" id="datepicker" name="registration_date"
                               value="{{$building->getProperty('registration_date')}}"
                               class="form-control hasDatepicker @error('registration_date') is-invalid @enderror">
                        @error('registration_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Проведение расчета пожарного риска. Ползунок(чекбокс)-->
                    <div class="form-group @error('fire_risk') is-invalid @enderror">
                        <p class="mb-0">Проводится ли расчет пожарного риска</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fire_risk"
                                   @if($building->getProperty('fire_risk')) checked @endif
                                   id="objectFireAlarm1" value="1">
                            <label class="form-check-label" for="objectFireAlarm1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fire_risk"
                                   @if(!$building->getProperty('fire_risk')) checked @endif
                                   id="objectFireAlarm2" value="0">
                            <label class="form-check-label" for="objectFireAlarm2">
                                Нет
                            </label>
                        </div>
                        @error('fire_risk')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Назначение помещения-->
                    <div class="form-group">
                        <label for="objectAppointment">Назначение для помещения</label>
                        <input type="text" class="form-control @error('appointment') is-invalid @enderror"
                               id="objectAppointment" value="{{$building->getProperty('appointment')}}"
                               placeholder="Введите назначение для помещения" name="appointment">
                        @error('appointment')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Назначение помещения с доп.информацией-->
                    <div class="form-group">
                        <label for="objectAppointmentMoreDetails">Назначение для помещения(подробно)</label>
                        <textarea class="form-control @error('appointment_in_detail') is-invalid @enderror"
                                  id="objectAppointmentMoreDetails" rows="5" name="appointment_in_detail"
                                  placeholder="Расскажите о назначении для помещения более подробно...">{{$building->getProperty('appointment_in_detail')}}</textarea>
                        @error('appointment_in_detail')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Количество этажей-->
                    <div class="form-group">
                        <label for="objectFloorsNumber">Этажность</label>
                        <input type="number" class="form-control @error('storeys') is-invalid @enderror"
                               id="objectFloorsNumber" name="storeys" value="{{$building->getProperty('storeys')}}"
                               placeholder="Введите количество этажей">
                        @error('storeys')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Место расположения помещения-->
                    <div class="form-group">
                        <label for="objectPlace">Расположение помещения</label>
                        <input type="text" class="form-control @error('room_location') is-invalid @enderror"
                               id="objectPlace" name="room_location" value="{{$building->getProperty('room_location')}}"
                               placeholder="Укажите расположение помещения">
                        @error('room_location')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наличие АУТП-->
                    <div class="form-group @error('automated_process_control') is-invalid @enderror">
                        <p class="mb-0">Наличие АУТП</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="automated_process_control"
                                   @if($building->getProperty('automated_process_control')) checked @endif
                                   id="objectAUTP1" value="1">
                            <label class="form-check-label" for="objectAUTP1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="automated_process_control"
                                   @if(!$building->getProperty('automated_process_control')) checked @endif
                                   id="objectAUTP2" value="0">
                            <label class="form-check-label" for="objectAUTP2">
                                Нет
                            </label>
                        </div>
                        @error('automated_process_control')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Хранение ЛВЖ, ГК более 20л.-->
                    <div class="form-group @error('flammable_liquids') is-invalid @enderror">
                        <p class="mb-0">Хранение ЛВЖ, ГК более 20л.</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flammable_liquids"
                                   @if($building->getProperty('flammable_liquids')) checked @endif
                                   id="objectGK1" value="1">
                            <label class="form-check-label" for="objectGK1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('flammable_liquids')) checked @endif
                                   name="flammable_liquids" id="objectGK2" value="0">
                            <label class="form-check-label" for="objectGK2">
                                Нет
                            </label>
                        </div>
                        @error('flammable_liquids')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наличие автозаправки-->
                    <div class="form-group @error('gas_station') is-invalid @enderror">
                        <p class="mb-0">Автозаправка</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('gas_station')) checked @endif
                                   name="gas_station" id="objectGasStation1" value="1">
                            <label class="form-check-label" for="objectGasStation1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('gas_station')) checked @endif
                                   name="gas_station" id="objectGasStation2" value="0">
                            <label class="form-check-label" for="objectGasStation2">
                                Нет
                            </label>
                        </div>
                        @error('gas_station')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Продаются ли автомобили-->
                    <div class="form-group @error('cars_sale_and_exhibition') is-invalid @enderror">
                        <p class="mb-0">Продажа и выставка автомобилей</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('cars_sale_and_exhibition')) checked @endif
                                   name="cars_sale_and_exhibition" id="objectCarsSell1" value="1">
                            <label class="form-check-label" for="objectCarsSell1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('cars_sale_and_exhibition')) checked @endif
                                   name="cars_sale_and_exhibition" id="objectCarsSell2" value="0">
                            <label class="form-check-label" for="objectCarsSell2">
                                Нет
                            </label>
                        </div>
                        @error('cars_sale_and_exhibition')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наличие высоты стеллажей-->
                    <div class="form-group @error('high_shelving') is-invalid @enderror">
                        <p class="mb-0">Наличие высоты стеллажей более 5.5 м</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('high_shelving')) checked @endif
                                   name="high_shelving" id="objectHighRacks1" value="1">
                            <label class="form-check-label" for="objectHighRacks1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('high_shelving')) checked @endif
                                   name="high_shelving" id="objectHighRacks2" value="0">
                            <label class="form-check-label" for="objectHighRacks2">
                                Нет
                            </label>
                        </div>
                        @error('high_shelving')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наличие постоянных рабочих мест-->
                    <div class="form-group @error('permanent_workplace') is-invalid @enderror">
                        <p class="mb-0">Наличие постоянных рабочих мест</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('permanent_workplace')) checked @endif
                                   name="permanent_workplace" id="objectFreeWorkPlaces1" value="1">
                            <label class="form-check-label" for="objectFreeWorkPlaces1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('permanent_workplace')) checked @endif
                                   name="permanent_workplace" id="objectFreeWorkPlaces2" value="0">
                            <label class="form-check-label" for="objectFreeWorkPlaces2">
                                Нет
                            </label>
                        </div>
                        @error('permanent_workplace')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наличие проветривания-->
                    <div class="form-group @error('ventilation') is-invalid @enderror">
                        <p class="mb-0">Наличие постоянных рабочих мест</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('ventilation')) checked @endif
                                   name="ventilation" id="objectVentilationPlaces1" value="1">
                            <label class="form-check-label" for="objectVentilationPlaces1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('ventilation')) checked @endif
                                   name="ventilation" id="objectVentilationPlaces2" value="0">
                            <label class="form-check-label" for="objectVentilationPlaces2">
                                Нет
                            </label>
                        </div>
                        @error('ventilation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наличие СПДЗ-->
                    <div class="form-group @error('smoke_protection_system') is-invalid @enderror">
                        <p class="mb-0">Наличие СПДЗ с межных помещениях, прилегающих к коридрам и холлам</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('smoke_protection_system')) checked @endif
                                   name="smoke_protection_system" id="objectSPDZ1" value="1">
                            <label class="form-check-label" for="objectSPDZ1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('smoke_protection_system')) checked @endif
                                   name="smoke_protection_system" id="objectSPDZ2" value="0">
                            <label class="form-check-label" for="objectSPDZ2">
                                Нет
                            </label>
                        </div>
                        @error('smoke_protection_system')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Расстояние до входа-->
                    <div class="form-group @error('distance_from_far_entry_point_less_then_25m') is-invalid @enderror">
                        <p class="mb-0">Расстояние от дальней точки входа не более 25м</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('distance_from_far_entry_point_less_then_25m')) checked @endif
                                   name="distance_from_far_entry_point_less_then_25m" id="objectExitDistance1" value="1">
                            <label class="form-check-label" for="objectExitDistance1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('distance_from_far_entry_point_less_then_25m')) checked @endif
                                   name="distance_from_far_entry_point_less_then_25m" id="objectExitDistance2" value="0">
                            <label class="form-check-label" for="objectExitDistance2">
                                Нет
                            </label>
                        </div>
                        @error('distance_from_far_entry_point_less_then_25m')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Длина коридоров-->
                    <div class="form-group @error('corridors_length_less_then_15m') is-invalid @enderror">
                        <p class="mb-0">Длина коридоров меньше 15м</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('corridors_length_less_then_15m')) checked @endif
                                   name="corridors_length_less_then_15m" id="objectCorridorLength1" value="1">
                            <label class="form-check-label" for="objectCorridorLength1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('corridors_length_less_then_15m')) checked @endif
                                   name="corridors_length_less_then_15m" id="objectCorridorLength2" value="0">
                            <label class="form-check-label" for="objectCorridorLength2">
                                Нет
                            </label>
                        </div>
                        @error('corridors_length_less_then_15m')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наличие людей в здании-->
                    <div class="form-group @error('people_in_building') is-invalid @enderror">
                        <p class="mb-0">Наличие людей в здании или сооружении</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('people_in_building')) checked @endif
                                   name="people_in_building" id="objectPeoplesCount1" value="1">
                            <label class="form-check-label" for="objectPeoplesCount1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('people_in_building')) checked @endif
                                   name="people_in_building" id="objectPeoplesCount2" value="0">
                            <label class="form-check-label" for="objectPeoplesCount2">
                                Нет
                            </label>
                        </div>
                        @error('people_in_building')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Количество людей больше 50-->
                    <div class="form-group @error('people_more_then_50') is-invalid @enderror">
                        <p class="mb-0">50 и более человек</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('people_more_then_50')) checked @endif
                                   name="people_more_then_50" id="objectBiggestThenFifty1" value="1">
                            <label class="form-check-label" for="objectBiggestThenFifty1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('people_more_then_50')) checked @endif
                                   name="people_more_then_50" id="objectBiggestThenFifty2" value="0">
                            <label class="form-check-label" for="objectBiggestThenFifty2">
                                Нет
                            </label>
                        </div>
                        @error('people_more_then_50')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Количество людей больше 10-->
                    <div class="form-group @error('people_more_then_10') is-invalid @enderror">
                        <p class="mb-0">10 и более человек</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('people_more_then_10')) checked @endif
                                   name="people_more_then_10" id="objectBiggestThenTen1" value="1">
                            <label class="form-check-label" for="objectBiggestThenTen1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('people_more_then_10')) checked @endif
                                   name="people_more_then_10" id="objectBiggestThenTen2" value="0">
                            <label class="form-check-label" for="objectBiggestThenTen2">
                                Нет
                            </label>
                        </div>
                        @error('people_more_then_10')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наличие ночного пребыванию людей-->
                    <div class="form-group @error('night_stay') is-invalid @enderror">
                        <p class="mb-0">Наличие ночного пребывания людей</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('night_stay')) checked @endif
                                   name="night_stay" id="objectNightPeoples1" value="1">
                            <label class="form-check-label" for="objectNightPeoples1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('night_stay')) checked @endif
                                   name="night_stay" id="objectNightPeoples2" value="0">
                            <label class="form-check-label" for="objectNightPeoples2">
                                Нет
                            </label>
                        </div>
                        @error('night_stay')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наличие круглосуточнопребывающих людей-->
                    <div class="form-group @error('round_the_clock_stay') is-invalid @enderror">
                        <p class="mb-0">Наличие круглосуточного пребывания людей</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if($building->getProperty('round_the_clock_stay')) checked @endif
                                   name="round_the_clock_stay" id="objectEverydayPeoples1" value="1">
                            <label class="form-check-label" for="objectEverydayPeoples1">
                                Да
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"
                                   @if(!$building->getProperty('round_the_clock_stay')) checked @endif
                                   name="round_the_clock_stay" id="objectEverydayPeoples2" value="0">
                            <label class="form-check-label" for="objectEverydayPeoples2">
                                Нет
                            </label>
                        </div>
                        @error('round_the_clock_stay')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Кнопка "Сохранить"-->
                    <button class="btn btn-primary btn-block" role="button" aria-pressed="1">СОХРАНИТЬ</button>
                </form>
            </li>
        </ul>
    </div>
@endsection
