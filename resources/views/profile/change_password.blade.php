@extends('layouts.system')
@section('title', 'Изменение пароля')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Изменение пароля</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Изменение пароля</li>
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
                    <a href="{{ route('home') }}"><button type="button" class="btn btn-primary">Назад</button></a>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <form action="{{ route('update_password') }}" method="post">
                                @if(Session::has('info'))
                                    <div class="alert alert-primary" role="alert">
                                        {{ Session::get('info') }}
                                    </div>
                                @endif
                                @if(Session::has('fail'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Текущий пароль</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="old_password" class="form-control {{ $errors->has('old_password') ? 'is-invalid':'' }}" id="password">
                                        @error('old_password')
                                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Пароль</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="new_password" class="form-control {{ $errors->has('new_password') ? 'is-invalid':'' }}" id="password">
                                        @error('new_password')
                                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Повторите пароль</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="confirm_password" class="form-control {{ $errors->has('confirm_password') ? 'is-invalid':'' }}" id="password">
                                        @error('confirm_password')
                                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row text-center">
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-primary text-right">Сохранить</button>
                                    </div>
                                </div>



                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
