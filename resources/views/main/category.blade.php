@extends('layouts.main_blog_layout')

@section('title', 'Категории')

@section('content')

    <!-- Page section -->


	<section class="post-section spad">

		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-md-1">
                    <div class="post-card">
                        <h3>
                            Все статьи
                        </h3>
                    </div>
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
									<a href="{{route('main.show', $post->id)}}">
                                        <h5>{!! mb_substr($post->title, 0 , 35) !!}</h5>
                                    </a>
									<p>{!! mb_substr($post->content, 0 , 100) !!}...</p>
								</div>
							</div>
						</div>
						@endforeach

					<div class="m-auto">
						{{$posts->links()}}
					</div>

				</div>
				<!-- sidebar -->
				<div class="col-lg-4 col-md-7 sidebar pt-5 pt-lg-0">

				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->

@endsection
