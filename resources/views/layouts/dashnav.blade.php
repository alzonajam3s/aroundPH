{{-- SIDE NAVIGNATION FOR ADMIN and AUTHOR --}}
<div class="sidenav">
	@if(Auth::user() && Auth::user()->role_id === 1)
		<a class="text-center" href="{{ route('dashboard') }}">
			<i class="fas fa-users-cog fa-3x text-dark"></i>
		</a>
		<p class="lead text-center">Admin Dashboard</p>
	    <hr>

    @elseif(Auth::user() && Auth::user()->role_id === 2)
		<a class="text-center">
			<i class="fas fa-users-cog fa-3x text-dark"></i>
		</a>
		<p class="lead text-center">Author Dashboard</p>
	    
    @elseif(Auth::user() && Auth::user()->role_id === 3)
    
    @endif
    <a href="{{ route('blogs') }}"><i class="fas fa-home"></i> Home</a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <hr>
	@if(Auth::user() && Auth::user()->role_id === 1)
            <p class="lead text-black ml-2"><strong>Blogs</strong></p>
            <a href="{{ route('pages.myblogs' , Auth::User()->name) }}" >
                <i class="fas fa-address-book"></i> My Blogs </a>        
            <a href="{{ route('blogs.create') }}" >
                <i class="fas fa-plus-circle"></i> Create Blog</a>
            <a href="{{ route('admin.blogs') }}" >
                <i class="fab fa-firstdraft"></i> Draft Blog</a>
            <a href="{{ route('blogs.trash') }}" >
                <i class="fas fa-trash-alt"></i> Trashed Blog</a>
        <hr>
            <p class="lead text-black ml-2"><strong>Categories</strong></p>
            <a href="{{ route('pages.catlist') }}" >
            	<i class="fas fa-certificate"></i> Category List</a>
            <a href="{{ route('categories.create') }}" >
            	<i class="fas fa-plus-circle"></i> Create Category</a>
        <hr>
            <p class="lead text-black ml-2"><strong>Users</strong></p>
            <a href="{{ route('users.index') }}" >
            	<i class="fas fa-user-tag"></i> Manage Users</a>                        
        <hr>
            <p class="lead text-black ml-2"><strong>Carousel</strong></p>
            <a href="{{ route('carousel.index') }}" >
                <i class="fas fa-images"></i> Carousel Images</a> 
        <hr>

    @elseif(Auth::user() && Auth::user()->role_id === 2)
        <p class="lead text-black ml-2"><strong>Blogs</strong></p>
        <a href="{{ route('blogs.create') }}" >
        	<i class="fas fa-plus-circle"></i> Create Blog</a>
        <a href="{{ route('pages.myblogs' , Auth::User()->name) }}" >
            <i class="fas fa-address-book"></i> My Blogs</a>

    @elseif(Auth::user() && Auth::user()->role_id === 3)

    @endif
</div>