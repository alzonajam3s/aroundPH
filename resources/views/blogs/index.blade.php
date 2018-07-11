@extends('layouts.app')

@include('partials.meta_static')

@section('content')
{{-- CAROUSEL --}}
<div class="container-fluid">
	<section id="demos">
		<div class="row">
			<div class="owl-carousel owl-theme">
				@foreach($carousels as $carousel)
					<div class="item">
						<img src="/images/carousel_image/{{ $carousel->image_name }}">
					</div>
				@endforeach
			</div>
		</div>
	</section>
</div>

                          
 
<div class="row">
	<div class="col-md-9">
		<div class="">
			<h3 class="text-center">
				= = = = = = = = = <i class="fab fa-blogger-b"></i> Latest BLogs = = = = = = = = =</h3>
  		</div>
	    <div class="container">
			@foreach($blogs as $blog)
				<div class="mb-4">
					<div class="card-header text-center">
						<h2><a class="text-dark" href="{{ route('blogs.show', $blog->id) }}">{{ ucfirst($blog->title) }}</a></h2>
					</div>
					<div class="card-body">
						@if($blog->featured_image)
							<div class="text-center">
								<img class="img-fluid filimit shadowman" src="/images/featured_image/{{ $blog->featured_image ? $blog->featured_image : '' }}" alt="{{ str_limit($blog->title , 50)}}">
							</div>
						@endif
						<p>{!! str_limit($blog->body , 200) !!}</p>
						<div class="text-right">
							<a href="{{ route('blogs.show' , $blog->id) }}" class="btn color3 lead ml-2 text-dark"> <i class="fas fa-hand-point-right"></i> Continue Reading</a>
						</div>
					</div>
					<div class="card-footer text-muted">
						@if($blog->user)
							<span class="mr-2"><i class="far fa-bookmark"></i> By: <a href="{{ route('users.show' , $blog->user->name) }}">{{ ucfirst($blog->user->name) }}</a></span>
							@foreach($blog->category as $category)
								<span class="mr-2"><i class="far fa-list-alt"></i> Categories:<a href="{{ route('categories.show' , $category->slug) }}"> {{ ucfirst($category->name) }}</a></span>
							@endforeach
							<span class="mr-2"><i class="far fa-clock"></i> Created at: {{ $blog->created_at->format('m/d/Y')}}</span>
							<span class="mr-2"><i class="far fa-clock"></i> Last Update: {{ $blog->updated_at->diffForHumans()}}</span>	
						@endif
					</div>
				</div>
				<hr>
			@endforeach
			<div class="offset-md-5">
				{!! $blogs->links() !!}
			</div>
		</div>
	</div>
	<div class="col-md-3">
		{{-- DESTINATIONS --}}
		<div class="container">
			<div class="">
				<h3 class="text-center"><i class="fas fa-map-marked-alt"></i> Destinations</h3>
	  			<img class="card-img-top img-fluid" src="/images/featured_image/ph2.png" alt="Card image cap">
	  		</div>
	  		<div class="card-body">
		    	@foreach($categories as $category)
					<h4 class="text-right ">
						<a class="text-dark" href="{{ route('categories.show' , $category->slug) }}">{{ucfirst($category->name)}} <i class="fas fa-map-marker-alt"></i></a>
					</h4>
				@endforeach
				<div class="card-footer">
				</div>
			</div>
		</div>
		{{-- NEWS --}}
		<div class="container">
			<div class="">
				<h3 class="text-center"><i class="far fa-newspaper"></i> NEWS</h3>
	  		</div>
	  		<div class="card-body">
		    	<img class="card-img-top img-fluid" src="/images/featured_image/coming3.jpg" alt="Card image cap">
		    	{{-- @foreach($categories as $category)
					<h4 class="text-right ">
						<a class="text-dark" href="{{ route('categories.show' , $category->slug) }}">{{ucfirst($category->name)}} <i class="fas fa-map-marker-alt"></i></a>
					</h4>
				@endforeach --}}
				<div class="card-footer">
				</div>
			</div>
		</div>
		{{-- ARTICLES --}}
		<div class="container">
			<div class="">
				<h3 class="text-center"><i class="fas fa-grip-vertical"></i> ARTICLES</h3>
	  		</div>
	  		<div class="card-body">
	  			<img class="card-img-top img-fluid" src="/images/featured_image/coming3.jpg" alt="Card image cap">
		    	{{-- @foreach($categories as $category)
					<h4 class="text-right ">
						<a class="text-dark" href="{{ route('categories.show' , $category->slug) }}">{{ucfirst($category->name)}} <i class="fas fa-map-marker-alt"></i></a>
					</h4>
				@endforeach --}}
				<div class="card-footer">
				</div>
			</div>
		</div>
	</div>
</div>

	</div>
</div>
                          
<div class="container-fluid">
	<img class="img-fluid" src="/images/featured_image/aroundPH.png">
</div>


@endsection