@extends('layouts.main_blog_layout')

@section('title', 'Главная страница')

@section('content')
	<!-- Page section -->
	<section class="post-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">

						@foreach ($posts as $post)
						<div class="col-md-6">
							<div class="post-card">
								<div class="pc-thumb set-bg hover-overlay" data-setbg="{{$post->preview_image}}">
								<a href="{{route('main.show', $post->id)}}">
									<div class="mask"></div>
								</a>
									<div class="cat-card">{{$post->category->title}}</div>
								</div>
								<div class="pc-content">
									<a href=""><h5>{!! mb_substr($post->title, 0 , 25) !!}..</h5></a>
                                    <p>{!! mb_substr($post->content, 0 , 105) !!}...</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>

					<div class="m-auto">
						{{$posts->links()}}
					</div>

				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0 ">
					<!-- widget -->
					<div class="widget-item">
						<form class="search-widget">
							<input name="search_field" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}"
                                @endif type="text" class="form-control" id="exampleFormControlInput1" placeholder="Поиск">
							<button><i class="fa fa-search"></i></button>
						</form>
                        <form class="select-spad">
                            <select name="category_id" class="form-select form-select-sm search-select" aria-label=".form-select-sm example" style="width: 200px">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" @if(isset($_GET['category_id'])) @if($_GET['category_id'] == $category->id) selected @endif @endif>{{$category->title}}</option>
                                @endforeach
                            </select>
                            <button><i class="fa fa-search"></i></button>
                        </form>
					</div>


					<!-- widget -->
					<div class="widget-item">
						<h4 class="widget-title">Последние добавления</h4>
						@foreach ($lastPosts as $post)
						<div class="widget-card set-bg hover-overlay" data-setbg="{{$post->preview_image}}">
							<a href="{{route('main.show', $post->id)}}"><div class="mask"></div></a>
							<span class="cat-card">{{$post->category->title}}</span>
							<div class="wc-content text-white">
								<h5><a href="{{route('main.show', $post->id)}}">{!! mb_substr($post->title, 0 , 50) !!}</a></h5>
								<p>{!! mb_substr($post->content, 0 , 100) !!}...</p>
							</div>
						</div>
						@endforeach

					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->
@endsection
