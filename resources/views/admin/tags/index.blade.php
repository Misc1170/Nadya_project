@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Тэги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Надины блоги</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="Поиск">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th colspan="3" class="text-center">Дейсвтия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td>{{$tag->id}}</td>
                                            <td>{{$tag->title}}</td>
                                            <td><a href="{{route('admin.tag.show', $tag->id)}}"><i
                                                        class="far fa-eye"></i></a></td>
                                            <td><a href="{{route('admin.tag.edit', $tag->id)}}"
                                                   class="text-success"><i class="fas fa-pen-alt"></i></a></td>
                                            <td>
                                                <form action="{{route('admin.tag.delete',$tag->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" role="button" class="border-0 bg-transparent">
                                                    <i class="fas fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <a href="{{ route('admin.tag.create') }}" class="btn btn-block btn-primary">Создать
                        тэг</a>
                </div>
            </div>
        </section>
    </div>
@endsection
