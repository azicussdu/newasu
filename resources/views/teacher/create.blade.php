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
                    <a href="{{ route('teacher.index') }}"><button type="button" class="btn btn-primary">Назад</button></a>

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
                                                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Персональные сведения</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="#upload_photo" data-toggle="tab">Загрузка фото</a></li>
                                                            </ul>
                                                        </div><!-- /.card-header -->
                                                        <div class="card-body">
                                                            <div class="tab-content">
                                                                <div class="active tab-pane" id="activity">
                                                                    <form class="form-horizontal" action="{{ route('employee.store') }}" method="post">
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
                                                                            <label for="inputName" class="col-sm-2">Прежняя фамилия (в случае ее изменения)</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="old_lastname" value="{{ old('old_lastname') }}" class="form-control" id="inputName" placeholder="Прежняя фамилия (в случае ее изменения)">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="offset-sm-2 col-sm-10">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                                                    <label for="customCheckbox1" class="custom-control-label">Доступ к системе</label>
                                                                                </div>
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
                                                                                <select name="nationality_id" id="" class="form-control select2 {{ $errors->has('nationality_id') ? 'is-invalid':'' }}" style="width: 100%;">
                                                                                    <option value="0" selected="selected">Выберите национальность</option>
                                                                                    @foreach($nationalities as $nationality)
                                                                                        <option value="{{ $nationality->id }}" {{ old('nationality_id')==$nationality->id ? 'selected':'' }}>{{$nationality->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('nationality_id')
                                                                                <span id="" class="error invalid-feedback">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputName" class="col-sm-2">Гражданство</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="сitizenship_id" id="" class="form-control select2" style="width: 100%;">
                                                                                    <option value="0" selected="selected">Выберите гражданство</option>
                                                                                    @foreach($сitizenships as $сitizenship)
                                                                                        <option value="{{ $сitizenship->id }}" {{ old('сitizenship_id')==$сitizenship->id ? 'selected':'' }}>{{$сitizenship->name}}</option>
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
{{--                                                                                    @foreach($f_statuses as $f_status)--}}
{{--                                                                                        <option value="{{ $f_status->id }}" {{ old('f_status_id')==$f_status->id ? 'selected':'' }}>{{$f_status->name}}</option>--}}
{{--                                                                                    @endforeach--}}
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



                                                                        <hr>
                                                                        <div class="form-group row">
                                                                            <div class="offset-sm-2 col-sm-10">
                                                                                <button type="submit" class="btn btn-success">Сохранить</button>
                                                                            </div>
                                                                        </div>


                                                                    </form>

                                                                </div>
                                                                <!-- /.tab-pane -->

                                                                <div class="tab-pane" id="upload_photo">
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

