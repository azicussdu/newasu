@extends('layouts.system')

@section('title')
Сотрудники вуза
@endsection

@section('content')

    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Сотрудники вуза</h1>
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
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Сотрудники вуза</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <div class="d-flex align-items-center py-1">
                <a href="{{ route('employee.create') }}" class="btn btn-sm btn-primary">Добавить сотрудника</a>
            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            @if(Session::has('info'))
                <div class="alert alert-primary">
                    {{ Session::get('info') }}
                </div>
            @endif
            <!--begin::Invoice 2 main-->
            <div class="card">
{{--                <div class="card-header">--}}

{{--                    <div class="card-toolbar">--}}
{{--                        <a href="{{route('employee.create')}}" class="btn btn-sm btn-primary">Добавить сотрудника</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
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
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->lastname }} {{ $employee->firstname }}    {{ $employee->patronymic }}</td>
                                    <td>
                                        <a class="menu-link" href="{{ route('employee.show', $employee) }}">
                                            <i class="bi bi-eye fs-2x"></i>
                                        </a>
                                        <a class="menu-link" href="{{ route('employee.edit', $employee) }}">
                                            <i class="bi bi-pencil-square fs-2x"></i>
                                        </a>
                                        <a class="menu-link" href="">
                                            <i class="bi bi-trash fs-2x"></i>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Invoice 2 main-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@endsection
