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
                <a href="{{ route('student.index') }}" class="btn btn-sm btn-primary">Назад</a>
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
                            <h4 class="text-primary" id="">Личные данные</h4>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">ФИО:</span> {{ $student->lastname }} {{ $student->firstname }} {{ $student->patronymic }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Доступ к системе:</span> {{ $student->status=="active" ? 'ЕСТЬ': 'НЕТ' }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">ИИН:</span> {{ $student->iin }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Дата рождения:</span> {{ $student->birthdate }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Пол:</span>@if(!is_null($student->gender)) {{ $student->gender->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Семейное положение:</span>@if(!is_null($student->family_status)) {{ $student->family_status->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Национальность:</span>@if(!is_null($student->nationality)) {{ $student->nationality->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Гражданство:</span>@if(!is_null($student->citizenship)) {{ $student->citizenship->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Дата рождения:</span> {{ $student->birthdate }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Область, откуда прибыл:</span>@if(!is_null($region->id)) {{ $region->nameru }}@endif  </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Районный центр, откуда прибыл:</span> @if(!is_null($student->region)) {{ $student->region->nameru }}@endif  </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Адрес проживания:</span> {{ $student->living_address }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Общежитие:</span> {{ $student->hostel==1 ? 'Да': 'Нет' }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Сирота:</span> {{ $student->orphan==1 ? 'Да': 'Нет' }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Ребенок, оставшийся без попечения родителей:</span> {{ $student->child_without==1 ? 'Да': 'Нет' }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Инвалид:</span> {{ $student->disabled_person==1 ? 'Да': 'Нет' }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Обучается на военной кафедре:</span> {{ $student->studying_military==1 ? 'Да': 'Нет' }}</p>
                            <hr>
                            <h4 class="text-primary">Контактная информация</h4>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Домашний телефон:</span> {{ $student->home_phone }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Мобильный телефон:</span> {{ $student->mobile_phone }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Почта:</span> {{ $student->email }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">№ зачетной книжки</span>{{ $student->book_number }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Фото <br></span><img src="{{ asset('storage/students/'.$student->photo) }}" alt=""></p>

                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-primary">Документы</h4>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Документ, удостоверяющий личность:</span>@if(!is_null($student->identity_document)) {{ $student->identity_document->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Номер документа, удостоверяющего личность:</span> {{ $student->doc_number }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Серия документа, удостоверяющего личность:</span> {{ $student->doc_ser }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Дата выдачи документа, удостоверяющего личность:</span> {{ $student->doc_give_date }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Срок действия документа, удостоверяющего личность:</span> {{ $student->doc_end_date }} </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Выбрать орган, выдавший документ, удостоверяющий личность:</span>@if(!is_null($student->sel_identity_document)) {{ $student->sel_identity_document->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Вложение (прикрепите скан копию документа, удостоверяющего личность: где ФИО):</span>
                                <a href="{{ asset('storage/students/'.$student->ud_scan) }}">{{ $student->ud_scan }}</a> </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Вложение (прикрепите скан копию документа, аттестата о среднем (полном) образовании):</span>
                                <a href="{{ asset('storage/students/'.$student->at_scan) }}">{{ $student->at_scan }}</a> </p>
                            <hr>
                            <h4 class="text-primary">Сведения о специальности</h4>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Дата поступления:</span>{{ $student->admission_date }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Образование при поступлении:</span>@if(!is_null($student->education_admission)) {{ $student->education_admission->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Уровень образования (Академическая степень):</span>@if(!is_null($student->degree_type)) {{ $student->degree_type->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Форма обучения:</span>@if(!is_null($student->studyform)) {{ $student->studyform->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Изученный иностранный язык в школе:</span>@if(!is_null($student->foreign_lan_school)) {{ $student->foreign_lan_school->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Специальность/Группа образовательных программ</span>@if(!is_null($student->profession)) {{ $student->profession->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Специализация/Образовательная программа</span>@if(!is_null($student->specialization)) {{ $student->specialization->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Язык обучения</span>@if(!is_null($student->center_studylanguage)) {{ $student->center_studylanguage->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Курс обучения</span>@if(!is_null($student->studyform_course)) {{ $student->studyform_course->course_number }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Группа</span>@if(!is_null($student->group)) {{ $student->group->name }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Обучение за счет средств (Форма оплаты)</span>@if(!is_null($student->paymentform)) {{ $student->paymentform->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Обучается по квоте</span>@if(!is_null($student->benefit)) {{ $student->benefit->nameru }}@endif </p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Номер свидетельства о гранте</span>{{ $student->grant_cer_number }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Серия свидетельства о гранте</span>{{ $student->grant_cer_ser }}</p>
                            <p><span class="text-gray-900 text-hover-primary fw-bolder me-1">Дата присуждения гранта</span>{{ $student->grant_give_date }}</p>
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


