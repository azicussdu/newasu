@extends('layouts.system')
@section('title', 'Роли')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Роли</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Роли</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('role.create') }}" class="btn btn-primary">Добавить</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if(Session::has('info'))
                                <div class="alert alert-primary" role="alert">
                                    {{ Session::get('info') }}
                                </div>
                            @endif
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>
                                    <th>#</th>
                                    <th>Название</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $k=>$role)
                                    <tr>
                                        <td>{{ $k+1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a href="{{ route('role.show', $role) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('role.edit', $role) }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('role.destroy', $role) }}" method="post" style="display: contents">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
