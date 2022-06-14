@extends('admin.layouts.admin_layout')

@section('title', 'Редактировать тег')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0"> Редактирование тэга: {{$tag->title}} (id: {{$tag->id}})</h1>
                </div>

            </div><!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card card-primary">

                    <!-- form start -->
                    <form action="{{route('admin.tag.update', $tag->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" value="{{$tag->title}}" name="title" class="form-control" id="exampleInputEmail1"
                                       placeholder="Введите название тега " required>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

