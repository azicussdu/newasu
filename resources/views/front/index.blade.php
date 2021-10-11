@extends('layouts.frontpage')

@section('title')
Главная страница
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-10">
                    <h1 class="m-0"> ИСВУЗ - информационная система высшего учебного заведения</h1>
                </div><!-- /.col -->
                <div class="col-sm-2">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('home') }}">@lang('messages.mainpage')</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <p class="card-text">
                                ИСВУЗ - автоматизированная информационная система управления и мониторинга качества учебного процесса высшего учебного заведения, функционирующая в ЮКГУ с 2003 года
                            </p>
                            <p class="card-text">
                                ИСВУЗ состоит из виртуальных рабочих мест для администрации учебного процесса, централизованной базы данных и компьютерных классов учебного заведения, объединенных в единое пространство посредством корпоративной сети
                            </p>
                            <p class="card-text">
                                ИСВУЗ обеспечивает достоверность и защиту информации благодаря системе контроля обращений к базе данных
                            </p>
                            <p class="card-text">
                                ИСВУЗ предоставляет информацию в реальном времени с ограничением по уровням доступа пользователей
                            </p>
                            <p class="card-text">
                                ИСВУЗ содействует повышению качества образования благодаря автоматизации трудоемких операций, систематизации документооборота
                            </p>
                            <p class="card-text">
                                ИСВУЗ поддерживает работу на государственном и русском языках общения
                            </p>
                        </div>
                    </div><!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

@endsection
