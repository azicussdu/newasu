@extends('layouts.auth')

@section('title')
    Регистрация
@endsection

@section('content')
    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('home') }}" class="h1"><b>AUEZOV</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">РЕГИСТРАЦИЯ</p>

                <form action="{{route('register_process')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control {{ $errors->has('lastname') ? 'is-invalid':'' }}" placeholder="Фамилия">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('lastname')
                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="firstname" value="{{ old('firstname') }}" class="form-control {{ $errors->has('firstname') ? 'is-invalid':'' }}" placeholder="Имя">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('firstname')
                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="patronymic" value="{{ old('patronymic') }}" class="form-control {{ $errors->has('patronymic') ? 'is-invalid':'' }}" placeholder="Отчество">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" name="birthdate" value="{{ old('birthdate') }}" class="form-control {{ $errors->has('birthdate') ? 'is-invalid':'' }}" placeholder="Дата рождения">
                        @error('birthdate')
                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="iin" value="{{ old('iin') }}" class="form-control {{ $errors->has('iin') ? 'is-invalid':'' }}" placeholder="ИИН">
                        @error('iin')
                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="tel" value="{{ old('tel') }}" class="form-control {{ $errors->has('tel') ? 'is-invalid':'' }}" placeholder="Телефон">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                        @error('tel')
                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid':'' }}" placeholder="Пароль">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid':'' }}" placeholder="Повторите пароль">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password_confirmation')
                        <span id="" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <a href="{{ route('login') }}" class="text-center">У меня аккаунт уже есть</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->


    </body>

@endsection
