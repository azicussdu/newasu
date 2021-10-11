@extends('layouts.system')
@section('title', 'Просмотр')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Просмотр</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Просмотр</li>
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
                    <a href="{{ route('role.index') }}"><button type="button" class="btn btn-primary">Назад</button></a>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <h3>{{ $role->name }}</h3>
                            <p>Разрешения:</p>

                            @if(!empty($rolePermissions))

                                @foreach($rolePermissions as $v)

                                    <label class="label label-success">{{ $v->name }}</label><br>

                                @endforeach

                            @endif
                        </div>

                        <!-- /.col -->

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </section>
@endsection
