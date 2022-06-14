@extends('admin.layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все статьи</h1>
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
                                <th style="width: 30%">Заголовок</th>
                                <th style="width: 30%">Описание</th>
                                <th style="width: 20%">Ид категории</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{mb_substr($post->title, 0 , 40)}}</td>
                                        <td>{{mb_substr($post->content, 0 , 50)}}...</td>
                                        <td>{{$post->category->title}}</td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="{{ route('admin.post.edit', $post->id) }}" style="display: inline-block">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>


                                        <form action="{{ route('admin.post.delete', $post->id) }}" method="POST" style="display: inline-block" >
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

