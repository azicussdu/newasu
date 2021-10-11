@extends('layouts.system')
@section('title', 'Добавление')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Добавление</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Добавление</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <a href="{{ route('student.index') }}"><button type="button" class="btn btn-primary">Назад</button></a>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Личные данные</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-document-tab" data-toggle="pill" href="#custom-tabs-four-document" role="tab" aria-controls="custom-tabs-four-document" aria-selected="false">Документы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-contact-tab" data-toggle="pill" href="#custom-tabs-four-contact" role="tab" aria-controls="custom-tabs-four-contact" aria-selected="false">Контактная информация</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-profession-tab" data-toggle="pill" href="#custom-tabs-four-profession" role="tab" aria-controls="custom-tabs-four-profession" aria-selected="false">Сведения о специальности</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-education-tab" data-toggle="pill" href="#custom-tabs-four-education" role="tab" aria-controls="custom-tabs-four-education" aria-selected="false">Сведения об образовании</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-musa-tab" data-toggle="pill" href="#custom-tabs-four-musa" role="tab" aria-controls="custom-tabs-four-musa" aria-selected="false">Личные достижения</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-musa-tab" data-toggle="pill" href="#custom-tabs-four-musa" role="tab" aria-controls="custom-tabs-four-musa" aria-selected="false">Приказы по движению обучающегося</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-musa-tab" data-toggle="pill" href="#custom-tabs-four-musa" role="tab" aria-controls="custom-tabs-four-musa" aria-selected="false">Сведения о трудоустройстве выпускника</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-musa-tab" data-toggle="pill" href="#custom-tabs-four-musa" role="tab" aria-controls="custom-tabs-four-musa" aria-selected="false">Льготы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-musa-tab" data-toggle="pill" href="#custom-tabs-four-musa" role="tab" aria-controls="custom-tabs-four-musa" aria-selected="false">Прочее</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header p-2">
                                                            <ul class="nav nav-pills">
                                                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Ф.И.О.</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Прежняя ФИО (в случае изменения)</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Загрузка фото</a></li>
                                                            </ul>
                                                        </div><!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="tab-content">
                                                                <div class="active tab-pane" id="activity">
                                                                    <form class="form-horizontal" action="{{ route('student.store') }}" method="post">
                                                                        @csrf
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Фамилия</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control {{ $errors->has('lastname') ? 'is-invalid':'' }}" id="inputName" placeholder="Фамилия">
                                                                                @error('lastname')
                                                                                <span id="" class="error invalid-feedback">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Имя</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="lastname" value="{{ old('firstname') }}" class="form-control {{ $errors->has('firstname') ? 'is-invalid':'' }}" id="inputName" placeholder="Имя">
                                                                                @error('firstname')
                                                                                <span id="" class="error invalid-feedback">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Отчество</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="patronymic" value="{{ old('patronymic') }}" class="form-control" id="inputName" placeholder="Отчество">

                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">ИИН</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="iin" value="{{ old('iin') }}" class="form-control {{ $errors->has('iin') ? 'is-invalid':'' }}" id="iin">
                                                                                @error('iin')
                                                                                <span id="" class="error invalid-feedback">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>

                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Дата рождения</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="date" name="birthdate" value="{{ old('birthdate') }}" class="form-control {{ $errors->has('birthdate') ? 'is-invalid':'' }}" id="inputName" placeholder="Дата рождения">
                                                                                @error('birthdate')
                                                                                <span id="" class="error invalid-feedback">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Национальность</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="nationality_id" id="" class="form-control select2" style="width: 100%;">
                                                                                    <option selected="selected">Выберите национальность</option>
                                                                                    @foreach($nationalities as $nationality)
                                                                                        <option value="{{ $nationality->id }}" {{ old('nationality_id')==$nationality->id ? 'selected':'' }}>{{$nationality->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Пол</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="gender_id" id="" class="form-control {{ $errors->has('gender_id') ? 'is-invalid':'' }}">
                                                                                    <option selected="selected"></option>
                                                                                    @foreach($genders as $gender)
                                                                                        <option value="{{ $gender->id }}" {{ old('gender_id')==$gender->id ? 'selected':'' }}>{{$gender->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('gender_id')
                                                                                <span id="" class="error invalid-feedback">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Семейное положение</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="f_status_id" id="" class="form-control">
                                                                                    @foreach($f_statuses as $f_status)
                                                                                        <option value="{{ $f_status->id }}" {{ old('f_status_id')==$f_status->id ? 'selected':'' }}>{{$f_status->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="offset-sm-2 col-sm-10">
                                                                                <div class="checkbox">
                                                                                    <label>
                                                                                        <input type="checkbox" name=""> Проживает в данном городе, не иногородний
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Гражданство</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="сitizenship_id" id="" class="form-control select2" style="width: 100%;">
                                                                                    @foreach($сitizenships as $сitizenship)
                                                                                        <option value="{{ $сitizenship->id }}" {{ old('сitizenship_id')==$сitizenship->id ? 'selected':'' }}>{{$сitizenship->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Страна, откуда прибыл</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="country_came_id" id="" class="form-control select2" style="width: 100%;">
                                                                                    @foreach($country_cames as $country_came)
                                                                                        <option value="{{ $country_came->id }}" {{ old('country_came_id')==$country_came->id ? 'selected':'' }}>{{$country_came->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        {{ $delimiter = '' }}
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Область, откуда прибыл</label>
                                                                            <div class="col-sm-10">
                                                                                <select id="region_id" name="" class="form-control">
                                                                                    <option value="0">Выберите область/город</option>
                                                                                    @foreach($all_regions as $all_region)
                                                                                        <option value="{{ $all_region->id }}">
                                                                                            {{ $all_region->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName2" class="col-sm-2 col-form-label">Районный центр, откуда прибыл</label>
                                                                            <div class="col-sm-10">
                                                                                <select id="region_code_id" name="address_code" class="form-control select2">
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName2" class="col-sm-2 col-form-label">Адрес (дом,улица)</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea class="form-control" name="address_home" rows="2" placeholder="Населенный пункт, откуда прибыл"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <h5>Место рождения</h5>
                                                                        <div class="form-group row">
                                                                            <label for="inputName2" class="col-sm-2 col-form-label">Населенный пункт рождения (като)</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" id="inputName2" placeholder="Населенный пункт рождения (като)">
                                                                            </div>
                                                                        </div>
                                                                        <h5>Место прописки</h5>
                                                                        <div class="form-group row">
                                                                            <label for="inputName2" class="col-sm-2 col-form-label">Населенный пункт прописки (като)</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" id="inputName2" placeholder="Населенный пункт прописки (като)">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName2" class="col-sm-2 col-form-label">Адрес прописки</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" id="inputName2" placeholder="Адрес прописки">
                                                                            </div>
                                                                        </div>
                                                                        <h5>Место проживания</h5>
                                                                        <div class="form-group row">
                                                                            <label for="inputName2" class="col-sm-2 col-form-label">Населенный пункт проживания (като</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" id="inputName2" placeholder="Населенный пункт проживания (като">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName2" class="col-sm-2 col-form-label">Адрес проживания</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" id="inputName2" placeholder="Адрес проживания">
                                                                            </div>
                                                                        </div>

                                                                        <h5>Родители</h5>
                                                                        <div class="form-group row">
                                                                            <div class="offset-sm-2 col-sm-10">
                                                                                <button type="submit" class="btn btn-primary">Добавить</button>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <div class="offset-sm-2 col-sm-10">
                                                                                <button type="submit" class="btn btn-danger">Добавить</button>
                                                                            </div>
                                                                        </div>


                                                                    </form>

                                                                </div>
                                                                <!-- /.tab-pane -->
                                                                <div class="tab-pane" id="timeline">

                                                                </div>
                                                                <!-- /.tab-pane -->

                                                                <div class="tab-pane" id="settings">
                                                                    <div class="col-md-3">

                                                                        <!-- Profile Image -->
                                                                        <div class="card card-primary card-outline">
                                                                            <div class="card-body box-profile">
                                                                                <div class="text-center mb-3">
                                                                                    <img class="profile-user-img img-fluid img-circle"
                                                                                         src="{{ asset('images/def_user.png') }}"
                                                                                         alt="User profile picture">
                                                                                </div>

                                                                                <a href="#" class="btn btn-primary btn-block"><b>Обновить</b></a>
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.col -->
                                                                </div>
                                                                <!-- /.tab-pane -->
                                                            </div>
                                                            <!-- /.tab-content -->
                                                        </div><!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-document" role="tabpanel" aria-labelledby="custom-tabs-four-document-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="tab-content">
                                                                <div class="active tab-pane" id="activity">
                                                                    <form class="form-horizontal" action="{{ route('student.store') }}" method="post">
                                                                        @csrf
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Документ, удостоверяющий личность</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="identity_document_id" id="" class="form-control select2" style="width: 100%;">
                                                                                    @foreach($identity_documents as $identity_document)
                                                                                        <option value="{{ $identity_document->id }}" {{ old('identity_document_id')==$identity_document->id ? 'selected':'' }}>{{$identity_document->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Номер документа, удостоверяющего личность</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="doc_name" value="{{ old('doc_name') }}" class="form-control" id="inputName" placeholder="Номер документа, удостоверяющего личность">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Серия документа, удостоверяющего личность</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="ser_doc_name" value="{{ old('ser_doc_name') }}" class="form-control" id="inputName" placeholder="Серия документа, удостоверяющего личность">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Дата выдачи документа, удостоверяющего личность</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="date" name="give_date" value="{{ old('give_date') }}" class="form-control" id="inputName" placeholder="Дата выдачи документа, удостоверяющего личность">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Срок действия документа, удостоверяющего личность</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="date" name="srok_date" value="{{ old('srok_date') }}" class="form-control" id="inputName" placeholder="Срок действия документа, удостоверяющего личность">
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Выбрать орган, выдавший документ, удостоверяющий личность</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="organ_id" id="" class="form-control">
                                                                                    <option selected="selected"></option>
                                                                                    @foreach($sel_identity_documents as $sel_identity_document)
                                                                                        <option value="{{ $sel_identity_document->id }}" {{ old('sel_identity_document')==$sel_identity_document->id ? 'selected':'' }}>{{$sel_identity_document->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <div class="offset-sm-2 col-sm-10">
                                                                                <button type="submit" class="btn btn-danger">Добавить</button>
                                                                            </div>
                                                                        </div>


                                                                    </form>

                                                                </div>
                                                                <!-- /.tab-pane -->
                                                                <div class="tab-pane" id="timeline">

                                                                </div>
                                                                <!-- /.tab-pane -->

                                                                <div class="tab-pane" id="settings">
                                                                    <div class="col-md-3">

                                                                        <!-- Profile Image -->
                                                                        <div class="card card-primary card-outline">
                                                                            <div class="card-body box-profile">
                                                                                <div class="text-center mb-3">
                                                                                    <img class="profile-user-img img-fluid img-circle"
                                                                                         src="{{ asset('images/def_user.png') }}"
                                                                                         alt="User profile picture">
                                                                                </div>

                                                                                <a href="#" class="btn btn-primary btn-block"><b>Обновить</b></a>
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.col -->
                                                                </div>
                                                                <!-- /.tab-pane -->
                                                            </div>
                                                            <!-- /.tab-content -->
                                                        </div><!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-contact" role="tabpanel" aria-labelledby="custom-tabs-four-contact-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="tab-content">
                                                                <div class="active tab-pane" id="activity">
                                                                    <form class="form-horizontal" action="{{ route('student.store') }}" method="post">
                                                                        @csrf

                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Домашний телефон</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="home_phone" value="{{ old('home_phone') }}" class="form-control" id="inputName" placeholder="+7 (XXX) XXXXXXX">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Мобильный телефон</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="mob_phone" value="{{ old('mob_phone') }}" class="form-control" id="mob_phone" placeholder="+7 (XXX) XXXXXXX">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Почта</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="mob_phone" placeholder="Почта">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Дополнительная почта</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="email" name="second_email" value="{{ old('second_email') }}" class="form-control" id="mob_phone" placeholder="Дополнительная почта">
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <div class="offset-sm-2 col-sm-10">
                                                                                <button type="submit" class="btn btn-danger">Добавить</button>
                                                                            </div>
                                                                        </div>


                                                                    </form>

                                                                </div>
                                                                <!-- /.tab-pane -->
                                                                <div class="tab-pane" id="timeline">

                                                                </div>
                                                                <!-- /.tab-pane -->

                                                                <div class="tab-pane" id="settings">
                                                                    <div class="col-md-3">

                                                                        <!-- Profile Image -->
                                                                        <div class="card card-primary card-outline">
                                                                            <div class="card-body box-profile">
                                                                                <div class="text-center mb-3">
                                                                                    <img class="profile-user-img img-fluid img-circle"
                                                                                         src="{{ asset('images/def_user.png') }}"
                                                                                         alt="User profile picture">
                                                                                </div>

                                                                                <a href="#" class="btn btn-primary btn-block"><b>Обновить</b></a>
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.col -->
                                                                </div>
                                                                <!-- /.tab-pane -->
                                                            </div>
                                                            <!-- /.tab-content -->
                                                        </div><!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-profession" role="tabpanel" aria-labelledby="custom-tabs-four-profession-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="tab-content">
                                                                <div class="active tab-pane" id="activity">
                                                                    <form class="form-horizontal" action="{{ route('student.store') }}" method="post">
                                                                        @csrf
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Дата поступления</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="date" name="admission_date" value="{{ old('admission_date') }}" class="form-control" id="inputName" placeholder="Дата поступления">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Академическая степень</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="degree_type_id" id="degree_type_id" class="form-control" style="width: 100%;">
                                                                                    <option value="">Выберите</option>
                                                                                    @foreach($degree_types as $degree_type)
                                                                                        <option value="{{ $degree_type->id }}" {{ old('degree_type_id')==$degree_type->id ? 'selected':'' }}>{{$degree_type->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Форма обучения</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="studyform_id" id="studyform_id" class="form-control" style="width: 100%;">
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Специальность/Группа образовательных программ</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="profession_id" id="profession_id" class="form-control select2" style="width: 100%;">
{{--                                                                                    @foreach($professions as $profession)--}}
{{--                                                                                        <option value="{{ $profession->id }}" {{ old('profession_id')==$profession->id ? 'selected':'' }}>{{$profession->professionCode}} - {{$profession->name}}</option>--}}
{{--                                                                                    @endforeach--}}
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Специализация/Образовательная программа</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="specialization_id" id="specialization_id" class="form-control select2" style="width: 100%;">

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Язык обучения</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="center_studylanguage_id" id="" class="form-control select2" style="width: 100%;">
                                                                                    @foreach($center_studylanguages as $center_studylanguage)
                                                                                        <option value="{{ $center_studylanguage->id }}" {{ old('center_studylanguage_id')==$center_studylanguage->id ? 'selected':'' }}>{{$center_studylanguage->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Курс</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="course_id" id="course_id" class="form-control" style="width: 100%;">

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Группа</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="group_id" id="group_id" class="form-control select2" style="width: 100%;">

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Форма оплаты</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="paymentform_id" id="paymentform_id" class="form-control" style="width: 100%;">
                                                                                    <option value="">Выберите</option>
                                                                                    @foreach($paymentforms as $paymentform)
                                                                                        <option value="{{ $paymentform->id }}" {{ old('paymentform_id')==$paymentform->id ? 'selected':'' }}>{{$paymentform->name}}</option>
                                                                                    @endforeach

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div id="fin_id">
                                                                            <div class="form-group row">
                                                                                <label for="inputName" class="col-sm-2 col-form-label">Вид финансирования</label>
                                                                                <div class="col-sm-10">
                                                                                    <select name="finance_type_id" id="finance_type_id" class="form-control" style="width: 100%;">

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="is_fin_id">
                                                                            <div class="form-group row">
                                                                                <label for="inputName" class="col-sm-2 col-form-label">Источник финансирования</label>
                                                                                <div class="col-sm-10">
                                                                                    <select name="is_finance_type_id" id="is_finance_type_id" class="form-control" style="width: 100%;">

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="gos_id">
                                                                            <div class="form-group row">
                                                                                <label for="inputName" class="col-sm-2 col-form-label">Государственный орган</label>
                                                                                <div class="col-sm-10">
                                                                                    <select name="publicAuthorityGrant" id="publicAuthorityGrant_id" class="form-control" style="width: 100%;">

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="prav_id">
                                                                            <div class="form-group row">
                                                                                <label for="inputName" class="col-sm-2"></label>
                                                                                <div class="col-sm-10 custom-control custom-checkbox">
                                                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                                                    <label for="customCheckbox1" class="custom-control-label">Межправительственный грант</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="kvo_id">
                                                                            <div class="form-group row">
                                                                                <label for="inputName" class="col-sm-2 col-form-label">Обучение по квоте</label>
                                                                                <div class="col-sm-10">
                                                                                    <select name="kvota_id" id="kvota_id" class="form-control" style="width: 100%;">

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="svi_id1">
                                                                            <div class="form-group row">
                                                                                <label for="inputName" class="col-sm-2">Серия свидетельства о гранте</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" name="shifr_student1" value="{{ old('shifr_student1') }}" class="form-control" id="reg_nom_trans" placeholder="Серия свидетельства о гранте">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="svi_id2">
                                                                            <div class="form-group row">
                                                                                <label for="inputName" class="col-sm-2">Номер свидетельства о гранте</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" name="shifr_student2" value="{{ old('shifr_student2') }}" class="form-control" id="reg_nom_trans" placeholder="Номер свидетельства о гранте">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="svi_id3">
                                                                            <div class="form-group row">
                                                                                <label for="inputName" class="col-sm-2">Дата присуждения гранта</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="date" name="give_date_student" value="{{ old('give_date_student') }}" class="form-control" id="inputName" placeholder="Дата выдачи обучающемуся">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <hr>


                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Шифр обучающегося</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Шифр обучающегося">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Дата выдачи обучающемуся</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="date" name="give_date_student" value="{{ old('give_date_student') }}" class="form-control" id="inputName" placeholder="Дата выдачи обучающемуся">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Регистрационный номер транскрипта</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="reg_nom_trans" value="{{ old('reg_nom_trans') }}" class="form-control" id="reg_nom_trans" placeholder="Регистрационный номер транскрипта">
                                                                            </div>
                                                                        </div>

                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <div class="offset-sm-2 col-sm-10">
                                                                                <button type="submit" class="btn btn-danger">Добавить</button>
                                                                            </div>
                                                                        </div>


                                                                    </form>

                                                                </div>
                                                                <!-- /.tab-pane -->
                                                                <div class="tab-pane" id="timeline">

                                                                </div>
                                                                <!-- /.tab-pane -->

                                                                <div class="tab-pane" id="settings">
                                                                    <div class="col-md-3">

                                                                        <!-- Profile Image -->
                                                                        <div class="card card-primary card-outline">
                                                                            <div class="card-body box-profile">
                                                                                <div class="text-center mb-3">
                                                                                    <img class="profile-user-img img-fluid img-circle"
                                                                                         src="{{ asset('images/def_user.png') }}"
                                                                                         alt="User profile picture">
                                                                                </div>

                                                                                <a href="#" class="btn btn-primary btn-block"><b>Обновить</b></a>
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.col -->
                                                                </div>
                                                                <!-- /.tab-pane -->
                                                            </div>
                                                            <!-- /.tab-content -->
                                                        </div><!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-education" role="tabpanel" aria-labelledby="custom-tabs-four-education-tab">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="tab-content">
                                                                <div class="active tab-pane" id="activity">
                                                                    <form class="form-horizontal" action="{{ route('student.store') }}" method="post">
                                                                        @csrf
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2 col-form-label">Закончил образовательное учреждение</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="education_type_id" id="education_type_id" class="form-control" style="width: 100%;">
                                                                                    <option value="0">Выберите</option>
                                                                                    <option value="1">Школа</option>
                                                                                    <option value="2">Колледж</option>
                                                                                    <option value="3">ВУЗ</option>
                                                                                    <option value="4">Другое учреждение</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card" id="school_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Школа</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Страна, в которой закончил учебное заведение</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="сitizenship_id" id="" class="form-control select2" style="width: 100%;">
                                                                                            @foreach($сitizenships as $сitizenship)
                                                                                                <option value="{{ $сitizenship->id }}" {{ old('сitizenship_id')==$сitizenship->id ? 'selected':'' }}>{{$сitizenship->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Место окончания школы</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="residence_state_id" id="" class="form-control" style="width: 100%;">
                                                                                            @foreach($residence_states as $residence_state)
                                                                                                <option value="{{ $residence_state->id }}" {{ old('residence_state_id')==$residence_state->id ? 'selected':'' }}>{{$residence_state->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Населенный пункт учебного заведения</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Населенный пункт учебного заведения">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Название (номер) учебного заведения, которое окончил</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="сitizenship_id" id="" class="form-control" style="width: 100%;">
                                                                                            <option value="">---</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName2" class="col-sm-2">Наименование образовательного учреждения</label>
                                                                                    <div class="col-sm-10">
                                                                                        <textarea class="form-control" name="address_home" rows="2" placeholder="Наименование образовательного учреждения"></textarea>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="university_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">ВУЗ</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">ВУЗ</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="" id="" class="form-control" style="width: 100%;">
                                                                                            <option value="">Выберите</option>
                                                                                            <option value="1">Отечественный ВУЗ</option>
                                                                                            <option value="2">Зарубежный ВУЗ</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="other_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Другое учреждение</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Страна, в которой закончил учебное заведение</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="сitizenship_id" id="" class="form-control select2" style="width: 100%;">
                                                                                            @foreach($сitizenships as $сitizenship)
                                                                                                <option value="{{ $сitizenship->id }}" {{ old('сitizenship_id')==$сitizenship->id ? 'selected':'' }}>{{$сitizenship->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName2" class="col-sm-2">Наименование образовательного учреждения</label>
                                                                                    <div class="col-sm-10">
                                                                                        <textarea class="form-control" name="address_home" rows="2" placeholder="Наименование образовательного учреждения"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Наименование специальности образовательного учреждения</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Наименование специальности образовательного учреждения">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="certificate_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Аттестат о среднем образовании</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Серия свидетельства</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="Серия свидетельства" placeholder="Населенный пункт учебного заведения">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Номер свидетельства</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="Номер свидетельства" placeholder="Населенный пункт учебного заведения">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Дата выдачи</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="date" name="admission_date" value="{{ old('admission_date') }}" class="form-control" id="inputName" placeholder="Дата выдачи">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Средний балл аттестата</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="Номер свидетельства" placeholder="Средний балл аттестата">
                                                                                    </div>
                                                                                    <div class="col-sm-2">
                                                                                        <button type="button" class="btn btn-success">Рассчитать</button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2"></label>
                                                                                    <div class="col-sm-3 custom-control custom-checkbox">
                                                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                                                        <label for="customCheckbox1" class="custom-control-label">Аттестат (диплом) с отличием</label>
                                                                                    </div>
                                                                                    <div class="col-sm-3 custom-control custom-checkbox">
                                                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2"        >
                                                                                        <label for="customCheckbox2" class="custom-control-label">Алтын белги</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="admission_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Тип поступления</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Тип поступления</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="admissions_type_id" id="admissions_type_id" class="form-control" style="width: 100%;">
                                                                                            <option value="0">Выберите</option>
                                                                                            <option value="1">ЕНТ/КТ</option>
                                                                                            <option value="2">Собеседование</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="unt_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Данные по сертификату ЕНТ/КТ</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Номер сертификата ЕНТ/КТ</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Номер сертификата ЕНТ/КТ">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Серия сертификата</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Номер сертификата ЕНТ/КТ">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Индивидуальный код тестируемого</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Номер сертификата ЕНТ/КТ">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Дата выдачи сертификата ЕНТ/КТ</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="date" name="admission_date" value="{{ old('admission_date') }}" class="form-control" id="inputName" placeholder="Дата выдачи">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Язык сдачи экзамена</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="" id="" class="form-control" style="width: 100%;">
                                                                                            <option value="0">Выберите</option>
                                                                                            <option value="1">Русский</option>
                                                                                            <option value="2">Казахский</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="interview_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Данные по собеседованию</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Номер протокола</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="0">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Дата протокола</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="date" name="admission_date" value="{{ old('admission_date') }}" class="form-control" id="inputName" placeholder="Дата выдачи">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Оценка по результатам собеседования</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="0">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Результат собеседования</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="" id="" class="form-control" style="width: 100%;">
                                                                                            <option value="1">Пройдено</option>
                                                                                            <option value="2">Не пройдено</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="college_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Колледж</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Страна, в которой закончил учебное заведение</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="сitizenship_id" id="" class="form-control select2" style="width: 100%;">
                                                                                            @foreach($сitizenships as $сitizenship)
                                                                                                <option value="{{ $сitizenship->id }}" {{ old('сitizenship_id')==$сitizenship->id ? 'selected':'' }}>{{$сitizenship->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Место окончания школы</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="residence_state_id" id="" class="form-control" style="width: 100%;">
                                                                                            @foreach($residence_states as $residence_state)
                                                                                                <option value="{{ $residence_state->id }}" {{ old('residence_state_id')==$residence_state->id ? 'selected':'' }}>{{$residence_state->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Населенный пункт учебного заведения</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Населенный пункт учебного заведения">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Название (номер) учебного заведения, которое окончил</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="сitizenship_id" id="" class="form-control" style="width: 100%;">
                                                                                            <option value="">---</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName2" class="col-sm-2">Наименование образовательного учреждения</label>
                                                                                    <div class="col-sm-10">
                                                                                        <textarea class="form-control" name="address_home" rows="2" placeholder="Наименование образовательного учреждения"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Специальность/Группа образовательных программ</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="сitizenship_id" id="" class="form-control select2" style="width: 100%;">
                                                                                            <option value="">Выберите</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Квалификация</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="сitizenship_id" id="" class="form-control select2" style="width: 100%;">
                                                                                            <option value="">Выберите</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Дата решения квалификационной комиссии</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="date" name="admission_date" value="{{ old('admission_date') }}" class="form-control" id="inputName" placeholder="Дата выдачи">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="admission_college_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Тип поступления</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Тип поступления</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="admissions_type_id" id="admissions_college_type_id" class="form-control" style="width: 100%;">
                                                                                            <option value="0">Выберите</option>
                                                                                            <option value="1">ЕНТ/КТ</option>
                                                                                            <option value="2">Собеседование</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="unt_college_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Данные по сертификату ЕНТ/КТ</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Номер сертификата ЕНТ/КТ</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Номер сертификата ЕНТ/КТ">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Серия сертификата</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Номер сертификата ЕНТ/КТ">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Индивидуальный код тестируемого</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Номер сертификата ЕНТ/КТ">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Дата выдачи сертификата ЕНТ/КТ</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="date" name="admission_date" value="{{ old('admission_date') }}" class="form-control" id="inputName" placeholder="Дата выдачи">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Язык сдачи экзамена</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="" id="" class="form-control" style="width: 100%;">
                                                                                            <option value="0">Выберите</option>
                                                                                            <option value="1">Русский</option>
                                                                                            <option value="2">Казахский</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="interview_college_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Данные по собеседованию</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Номер протокола</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="0">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Дата протокола</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="date" name="admission_date" value="{{ old('admission_date') }}" class="form-control" id="inputName" placeholder="Дата выдачи">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Оценка по результатам собеседования</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="0">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Результат собеседования</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="" id="" class="form-control" style="width: 100%;">
                                                                                            <option value="1">Пройдено</option>
                                                                                            <option value="2">Не пройдено</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card" id="diploma_view">
                                                                            <div class="card-header">
                                                                                <h3 class="card-title">Диплом</h3>
                                                                                <div class="card-tools">
                                                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Серия диплома</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="" placeholder="Серия диплома">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2">Номер диплома</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="" placeholder="Серия диплома">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="inputName" class="col-sm-2 col-form-label">Дата выдачи диплома</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="date" name="admission_date" value="{{ old('admission_date') }}" class="form-control" id="inputName" placeholder="Дата выдачи">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>




{{--                                                                        <div class="form-group row">--}}
{{--                                                                            <label for="inputName" class="col-sm-2 col-form-label">№ свидетельства о нострификации</label>--}}
{{--                                                                            <div class="col-sm-10">--}}
{{--                                                                                <input type="text" name="shifr_student" value="{{ old('shifr_student') }}" class="form-control" id="reg_nom_trans" placeholder="Шифр обучающегося">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}


{{--                                                                        <div class="form-group row">--}}
{{--                                                                            <label for="inputName" class="col-sm-2 col-form-label">Дата свидетельства о нострификации</label>--}}
{{--                                                                            <div class="col-sm-10">--}}
{{--                                                                                <input type="date" name="admission_date" value="{{ old('admission_date') }}" class="form-control" id="inputName" placeholder="Дата поступления">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}

                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <div class="offset-sm-2 col-sm-10">
                                                                                <button type="submit" class="btn btn-danger">Добавить</button>
                                                                            </div>
                                                                        </div>


                                                                    </form>

                                                                </div>
                                                                <!-- /.tab-pane -->
                                                                <div class="tab-pane" id="timeline">

                                                                </div>
                                                                <!-- /.tab-pane -->

                                                                <div class="tab-pane" id="settings">
                                                                    <div class="col-md-3">

                                                                        <!-- Profile Image -->
                                                                        <div class="card card-primary card-outline">
                                                                            <div class="card-body box-profile">
                                                                                <div class="text-center mb-3">
                                                                                    <img class="profile-user-img img-fluid img-circle"
                                                                                         src="{{ asset('images/def_user.png') }}"
                                                                                         alt="User profile picture">
                                                                                </div>

                                                                                <a href="#" class="btn btn-primary btn-block"><b>Обновить</b></a>
                                                                            </div>
                                                                            <!-- /.card-body -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.col -->
                                                                </div>
                                                                <!-- /.tab-pane -->
                                                            </div>
                                                            <!-- /.tab-content -->
                                                        </div><!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-musa" role="tabpanel" aria-labelledby="custom-tabs-four-musa-tab">
                                            Musa.
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(function() {
            $("#region_id").change(function(){
                var regionID = $(this).val();
                var _token = $("input[name='_token']").val();
                if(regionID){
                    $.ajax({
                        url:"{{ route('get_by_region') }}",
                        type:"post",
                        data: {_token:_token, rid:regionID},
                        success:function(response){
                            // $.each(response.data, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#region_code_id').html(response);
                        }
                    });
                }
            });
            $("#profession_id").change(function(){
                var professionID = $(this).val();
                var _token = $("input[name='_token']").val();
                if(professionID){
                    $.ajax({
                        url:"{{ route('get_by_profession') }}",
                        type:"post",
                        data: {_token:_token, pid:professionID},
                        success:function(response){
                            // $.each(response.specializations, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#specialization_id').html(response);
                        }
                    });
                }
            });
            $("#specialization_id").change(function(){
                var specializationID = $(this).val();
                var _token = $("input[name='_token']").val();
                if(specializationID){
                    $.ajax({
                        url:"{{ route('get_by_specialization') }}",
                        type:"post",
                        data: {_token:_token, sid:specializationID},
                        success:function(response){
                            // $.each(response.specializations, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#group_id').html(response);
                        }
                    });
                }
            });
            $("#degree_type_id").change(function(){
                var degree_type_id = $(this).val();
                var _token = $("input[name='_token']").val();
                if(degree_type_id){
                    $.ajax({
                        url:"{{ route('get_by_degree') }}",
                        type:"post",
                        data: {_token:_token, degid:degree_type_id},
                        success:function(response){
                            // $.each(response.specializations, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#studyform_id').html(response);
                        }
                    });
                }
            });
            $("#degree_type_id").change(function(){
                var degree_type_id1 = $(this).val();
                var _token = $("input[name='_token']").val();
                if(degree_type_id1){
                    $.ajax({
                        url:"{{ route('get_by_degree_profession') }}",
                        type:"post",
                        data: {_token:_token, degreegid:degree_type_id1},
                        success:function(response){
                            // $.each(response.specializations, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#profession_id').html(response);
                        }
                    });
                }
            });

            $("#studyform_id").change(function(){
                var studyform_id = $(this).val();
                var _token = $("input[name='_token']").val();
                if(studyform_id){
                    $.ajax({
                        url:"{{ route('get_by_studyform') }}",
                        type:"post",
                        data: {_token:_token, studyform_id:studyform_id},
                        success:function(response){
                            // $.each(response.specializations, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#course_id').html(response);
                        }
                    });
                }
            });
            $("#paymentform_id").change(function(){
                var paymentform_id = $(this).val();
                var _token = $("input[name='_token']").val();
                if(paymentform_id){
                    $.ajax({
                        url:"{{ route('get_by_paymentform') }}",
                        type:"post",
                        data: {_token:_token, paymentform_id:paymentform_id},
                        success:function(response){
                            // $.each(response.specializations, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#finance_type_id').html(response);
                        }
                    });
                }
            });

            $("#finance_type_id").change(function(){
                var finance_type_id = $(this).val();
                var _token = $("input[name='_token']").val();
                if(finance_type_id==1){
                    $.ajax({
                        url:"{{ route('get_by_gosorgan') }}",
                        type:"post",
                        data: {_token:_token, finance_type_id:finance_type_id},
                        success:function(response){
                            // $.each(response.specializations, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#publicAuthorityGrant_id').html(response);
                        }
                    });
                }
                if(finance_type_id==4){
                    $.ajax({
                        url:"{{ route('get_by_gosorgan_work') }}",
                        type:"post",
                        data: {_token:_token, finance_type_id:finance_type_id},
                        success:function(response){
                            // $.each(response.specializations, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#is_finance_type_id').html(response);
                        }
                    });
                }
            });
            $("#paymentform_id").change(function(){
                var paymentform_id = $(this).val();
                var _token = $("input[name='_token']").val();
                if(paymentform_id==2){
                    $.ajax({
                        url:"{{ route('get_by_gosorgan_kvota') }}",
                        type:"post",
                        data: {_token:_token, paymentform_id:paymentform_id},
                        success:function(response){
                            // $.each(response.specializations, function(key, value) {
                            //     console.log( key + " : " + value );
                            // });
                            $('#kvota_id').html(response);
                        }
                    });
                }
            });

            $("#paymentform_id").change(function(){
                var paymentform_id = $(this).val();
                if(paymentform_id==1){
                    $('#fin_id').show();
                    $('#gos_id').hide();
                    $('#prav_id').hide();
                    $('#kvo_id').hide();
                    $('#svi_id1').hide();
                    $('#svi_id2').hide();
                    $('#svi_id3').hide();
                    $('#is_fin_id').hide();
                }
                if(paymentform_id==2){
                    $('#fin_id').show();
                    $('#gos_id').hide();
                    $('#prav_id').hide();
                    $('#kvo_id').show();
                    $('#svi_id1').show();
                    $('#svi_id2').show();
                    $('#svi_id3').show();
                    $('#is_fin_id').hide();
                }
                if(paymentform_id==3){
                    $('#fin_id').hide();
                    $('#gos_id').hide();
                    $('#prav_id').hide();
                    $('#kvo_id').hide();
                    $('#svi_id1').hide();
                    $('#svi_id2').hide();
                    $('#svi_id3').hide();
                    $('#is_fin_id').hide();
                }
                if(paymentform_id==0){
                    $('#fin_id').hide();
                    $('#gos_id').hide();
                    $('#prav_id').hide();
                    $('#kvo_id').hide();
                    $('#svi_id1').hide();
                    $('#svi_id2').hide();
                    $('#svi_id3').hide();
                    $('#is_fin_id').hide();
                }
            });
            $("#finance_type_id").change(function(){
                var finance_type_id = $(this).val();
                if(finance_type_id==1){
                    $('#fin_id').show();
                    $('#prav_id').hide();
                    $('#gos_id').show();
                    $('#kvo_id').show();
                    $('#svi_id1').show();
                    $('#svi_id2').show();
                    $('#svi_id3').show();
                    $('#is_fin_id').hide();
                }
                if(finance_type_id==6){
                    $('#fin_id').show();
                    $('#prav_id').show();
                    $('#gos_id').hide();
                    $('#kvo_id').show();
                    $('#svi_id1').show();
                    $('#svi_id2').show();
                    $('#svi_id3').show();
                    $('#is_fin_id').hide();
                }
                if(finance_type_id==4){
                    $('#fin_id').show();
                    $('#is_fin_id').show();
                    $('#prav_id').hide();
                    $('#gos_id').hide();
                    $('#kvo_id').hide();
                    $('#svi_id1').hide();
                    $('#svi_id2').hide();
                    $('#svi_id3').hide();
                }
                if(finance_type_id==0){
                    $('#fin_id').hide();
                    $('#gos_id').hide();
                    $('#prav_id').hide();
                    $('#kvo_id').hide();
                    $('#svi_id1').hide();
                    $('#svi_id2').hide();
                    $('#svi_id3').hide();
                    $('#is_fin_id').hide();
                }
            });

            $("#education_type_id").change(function(){
                var education_type_id = $(this).val();
                var _token = $("input[name='_token']").val();
                if(education_type_id==0 ){
                    $('#school_view').hide();
                    $('#college_view').hide();
                    $('#university_view').hide();
                    $('#other_view').hide();
                    $('#certificate_view').hide();
                    $('#admission_view').hide();
                    $('#unt_view').hide();
                    $('#interview_view').hide();
                    $('#diploma_view').hide();
                    $('#admission_college_view').hide();
                    $('#unt_college_view').hide();
                    $('#interview_college_view').hide();
                }
                if(education_type_id==1){
                    $('#school_view').show();
                    $('#certificate_view').show();
                    $('#admission_view').show();
                    $('#unt_view').hide();
                    $('#interview_view').hide();
                    $('#college_view').hide();
                    $('#university_view').hide();
                    $('#other_view').hide();
                    $('#diploma_view').hide();
                    $('#admission_college_view').hide();
                    $('#unt_college_view').hide();
                    $('#interview_college_view').hide();
                }
                if(education_type_id==2){
                    $('#college_view').show();
                    $('#admission_college_view').show();
                    $('#interview_view').hide();
                    $('#admission_view').hide();
                    $('#diploma_view').show();
                    $('#school_view').hide();
                    $('#university_view').hide();
                    $('#other_view').hide();
                    $('#certificate_view').hide();
                    $('#unt_view').hide();
                    $('#unt_college_view').hide();
                    $('#interview_college_view').hide();

                }
                if(education_type_id==3){
                    $('#university_view').show();
                    $('#school_view').hide();
                    $('#college_view').hide();
                    $('#other_view').hide();
                    $('#certificate_view').hide();
                    $('#admission_view').hide();
                    $('#unt_view').hide();
                    $('#interview_view').show();
                    $('#diploma_view').show();

                    $('#admission_college_view').hide();
                    $('#unt_college_view').hide();
                    $('#interview_college_view').hide();
                }
                if(education_type_id==4){
                    $('#other_view').show();
                    $('#school_view').hide();
                    $('#college_view').hide();
                    $('#university_view').hide();
                    $('#certificate_view').hide();
                    $('#admission_view').hide();
                    $('#unt_view').hide();
                    $('#interview_view').hide();
                    $('#diploma_view').show();

                    $('#admission_college_view').hide();
                    $('#unt_college_view').hide();
                    $('#interview_college_view').hide();

                }
            });
            $("#admissions_type_id").change(function(){
                var admissions_type_id = $(this).val();
                var _token = $("input[name='_token']").val();
                if(admissions_type_id==0 ){
                    $('#school_view').show();
                    $('#college_view').hide();
                    $('#university_view').hide();
                    $('#other_view').hide();
                    $('#certificate_view').show();
                    $('#admission_view').show();
                    $('#unt_view').hide();
                    $('#interview_view').hide();
                    $('#diploma_view').hide();
                    $('#admission_college_view').hide();
                    $('#unt_college_view').hide();
                    $('#interview_college_view').hide();
                }
                if(admissions_type_id==1){
                    $('#school_view').show();
                    $('#certificate_view').show();
                    $('#admission_view').show();
                    $('#unt_view').show();
                    $('#interview_view').hide();
                    $('#college_view').hide();
                    $('#university_view').hide();
                    $('#other_view').hide();
                    $('#diploma_view').hide();

                    $('#admission_college_view').hide();
                    $('#unt_college_view').hide();
                    $('#interview_college_view').hide();
                }
                if(admissions_type_id==2){
                    $('#school_view').show();
                    $('#certificate_view').show();
                    $('#admission_view').show();
                    $('#unt_view').hide();
                    $('#interview_view').show();
                    $('#college_view').hide();
                    $('#university_view').hide();
                    $('#other_view').hide();
                    $('#diploma_view').hide();
                    $('#admission_college_view').hide();
                    $('#unt_college_view').hide();
                    $('#interview_college_view').hide();
                }
            });

            $("#admissions_college_type_id").change(function(){
                var admissions_type_id = $(this).val();
                var _token = $("input[name='_token']").val();
                if(admissions_type_id==0 ){
                    $('#school_view').hide();
                    $('#college_view').show();
                    $('#university_view').hide();
                    $('#other_view').hide();
                    $('#certificate_view').hide();
                    $('#admission_view').hide();
                    $('#unt_view').hide();
                    $('#interview_view').hide();
                    $('#diploma_view').show();
                    $('#admission_college_view').show();
                    $('#unt_college_view').hide();
                    $('#interview_college_view').hide();
                }
                if(admissions_type_id==1){
                    $('#school_view').hide();
                    $('#certificate_view').hide();
                    $('#admission_view').hide();
                    $('#unt_view').hide();
                    $('#interview_view').hide();
                    $('#college_view').show();
                    $('#university_view').hide();
                    $('#other_view').hide();
                    $('#diploma_view').show();

                    $('#admission_college_view').show();
                    $('#unt_college_view').show();
                    $('#interview_college_view').hide();
                }
                if(admissions_type_id==2){
                    $('#school_view').hide();
                    $('#certificate_view').hide();
                    $('#admission_view').hide();
                    $('#unt_view').hide();
                    $('#interview_view').hide();
                    $('#college_view').show();
                    $('#university_view').hide();
                    $('#other_view').hide();
                    $('#diploma_view').show();

                    $('#admission_college_view').show();
                    $('#interview_college_view').show();
                    $('#unt_college_view').hide();

                }
            });

        });
    </script>
@endsection

