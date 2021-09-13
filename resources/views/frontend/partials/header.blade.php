<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/hotels.png" alt="Your logo" style="height:35px;" />
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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <!-- <li class="nav-item @@services__active">
						<a class="nav-link" href="{{route('testroom')}}">Facilities</a>
					</li> -->



                    <li class="nav-item active">
                        @if(auth()->user())
                        <a class="nav-link" href="{{route('guest.logout')}}">logout/{{auth()->user()->name}}</a>
                        @else
                        <a class="nav-link" href="{{route('user.signup')}}">login/signup</a>
                        @endif

                    </li>





                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('room')}}">Room</a>

                    </li>
                    <li class="nav-item @@services__active">
                        <a class="nav-link" href="{{route('gallary')}}">Gallary</a>

                    </li>
                    <li class="nav-item @@services__active">
                        <a class="nav-link" href="{{route('viewprofile')}}">view profile</a>

                    </li>

                    <li class="nav-item @@services__active">
                        <a class="nav-link" href="{{route('mybooking.status')}}">My Booking status</a>

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




