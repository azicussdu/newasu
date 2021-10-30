@extends('layouts.system')

@section('title')
    Просмотр
@endsection

@section('content')

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Просмотр</h1>
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
                    <li class="breadcrumb-item text-dark">Просмотр</li>
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
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Личные данные</h4>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">ФИО:</span> {{ $employee->lastname }} {{ $employee->firstname }}    {{ $employee->patronymic }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Доступ к системе:</span> {{ $employee->status=="active" ? 'ЕСТЬ': 'НЕТ' }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">ИИН:</span> {{ $employee->iin }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Дата рождения:</span> {{ $employee->birthdate }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Пол:</span>@if(!is_null($employee->gender)) {{ $employee->gender->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Семейное положение:</span>@if(!is_null($employee->family_status)) {{ $employee->family_status->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Национальность:</span>@if(!is_null($employee->nationality)) {{ $employee->nationality->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Гражданство:</span>@if(!is_null($employee->citizenship)) {{ $employee->citizenship->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Дата рождения:</span> {{ $employee->birthdate }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Область, откуда прибыл:</span>  </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Районный центр, откуда прибыл:</span>  </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Адрес проживания:</span> {{ $employee->living_address }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Общий стаж работы:</span> {{ $employee->experience_total }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Научно-педагогический стаж:</span> {{ $employee->experience_science }} </p>

                        </div>
                        <div class="col-sm-6">
                            <h4>Документы</h4>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Документ, удостоверяющий личность:</span>@if(!is_null($employee->identity_document)) {{ $employee->identity_document->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Номер документа, удостоверяющего личность:</span> {{ $employee->doc_number }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Серия документа, удостоверяющего личность:</span> {{ $employee->doc_ser }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Дата выдачи документа, удостоверяющего личность:</span> {{ $employee->doc_give_date }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Срок действия документа, удостоверяющего личность:</span> {{ $employee->doc_end_date }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Выбрать орган, выдавший документ, удостоверяющий личность:</span>@if(!is_null($employee->sel_identity_document)) {{ $employee->sel_identity_document->nameru }}@endif </p>
                            <h4>Контактная информация</h4>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Домашний телефон:</span> {{ $employee->home_phone }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Мобильный телефон:</span> {{ $employee->mobile_phone }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Почта:</span> {{ $employee->email }} </p>
                            <h4>Сведения об образовании</h4>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Отрасль науки:</span>@if(!is_null($employee->kkson_section)) {{ $employee->kkson_section->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Академическая степень:</span>@if(!is_null($employee->scientificdegree)) {{ $employee->scientificdegree->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Академический статус:</span>@if(!is_null($employee->academicstatus)) {{ $employee->academicstatus->nameru }}@endif </p>
                        </div>
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-header">

                            <div class="card-toolbar">
                                <a href="{{route('employee.create')}}" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">Добавить должность</a>
                            </div>

{{--                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">--}}
{{--                                Добавить должность--}}
{{--                            </button>--}}
                        </div>
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-rounded table-striped border gy-7 gs-7">
                                    <thead>
                                    <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                        <th>ФИО</th>
                                        <th>Функций</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>sdf</td><td>sdf</td></tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>


                    <div class="modal fade" tabindex="-1" id="kt_modal_1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Добавление должности</h5>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="required form-label">Example</label>
                                        <input type="text" class="form-control" placeholder="Example input"/>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="required form-label">Example</label>
                                        <select class="form-select form-select-solid" aria-label="Select example">
                                            <option>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Закрыт</button>
                                    <button type="button" class="btn btn-primary">Сохранить</button>
                                </div>
                            </div>
                        </div>
                    </div>

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


