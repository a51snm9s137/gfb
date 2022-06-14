<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="/main/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/main/css/style.css"/>
</head>

<body>
	<!-- Navbar section -->
	<header class="navbar-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="{{route('main.index')}}">
				<img src="/storage/logo2.png" alt="">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					@foreach($categories as $category)
					<li><a href="{{route('main.category', $category->id)}}">{{$category->title}}</a></li>
					@endforeach
				</ul>
			</nav>
		</div>
	</header>
	<!-- Navbar section end -->

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide">


<div class="carousel-inner">
  <div class="carousel-item active">

    <div class="view">
        <section class="carousel-info set-bg hover-overlay" data-setbg="/storage/2.png">
		<a href="{{route('main.index')}}"><div class="mask"></div></a>
            <div class="ci-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 text-white ">
							<h2>GameFiBlog</h2>
                            <p>На сайте вы увидите актуальную информацию о block-chain проектах</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  </div>

  @foreach ($carouselPosts as $post)
  <div class="carousel-item">
    <div class="view">
        <section class="carousel-info set-bg hover-overlay" data-setbg="{{$post->preview_image}}">
		<a href="{{route('main.show', $post->id)}}"><div class="mask"></div></a>
            <div class="ci-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 text-white ">
							<h2>{!! mb_substr($post->title, 0 , 30) !!}</h2>
                            <p>{!! mb_substr($post->content, 0 , 100) !!}...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  </div>
  @endforeach

<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<!--Carousel Wrapper-->



<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
<!-- Content Wrapper. Contains page content -->


<!-- card section  -->
<section class="card-block spad">
		<div class="container">
			<div class="section-title">
				<h2>Другие статьи</h2>
			</div>
			<div class="row">


				@foreach ($randomPosts as $post)
				<div class="col-lg-4 col-md-6">
					<div class="post-card">
						<div class="pc-thumb set-bg hover-overlay" data-setbg="{{$post->preview_image}}">
						<a href="{{route('main.show', $post->id)}}">
							<div class="mask"></div>
						</a>
							<div class="cat-card">{{$post->category->title}}</div>
						</div>

						<div class="pc-content">
							<a href="*"><h5>{!! mb_substr($post->title, 0 , 25) !!}...</h5></a>
							<p>{!! mb_substr($post->content, 0 , 100) !!}...</p>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</section>

    <!-- card section  -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright">
                Сайт сделал: Меренков Илья гр. 1141 для выпускной квалификационной работы
            </p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="/main/js/jquery-3.2.1.min.js"></script>
	<script src="/main/js/bootstrap.min.js"></script>
	<script src="/main/js/main.js"></script>
    </body>
</html>
