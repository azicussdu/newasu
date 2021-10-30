@extends('layouts.system')

@section('title')
    Добавление
@endsection

@section('content')

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Добавление</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('home') }}" class="text-muted text-hover-primary">Главная страница</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Сотрудники вуза</li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Добавление</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <div class="d-flex align-items-center py-1">
                <a href="{{ route('employee.index') }}" class="btn btn-sm btn-primary">Назад</a>
            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Invoice 2 main-->
            <div class="card">
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Личные данные</button>
                            <button class="nav-link" id="nav-document-tab" data-bs-toggle="tab" data-bs-target="#nav-document" type="button" role="tab" aria-controls="nav-document" aria-selected="false">Документы</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Контактная информация</button>
                            <button class="nav-link" id="nav-education_info-tab" data-bs-toggle="tab" data-bs-target="#nav-education_info" type="button" role="tab" aria-controls="nav-education_info" aria-selected="false">Сведения об образовании
                            </button>
                        </div>
                    </nav>
                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row mb-3">
                                    @if(Session::has('info'))
                                        <div class="alert alert-primary" role="alert">
                                            {{ Session::get('info') }}
                                        </div>
                                    @endif
                                    <label class="col-sm-2 col-form-label required">Фамилия</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required>
                                        @error('lastname')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label required">Имя</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required>
                                        @error('firstname')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Отчество</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="patronymic" value="{{ old('patronymic') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Прежняя фамилия (в случае ее изменения)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="old_lastname" value="{{ old('old_lastname') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label required">Доступ к системе</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="active" checked>
                                            <label class="form-check-label" for="inlineRadio1">Да</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="inactive">
                                            <label class="form-check-label" for="inlineRadio2">Нет</label>
                                        </div>
                                    </div>
                                </div>

                                <div id="iin_kaz">
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label required">ИИН</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('iin') is-invalid @enderror" name="iin" value="{{ old('iin') }}" required id="kt_inputmask_iin">
                                            @error('iin')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
{{--                                <div id="iin_other">--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label class="col-sm-2 col-form-label">ИИН</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input type="text" class="form-control" name="iin" value="{{ old('iin') }}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label required">Дата рождения</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required>
                                        @error('birthdate')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label required">Пол</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="gender_id" id="gender_id">
                                            <option value="0">Выберите</option>
                                            @foreach($genders as $gender)
                                                <option value="{{ $gender->id }}" {{ old('gender_id')==$gender->id ? 'selected':'' }}>{{$gender->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('gender_id')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label required">Семейное положение</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="f_status_id" id="family_status_id">

                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label required">Национальность</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="nationality_id" required>
                                            <option value="0" selected="selected">Выберите национальность</option>
                                            @foreach($nationalities as $nationality)
                                                <option value="{{ $nationality->id }}" {{ old('nationality_id')==$nationality->id ? 'selected':'' }}>{{$nationality->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('nationality_id')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label required">Гражданство</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="citizenship_id" id="сitizenship_id" required>
                                            <option value="0" selected="selected">Выберите гражданство</option>
                                            @foreach($citizenships as $citizenship)
                                                <option value="{{ $citizenship->id }}" {{ old('citizenship_id')==$citizenship->id ? 'selected':'' }}>{{$citizenship->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('сitizenship_id')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Область, откуда прибыл</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="" id="main_region_id">
                                            <option value="0">Выберите область/город</option>
                                            @foreach($all_regions as $all_region)
                                                <option value="{{ $all_region->id }}">
                                                    {{ $all_region->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Районный центр, откуда прибыл</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="region_id" id="region_id">
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Адрес проживания</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="living_address" value="{{ old('living_address') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Общий стаж работы</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="experience_total" value="{{ old('experience_total') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Научно-педагогический стаж</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="experience_science" value="{{ old('experience_science') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-document" role="tabpanel" aria-labelledby="nav-document-tab">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Документ, удостоверяющий личность</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="identity_document_id" id="identity_document_id">
                                            <option value="">Выберите</option>
                                            @foreach($identity_documents as $identity_document)
                                                <option value="{{ $identity_document->id }}" {{ old('identity_document_id')==$identity_document->id ? 'selected':'' }}>{{$identity_document->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Номер документа, удостоверяющего личность</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="doc_number" value="{{ old('doc_number') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Серия документа, удостоверяющего личность</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="doc_ser" value="{{ old('doc_ser') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label required">Дата выдачи документа, удостоверяющего личность</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="doc_give_date" value="{{ old('doc_give_date') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label required">Срок действия документа, удостоверяющего личность</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="doc_end_date" value="{{ old('doc_end_date') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Выбрать орган, выдавший документ, удостоверяющий личность</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="doc_organ_id">
                                            <option value="">Выберите</option>
                                            @foreach($sel_identity_documents as $sel_identity_document)
                                                <option value="{{ $sel_identity_document->id }}" {{ old('sel_identity_document')==$sel_identity_document->id ? 'selected':'' }}>{{$sel_identity_document->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Домашний телефон</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="home_phone" value="{{ old('home_phone') }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Мобильный телефон</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="mob_phone" value="{{ old('mob_phone') }}" id="kt_inputmask_phone">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Почта</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-education_info" role="tabpanel" aria-labelledby="nav-education_info-tab">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Отрасль науки</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="kkson_section_id">
                                            <option value="">Выберите</option>
                                            @foreach($kkson_sections as $kkson_section)
                                                <option value="{{ $kkson_section->id }}" {{ old('kkson_section_id')==$kkson_section->id ? 'selected':'' }}>{{$kkson_section->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Академическая степень</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="scientificdegree_id">
                                            <option value="">Выберите</option>
                                            @foreach($scientificdegrees as $scientificdegree)
                                                <option value="{{ $scientificdegree->id }}" {{ old('scientificdegree_id')==$scientificdegree->id ? 'selected':'' }}>{{$scientificdegree->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Академический статус</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="academicstatus_id">
                                            <option value="">Выберите</option>
                                            @foreach($academicstatuses as $academicstatus)
                                                <option value="{{ $academicstatus->id }}" {{ old('academicstatus_id')==$academicstatus->id ? 'selected':'' }}>{{$academicstatus->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-sm btn-success">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Invoice 2 main-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@endsection
@section('script')
    $("#gender_id").change(function(){
        var gender_id = $(this).val();
        var _token = $("input[name='_token']").val();
        if(gender_id){
        $.ajax({
        url:"{{ route('get_by_gender') }}",
        type:"post",
        data: {_token:_token, gender_id:gender_id},
        success:function(response){
            $('#family_status_id').html(response);
            }
        });
        }
    });
    $("#сitizenship_id").change(function(){
        var сitizenship_id = $(this).val();
        var _token = $("input[name='_token']").val();
        if(сitizenship_id==1){
        $('#iin_kaz').show();
        $('#iin_other').hide();
        }
        if(сitizenship_id!=1){
        $('#iin_kaz').hide();
        $('#iin_other').show();

        }
    });
    $("#main_region_id").change(function(){
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
        $('#region_id').html(response);
        }
        });
        }
    });
@endsection
