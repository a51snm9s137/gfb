@extends('layouts.main_blog_layout')

@section('title', 'Post')

@section('content')
    <!-- Page section -->
	<section class="page-section post-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-md-1">
					<div class="post-thumb set-bg" data-setbg="{{$post->preview_image}}">
					</div>
					<div class="post-content">
						<h3>{{$post->title}}</h3>
						{!! $post->content !!}
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
{{-- {!! $post->text !!} --}}
{{-- {{$post->text}} --}}
