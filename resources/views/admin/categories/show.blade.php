@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-4" >{{$category->title}}</h1>
                        <a href="{{route('admin.category.edit', $category->id)}}" class="text-success"><i class="fas fa-pen-alt"></i></a>
                        <form action="{{route('admin.category.delete',$category->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" role="button" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger"></i>
                            </button>
                        </form>
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
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$category->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Title</td>
                                            <td>{{$category->title}}</td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-block btn-primary">??????????????
                        ??????????????????</a>
                </div>
            </div>
        </section>
    </div>
@endsection
