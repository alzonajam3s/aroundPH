@extends('layouts.app')

@section('content')


	<div class="row">
		<div class="col-md-3 offset-md-2">
			<hr>
				<h4 class="text-center"><i class="fas fa-plane-departure "></i> Philippine Destinations</h4>
			<hr>

			@foreach($categories as $category)
			<h4 class="text-right">
				<a href="{{ route('categories.show' , $category->slug) }}">{{ucfirst($category->name)}} <i class="fas fa-map-marker-alt"></i></a>
			</h4>
			@endforeach
		</div>
		<div class="col-md-7">
			<div class="container-fluid">
				<img class="img-fluid" src="/images/featured_image/ph2.png">
			</div>
		</div>
	</div>

	
@endsection