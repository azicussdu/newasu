@extends('layouts.system')
@section('title', 'Разрешения')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Разрешения</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Разрешения</li>
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
                            <a href="{{ route('permission.create') }}" class="btn btn-primary">Добавить</a>
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
                                @foreach($permissions as $k=>$permission)
                                    <tr>
                                        <td>{{ $k+1 }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            <a href="{{ route('permission.show', $permission) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('permission.edit', $permission) }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="{{ route('permission.destroy', $permission) }}" method="post" style="display: contents">
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
