@extends('side-bar')

@section('content')
    <div class="col">
        <ul class="list-group usersList">
            <li class="list-group-item usersHead"><h4>Редактирование данных подрядчика</h4></li>
            <li class="list-group-item">
                <form action="{{route('contractor_update', [$contractor->id])}}"
                      method="post" enctype="multipart/form-data">
                    @csrf
                    <!--Номер телефона-->
                    <div class="form-group">
                        <label for="contractorTelephoneNumber">Номер телефона по которому зарегестрировался
                            подрядчик</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                               id="contractorTelephoneNumber" value="{{$contractor->phone}}"
                               placeholder="Введите номер телефона" name="phone">
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Наименование организации-->
                    <div class="form-group">
                        <label for="contractorName">Наименование организации(или имя эксперта)</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               id="contractorName" name="name" value="{{$contractor->name}}"
                               placeholder="Введите название организации">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Загружаемое фото или лого-->
                    <div class="form-group">
                        <p class="mb-2">Загрузите фото или лого эксперта</p>
                        <div class="row">
                            <div class="col browsImg mb-2 align-self-center">
                                <a href="#bigLogoPic"
                                   data-toggle="modal">
                                    <img class="img-fluid" src="{{$contractor->photo}}" alt="logo">
                                </a>
                                <div id="bigLogoPic" class="modal fade">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <!-- Заголовок модального окна -->
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×
                                                </button>
                                            </div>
                                            <!-- Основное содержимое модального окна -->
                                            <div class="row justify-content-center">
                                                <div class="col-auto">
                                                    <div class="modal-body">
                                                        <img class="img-fluid"
                                                             src="{{$contractor->photo}}" alt="logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-file">
                                    <input type="file" name="photo" value="{{$contractor->photo}}"
                                           class="custom-file-input @error('photo') is-invalid @enderror"
                                           id="contractorLogo" >
                                    <label class="custom-file-label" for="contractorLogo">Загрузить</label>
                                    @error('photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Юридический адрес-->
                    <div class="form-group">
                        <label for="contractorAddress">Юридический адрес или адрес эксперта</label>
                        <input type="text" value="{{$contractor->legal_address}}" name="legal_address"
                               class="form-control @error('legal_address') is-invalid @enderror"
                               id="contractorAddress" placeholder="Введите юридический адресс">
                        @error('legal_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Фактический адрес-->
                    <div class="form-group">
                        <label for="contractorFactAddress">Фактический адрес или адрес эксперта</label>
                        <input type="text" value="{{$contractor->actual_address}}" name="actual_address"
                               class="form-control @error('actual_address') is-invalid @enderror"
                               id="contractorFactAddress" placeholder="Введите фактический адресс">
                        @error('actual_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Дата регистрации-->
                    <div class="form-group">
                        <label for="datepicker">Дата регистрации</label>
                        <input type="text" id="datepicker" name="registration_date"
                               value="{{$contractor->registration_date}}"
                               class="form-control hasDatepicker @error('registration_date') is-invalid @enderror">
                        @error('registration_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--ИНН-->
                    <div class="form-group">
                        <label for="contractorINN">ИНН</label>
                        <input type="text"  name="tin" value="{{$contractor->tin}}" placeholder="Введите ИНН"
                               class="form-control @error('tin') is-invalid @enderror" id="contractorINN">
                        @error('tin')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--Лицензия МЧС-->
                    <p class="mb-2">Лицензия мчс</p>
                    <div class="row">
                        <div class="col browsImg mb-2 align-self-center">
                            <a href="#bigContractorLicenseMCSPic"
                               data-toggle="modal">
                                <img class="img-fluid" src="{{$contractor->mes_license_photo}}" alt="logo">
                            </a>
                            <div id="bigContractorLicenseMCSPic" class="modal fade" style="display: none;"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Заголовок модального окна -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                        </div>
                                        <!-- Основное содержимое модального окна -->
                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                                <div class="modal-body">
                                                    <img class="img-fluid"
                                                         src="{{$contractor->mes_license_photo}}"
                                                         alt="contractorLicenseMCS">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <p class="license">Фото лицензии</p>
                            <div class="custom-file">
                                <input type="file" name="mes_license_photo"
                                       class="custom-file-input @error('mes_license_photo') is-invalid @enderror"
                                       id="contractorLicenseMCS">
                                <label class="custom-file-label" for="contractorLicenseMCS">Загрузить фото</label>
                                @error('mes_license_photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="contractorLicenseMSCNumber">Номер</label>
                            <input type="text" name="mes_license_number" value="{{$contractor->mes_license_number}}"
                                   class="form-control @error('mes_license_number') is-invalid @enderror"
                                   id="contractorLicenseMSCNumber"
                                   placeholder="Введите номер лицензии">
                            @error('mes_license_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="datepicker1">Дата регистрации</label>
                            <input type="text" id="datepicker1" name="mes_license_date"
                                   value="{{$contractor->mes_license_date}}"
                                   class="form-control hasDatepicker @error('mes_license_date') is-invalid @enderror">
                            @error('mes_license_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Аккредитация НОР-->
                    <p class="mb-2">Аккредитация НОР</p>
                    <div class="row">
                        <div class="col browsImg mb-2 align-self-center">
                            <a href="#bigLicenseAccPic"
                               data-toggle="modal">
                                <img class="img-fluid" src="{{$contractor->ira_accreditation_photo}}" alt="logo">
                            </a>
                            <div id="bigLicenseAccPic" class="modal fade">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Заголовок модального окна -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                        </div>
                                        <!-- Основное содержимое модального окна -->
                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                                <div class="modal-body">
                                                    <img class="img-fluid"
                                                         src="{{$contractor->ira_accreditation_photo}}"
                                                         alt="licenseAcc">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <p class="license">Фото лицензии</p>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('ira_accreditation_photo')
                                    is-invalid @enderror" id="contractorLicenseACC"
                                       name="ira_accreditation_photo">
                                <label class="custom-file-label" for="contractorLicenseACC">Загрузить фото</label>
                                @error('ira_accreditation_photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="contractorLicenseACCNumber">Номер</label>
                            <input type="text" class="form-control @error('ira_accreditation_number')
                                is-invalid @enderror" id="contractorLicenseACCNumber" name="ira_accreditation_number"
                                   value="{{$contractor->ira_accreditation_number}}"
                                   placeholder="Введите номер аккредитации">
                            @error('ira_accreditation_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="datepicker2">Дата регистрации</label>
                            <input type="text" id="datepicker2" value="{{$contractor->ira_accreditation_date}}"
                                   class="form-control hasDatepicker @error('ira_accreditation_date')
                                       is-invalid @enderror" name="ira_accreditation_date">
                            @error('ira_accreditation_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Электролаборатрия-->
                    <p class="mb-2">Электролаборатория</p>
                    <div class="row justify-content-lg-start">
                        <div class="col browsImg mb-2">
                            <a href="#bigContractorLicenseLABPic"
                               data-toggle="modal">
                                <img class="img-fluid" src="{{$contractor->electric_laboratory_license_photo}}"
                                     alt="logo">
                            </a>
                            <div id="bigContractorLicenseLABPic" class="modal fade">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Заголовок модального окна -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                        </div>
                                        <!-- Основное содержимое модального окна -->
                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                                <div class="modal-body">
                                                    <img class="img-fluid"
                                                         src="{{$contractor->electric_laboratory_license_photo}}"
                                                         alt="contractorLicenseLAB">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <p class="license">Фото лицензии</p>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('electric_laboratory_license_photo')
                                    is-invalid @enderror" name="electric_laboratory_license_photo"
                                       id="contractorLicenseLAB">
                                <label class="custom-file-label" for="contractorLicenseLAB">Загрузить фото</label>
                                @error('electric_laboratory_license_photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="contractorLicenseLABNumber">Номер</label>
                            <input type="text" class="form-control @error('electric_laboratory_license_number')
                                is-invalid @enderror" id="contractorLicenseLABNumber"
                                   placeholder="Введите номер электролаборатории"
                                   name="electric_laboratory_license_number"
                                   value="{{$contractor->electric_laboratory_license_number}}">
                            @error('electric_laboratory_license_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="datepicker3">Дата получения</label>
                            <input type="text" id="datepicker3" name="electric_laboratory_license_date"
                                   class="form-control hasDatepicker @error('electric_laboratory_license_date')
                                       is-invalid @enderror" value="{{$contractor->electric_laboratory_license_date}}">
                            @error('electric_laboratory_license_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Лицензия на образовательную деятельность-->
                    <p class="mb-2">Лицензия на образовательную деятельность</p>
                    <div class="row justify-content-lg-start">
                        <div class="col browsImg mb-2">
                            <a href="#bigContractorLicenseADUCPic"
                               data-toggle="modal">
                                <img class="img-fluid" src="{{$contractor->educational_license_photo}}" alt="logo">
                            </a>
                            <div id="bigContractorLicenseADUCPic" class="modal fade">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <!-- Заголовок модального окна -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                ×
                                            </button>
                                        </div>
                                        <!-- Основное содержимое модального окна -->
                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                                <div class="modal-body">
                                                    <img class="img-fluid"
                                                         src="{{$contractor->educational_license_photo}}"
                                                         alt="contractorLicenseADUC">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <p class="license">Фото лицензии</p>
                            <div class="custom-file">
                                <input type="file" name="educational_license_photo"
                                       class="custom-file-input @error('educational_license_photo')
                                           is-invalid @enderror" id="contractorLicenseADUC">
                                <label class="custom-file-label" for="contractorLicenseADUC">Загрузить фото</label>
                                @error('educational_license_photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="contractorLicenseADUCNumber">Номер лицензии</label>
                            <input type="text" value="{{$contractor->educational_license_number}}"
                                   class="form-control @error('educational_license_number') is-invalid @enderror"
                                   id="contractorLicenseADUCNumber"
                                   placeholder="Введите номер лицензии" name="educational_license_number">
                            @error('educational_license_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="datepicker4">Дата регистрации</label>
                            <input type="text" id="datepicker4" value="{{$contractor->educational_license_date}}"
                                   class="form-control hasDatepicker @error('educational_license_date')
                                       is-invalid @enderror" name="educational_license_date">
                            @error('educational_license_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!--Текстовое поле допольнительной информации-->
                    <div class="form-group">
                        <label for="contractorInformation">Информация</label>
                        <textarea class="form-control @error('information') is-invalid @enderror"
                                  id="contractorInformation" rows="5" name="information"
                                  placeholder="Дополнительная информация">{{$contractor->information}}</textarea>
                        @error('information')
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
