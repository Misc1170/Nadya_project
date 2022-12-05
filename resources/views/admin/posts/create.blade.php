@extends('admin.layouts.admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Добавление поста</h1>
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
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <form action="{{ route('admin.post.store') }}" method="post">
                        @csrf
                        <div class="form-group col-5">
                            <label>Название поста</label>
                            <input type="text" class="form-control" name="title"
                                   placeholder="Введите название поста" value="{{old('title')}}">
                            @error('title')
                            <div class="text-danger">Поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <textarea id="summernote" name="content">
                                {{old('content')}}
                            </textarea>
                            @error('content')
                            <div class="text-danger">Поле необходимо заполнить</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
