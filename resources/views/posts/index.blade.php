@extends('layouts.layout')
@section('content')	
    <div id="overviews" class="section wb">
        <div class="container">
			@if(isset($_GET['search']))
			@if(count($posts) > 0)
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
				<div class="col-md-8 offset-md-2">Posts found {{ count($posts) }}</div>
			@else
			<h2> Search by: <?= $_GET['search'] ?> not found. </h2>
			<a href="{{ route('post.index') }}">Show all posts</a>
            </div><!-- end title -->
			@endif
			@endif
            <hr class="invis"> 

            <div class="row"> 
                @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<img src="{{ $post->img ?? asset('images/default.jpg') }}" alt="" class="img-fluid">
						</div>
						<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">{{ $post->created_at }}</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">{{ $post->name }}</a> </span>
						</div>
						<div class="blog-title">
							<h2><a href="#" title="">{{ $post->short_title }}</a></h2>
						</div>
						<div class="blog-desc">
							<p>{{ $post->description }}</p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="#"><span>Read More<span></a>
						</div>
					</div>
                </div><!-- end col -->
                @endforeach
            <hr class="hr3">
            </div>
			@if(!isset($_GET['search']))
            {{ $posts->links() }}
			@endif
        </div><!-- end container -->
    </div><!-- end section -->
@endsection