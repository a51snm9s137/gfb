@extends('admin.layouts.admin_layout')

@section('title', 'Добавить пост')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить статью</h1>
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
                    <form action="{{ route('admin.post.store')}}" method="POST" >
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" name="title" class="form-control"
                                       placeholder="Введите название статьи">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group w-25">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{ $category->title }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="form-group">
                                <label>Тэги</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                                    @foreach($tags as $tag)
                                    <option value="{{ $tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                                @error('tag_ids')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">


                            <div class="card-body">
                                <div class="form-group">
                                    <textarea name="content" class="editor"></textarea>
                                </div>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="card-body">
                                <label for="feature_image">Превью</label>
                                <img src="" alt="" class="img-uploaded" style="display: block; width: 200px">
                                <input type="text" name="preview_image" class="form-control" id="feature_image"  value=""
                                    readonly, required>
                                <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                @error('preview_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

