@csrf
<div class="tab-content" id="nav-tabContent">
    @if (count($errors) > 0)
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Фамилия</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $student->id==null ? old('lastname') : $student->lastname}}">
                @error('lastname')
                <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Имя</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $student->id==null ? old('firstname') : $student->firstname }}" required>
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
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">ИИН</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('iin') is-invalid @enderror" name="iin" value="{{ old('iin') }}" id="kt_inputmask_iin">
                @error('iin')
                <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
        </div>
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
            <label class="col-sm-2 col-form-label">Семейное положение</label>
            <div class="col-sm-10">
                <select class="form-control" name="family_status_id" id="family_status_id">
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Национальность</label>
            <div class="col-sm-10">
                <select class="form-control" name="nationality_id">
                    <option value="" selected="selected">Выберите национальность</option>
                    @foreach($nationalities as $nationality)
                        <option value="{{ $nationality->id }}" {{ old('nationality_id')==$nationality->id ? 'selected':'' }}>{{$nationality->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Гражданство</label>
            <div class="col-sm-10">
                <select class="form-control" name="citizenship_id" id="сitizenship_id" required>
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
            <label class="col-sm-2 col-form-label required">Общежитие</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hostel" value="1">
                    <label class="form-check-label" for="inlineRadio1">Да</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hostel" id="inlineRadio2" value="0">
                    <label class="form-check-label" for="inlineRadio2">Нет</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Сирота</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="orphan" value="1">
                    <label class="form-check-label" for="inlineRadio1">Да</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="orphan" value="0">
                    <label class="form-check-label" for="inlineRadio2">Нет</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Ребенок, оставшийся без попечения родителей</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="child_without" value="1">
                    <label class="form-check-label" for="inlineRadio1">Да</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="child_without" value="0">
                    <label class="form-check-label" for="inlineRadio2">Нет</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Инвалид</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disabled_person" value="1">
                    <label class="form-check-label" for="inlineRadio1">Да</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disabled_person" value="0">
                    <label class="form-check-label" for="inlineRadio2">Нет</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Обучается на военной кафедре</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="studying_military" value="1">
                    <label class="form-check-label" for="inlineRadio1">Да</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="studying_military" value="0">
                    <label class="form-check-label" for="inlineRadio2">Нет</label>
                </div>
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
            <label class="col-sm-2 col-form-label">Дата выдачи документа, удостоверяющего личность</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="doc_give_date" value="{{ old('doc_give_date') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Срок действия документа, удостоверяющего личность</label>
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
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Вложение (прикрепите скан копию документа, удостоверяющего личность: где ФИО)</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="ud_scan" value="">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Вложение (прикрепите скан копию документа, аттестата о среднем (полном) образовании)</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="at_scan" value="">
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-profession_info" role="tabpanel" aria-labelledby="nav-profession_info-tab">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Дата поступления</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="admission_date" value="{{ old('admission_date') }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Образование при поступлении</label>
            <div class="col-sm-10">
                <select class="form-control" name="education_admission_id" id="education_admission_id" required>
                    <option value="">Выберите</option>
                    @foreach($education_admissions as $education_admission)
                        <option value="{{ $education_admission->id }}" {{ old('education_admission_id')==$education_admission->id ? 'selected':'' }}>{{$education_admission->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Уровень образования (Академическая степень)</label>
            <div class="col-sm-10">
                <select class="form-control" name="degree_type_id" id="degree_type_id" required>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Форма обучения</label>
            <div class="col-sm-10">
                <select class="form-control" name="studyform_id" id="studyform_id" required>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Изученный иностранный язык в школе</label>
            <div class="col-sm-10">
                <select class="form-control" name="foreign_lan_school_id" required>
                    <option value="">Выберите</option>
                    @foreach($foreign_lan_schools as $foreign_lan_school)
                        <option value="{{ $foreign_lan_school->id }}" {{ old('foreign_lan_school_id')==$foreign_lan_school->id ? 'selected':'' }}>{{$foreign_lan_school->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Специальность/Группа образовательных программ</label>
            <div class="col-sm-10">
                <select class="form-control" name="profession_id" id="profession_id" required>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Специализация/Образовательная программа</label>
            <div class="col-sm-10">
                <select class="form-control" name="specialization_id" id="specialization_id" required>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Язык обучения</label>
            <div class="col-sm-10">
                <select class="form-control" name="center_studylanguage_id" required>
                    @foreach($center_studylanguages as $center_studylanguage)
                        <option value="{{ $center_studylanguage->id }}" {{ old('center_studylanguage_id')==$center_studylanguage->id ? 'selected':'' }}>{{$center_studylanguage->name}}</option>
                    @endforeach
                </select>
                @error('center_studylanguage_id')
                <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Курс обучения</label>
            <div class="col-sm-10">
                <select class="form-control" name="course_id" id="course_id" required>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Группа</label>
            <div class="col-sm-10">
                <select class="form-control" name="group_id" id="group_id" required>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Обучение за счет средств (Форма оплаты)</label>
            <div class="col-sm-10">
                <select class="form-control" name="paymentform_id">
                    <option value="">Выберите</option>
                    @foreach($paymentforms as $paymentform)
                        <option value="{{ $paymentform->id }}" {{ old('paymentform_id')==$paymentform->id ? 'selected':'' }}>{{$paymentform->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label required">Обучается по квоте</label>
            <div class="col-sm-10">
                <select class="form-control" name="benefit_id">
                    @foreach($benefits as $benefit)
                        <option value="{{ $benefit->id }}" {{ old('benefit_id')==$benefit->id ? 'selected':'' }}>{{$benefit->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Номер свидетельства о гранте</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="grant_cer_number" value="{{ old('grant_cer_number') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Серия свидетельства о гранте</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="grant_cer_ser" value="{{ old('grant_cer_ser') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Дата присуждения гранта</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="grant_give_date" value="{{ old('grant_give_date') }}">
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
                <input type="text" class="form-control" name="mobile_phone" value="{{ old('mobile_phone') }}" id="kt_inputmask_phone">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Почта</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">№ зачетной книжки</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="book_number" value="{{ old('book_number') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Фото</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="photo" value="{{ old('photo') }}">
            </div>
        </div>
    </div>
    <hr>
    <div class="row mb-3">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-sm btn-success">Сохранить</button>
        </div>
    </div>
</div>


@section('script')


    <script>
        var id={{$student->id ?? 0 }};
        if(id!=0){
            alert('editing');
        }
        else{
        }

        $("#gender_id").change(function () {
            var gender_id = $(this).val();
            var _token = $("input[name='_token']").val();
            if (gender_id) {
                $.ajax({
                    url: "{{ route('get_by_gender_s') }}",
                    type: "post",
                    data: {_token: _token, gender_id: gender_id, student_id:id, oldvalue:{{old('family_status_id', 0)}} },
                    success: function (response) {
                        $('#family_status_id').html(response);
                    }
                });
            }
        });
        $("#сitizenship_id").change(function () {
            var сitizenship_id = $(this).val();
            var _token = $("input[name='_token']").val();
            if (сitizenship_id == 1) {
                $('#iin_kaz').show();
                $('#iin_other').hide();
            }
            if (сitizenship_id != 1) {
                $('#iin_kaz').hide();
                $('#iin_other').show();

            }
        });
        $("#main_region_id").change(function () {
            var regionID = $(this).val();
            var _token = $("input[name='_token']").val();
            if (regionID) {
                $.ajax({
                    url: "{{ route('get_by_region') }}",
                    type: "post",
                    data: {_token: _token, rid: regionID},
                    success: function (response) {
                        // $.each(response.data, function(key, value) {
                        //     console.log( key + " : " + value );
                        // });
                        $('#region_id').html(response);
                    }
                });
            }
        });

        $("#profession_id").change(function () {
            var professionID = $(this).val();
            var _token = $("input[name='_token']").val();
            if (professionID) {
                $.ajax({
                    url: "{{ route('get_by_profession') }}",
                    type: "post",
                    data: {_token: _token, pid: professionID},
                    success: function (response) {
                        // $.each(response.specializations, function(key, value) {
                        //     console.log( key + " : " + value );
                        // });
                        $('#specialization_id').html(response);
                    }
                });
            }
        });
        $("#specialization_id").change(function () {
            var specializationID = $(this).val();
            var _token = $("input[name='_token']").val();
            if (specializationID) {
                $.ajax({
                    url: "{{ route('get_by_specialization') }}",
                    type: "post",
                    data: {_token: _token, sid: specializationID},
                    success: function (response) {
                        // $.each(response.specializations, function(key, value) {
                        //     console.log( key + " : " + value );
                        // });
                        $('#group_id').html(response);
                    }
                });
            }
        });
        {{--$("#paymentform_id").change(function(){--}}
        {{--    var paymentform_id = $(this).val();--}}
        {{--    var _token = $("input[name='_token']").val();--}}
        {{--    if(paymentform_id==2){--}}
        {{--        $.ajax({--}}
        {{--            url:"{{ route('get_by_gosorgan_kvota') }}",--}}
        {{--            type:"post",--}}
        {{--            data: {_token:_token, paymentform_id:paymentform_id},--}}
        {{--            success:function(response){--}}
        {{--                $('#kvota_id').html(response);--}}
        {{--            }--}}
        {{--        });--}}
        {{--    }--}}
        {{--    else{--}}
        {{--        $('#kvota_id').html("");--}}
        {{--    }--}}
        {{--});--}}


        //education_admission

        $("#education_admission_id").change(function () {
            var education_admission_id = $(this).val();
            var _token = $("input[name='_token']").val();
            if (education_admission_id) {
                $.ajax({
                    url: "{{ route('get_by_education_admission') }}",
                    type: "post",
                    data: {_token: _token, education_admission_id: education_admission_id},
                    success: function (response) {
                        $('#degree_type_id').html(response);
                    }
                });
            }
        });

        //
        $("#degree_type_id").change(function () {
            var degree_type_id = $(this).val();
            var _token = $("input[name='_token']").val();
            if (degree_type_id) {
                $.ajax({
                    url: "{{ route('get_by_degree') }}",
                    type: "post",
                    data: {_token: _token, degid: degree_type_id},
                    success: function (response) {
                        // $.each(response.specializations, function(key, value) {
                        //     console.log( key + " : " + value );
                        // });
                        $('#studyform_id').html(response);
                    }
                });
            }
        });

        //

        $("#degree_type_id").change(function () {
            var degree_type_id1 = $(this).val();
            var _token = $("input[name='_token']").val();
            if (degree_type_id1) {
                $.ajax({
                    url: "{{ route('get_by_degree_profession') }}",
                    type: "post",
                    data: {_token: _token, degreegid: degree_type_id1},
                    success: function (response) {
                        // $.each(response.specializations, function(key, value) {
                        //     console.log( key + " : " + value );
                        // });
                        $('#profession_id').html(response);
                    }
                });
            }
        });

        //

        $("#studyform_id").change(function () {
            var studyform_id = $(this).val();
            var _token = $("input[name='_token']").val();
            if (studyform_id) {
                $.ajax({
                    url: "{{ route('get_by_studyform') }}",
                    type: "post",
                    data: {_token: _token, studyform_id: studyform_id},
                    success: function (response) {
                        // $.each(response.specializations, function(key, value) {
                        //     console.log( key + " : " + value );
                        // });
                        $('#course_id').html(response);
                    }
                });
            }
        });
    </script>
@endsection

