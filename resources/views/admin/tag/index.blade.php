@extends('admin.layouts.admin_layout')

@section('title', 'Добавить тэг')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все тэги</h1>
                </div>
            </div><!-- /.row -->



        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 2%">ID</th>
                                <th style="width: 30%">Название</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <td>{{$tag->id}}</td>
                                        <td>{{$tag->title}}</td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="{{ route('admin.tag.edit', $tag->id) }}" style="display: inline-block">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>


                                        <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST" style="display: inline-block" >
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-danger btn-sm delete-btn" >
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </button>
                                        </form>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

