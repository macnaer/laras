@extends('layouts.layout')
@section('content')	
    <div id="overviews" class="section wb">
        <div class="container">
            <hr class="invis"> 
            <div class="row"> 
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
							<a class="hover-btn-new orange" href="{{ route('post.show', ['id'=> $post->post_id]) }}"><span>Read More<span></a>
						</div>
					</div>
                </div><!-- end col -->
            <hr class="hr3">
            </div>
        </div><!-- end container -->
    </div><!-- end section -->
@endsection