@extends('admin.layouts.admin_layout')

@section('title', 'Редактировать пост')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать статью ID:{{$post->id}}</h1>
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
                    <form action="{{ route('admin.post.update', $post->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                       placeholder="Введите название статьи" value="{{$post->title}}"required>
                            </div>
                            @error('title')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="card-body">
                            <div class="form-group w-25">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($category['id'] ==
                                        $post['category_id']) selected @endif>{{ $category->title }}
                                    </option>
                                @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="card-body">
                        <div class="form-group">
                            <label>Тэги</label>
                            <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                               @foreach($tags as $tag)
                                <option {{ is_array($post->tags->pluck('id')->toArray() ) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : '' }}
                                    value="{{$tag->id}}">{{$tag->title}}</option>
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
                                    <textarea name="content" class="editor">{{$post->content}}</textarea>
                                </div>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="card-body">
                                <label for="feature_image">Превью</label>
                                <img src="" alt="" class="img-uploaded" style="display: block; width: 200px">
                                <input type="text" name="preview_image" class="form-control" id="feature_image"  value="{{$post->preview_image}}"
                                    readonly, required>
                                <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                @error('preview_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

