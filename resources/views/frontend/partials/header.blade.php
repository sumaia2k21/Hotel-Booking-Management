<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                {{$hotels->name}}
                
                
                <!-- <img src="{{url('/uploads/'. $hotels->logo)}}" alt="Your logo" style="height:35px;" /> -->
               
            </a>
            <!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('survice')}}">Facilities</a>
                    </li>
                    <li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Rooms <span class="fa fa-angle-down"></span>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{route('room')}}">Room Types</a>
							<a class="dropdown-item" href="{{route('all.room.view')}}"> All Room</a>
						</div>
					</li>
                    
                    @if(auth()->user())
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>                 
                    <li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							My account<span class="fa fa-angle-down"></span>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							
                            <a class="dropdown-item" href="{{route('mybooking.status')}}">My Booking status</a>
                            <a class="dropdown-item" href="{{route('viewprofile')}}">view profile</a>
                            @if(auth()->user())
                        <a class="dropdown-item" href="{{route('guest.logout')}}">logout/{{auth()->user()->name}}</a>
                        @else
                        <a class="dropdown-item" href="{{route('user.signup')}}">login/signup</a>
                        @endif

							
						</div>
					</li>
                    
                        @else
                        
                        @endif
                    
                        <li class="nav-item active">
                        <a class="nav-link" href="{{route('gallary')}}">Gallary</a>

                    </li>
                   
                    <li class="nav-item active">
                    @if(auth()->user())
                        <a class="nav-link" href="{{route('guest.logout')}}">logout/{{auth()->user()->name}}</a>
                        @else
                        <a class="nav-link" href="{{route('user.signup')}}">login/signup</a>
                        @endif
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.login')}}">Admin</a>
                    </li>
                   
                </ul>

            </div>
        </div>
    </nav>
    <!--//nav-->
</header>




