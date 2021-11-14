<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                        <img src="{{asset('assets/images/4.png')}}" alt="Softy Pinko"/>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{route('home')}}">Home</a></li>

                    @if(auth()->user())
                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="{{route('blog')}}">Blog Entries </a></li>
                            <li><a href="{{route('blogPost')}}">Create Blog </a></li>
                            <li><a href="{{route('viewPost')}}">List Post</a></li>

                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="{{route('logout')}}">Log out</a></li>




                    @else


                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="{{route('blog')}}" >Blog Entries</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>

                            <li><a href="{{route('login')}}">Log in</a></li>
                              <li><a href="{{route('register')}}">Register</a></li>



                        @endif

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
