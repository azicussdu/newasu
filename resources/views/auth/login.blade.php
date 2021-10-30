@extends('layouts.auth')

@section('title')
    Вход
@endsection

@section('content')
<!--begin::Wrapper-->
<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
	<!--begin::Form-->
	<form class="form w-100"  action="{{ route('login_process') }}" method="POST">
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
		<!--begin::Heading-->
		<div class="text-center mb-10">
			<!--begin::Title-->
			<h1 class="text-dark mb-3">Вход в систему</h1>
			<!--end::Title-->
		</div>
		<!--begin::Heading-->
		<!--begin::Input group-->
		<div class="fv-row mb-10">
			<!--begin::Label-->
			<label class="form-label fs-6 fw-bolder text-dark">Логин</label>
			<!--end::Label-->
			<!--begin::Input-->
			<input class="form-control form-control-lg form-control-solid {{ $errors->has('login') ? 'is-invalid':'' }}" type="text" name="login" autocomplete="off" />
			<!--end::Input-->
            @error('login')
            <div class="fv-plugins-message-container invalid-feedback">
                <div data-field="" data-validator="">
                    {{ $message }}
                </div>
            </div>
            @enderror
		</div>
		<!--end::Input group-->
		<!--begin::Input group-->
		<div class="fv-row mb-10">
			<!--begin::Wrapper-->
			<div class="d-flex flex-stack mb-2">
				<!--begin::Label-->
				<label class="form-label fw-bolder text-dark fs-6 mb-0">Пароль</label>
				<!--end::Label-->
				<!--begin::Link-->
				<a href="" class="link-primary fs-6 fw-bolder">Забыли пароль?</a>
				<!--end::Link-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Input-->
			<input class="form-control form-control-lg form-control-solid {{ $errors->has('password') ? 'is-invalid':'' }}" type="password" name="password" autocomplete="off" />
			<!--end::Input-->
            @error('password')
            <div class="fv-plugins-message-container invalid-feedback">
                <div data-field="" data-validator="">
                    {{ $message }}
                </div>
            </div>
            @enderror
		</div>
		<!--end::Input group-->
		<!--begin::Actions-->
		<div class="text-center">
			<!--begin::Submit button-->
			<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
				<span class="indicator-label">Войти</span>
			</button>
			<!--end::Submit button-->
		</div>
		<!--end::Actions-->
	</form>
	<!--end::Form-->
</div>
<!--end::Wrapper-->

@endsection
