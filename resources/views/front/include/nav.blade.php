<nav>
    <div class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="{{route('front.home')}}" class="navbar-brand">Logo</a>
            <ul class="navbar-nav ms-auto ">
                <li><a href="{{route('front.home')}}" class="nav-link">Home</a></li>

                <li><a href="{{route('front.about')}}" class="nav-link">About</a></li>
                <li><a href="{{route('front.contact')}}" class="nav-link">Contact</a></li>

                <li><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>

                @if(auth()->check())
                    <li><a href="{{ route('dashboard') }}" class="nav-link font-medium">Welcome, {{ auth()->user()->name }}</a></li>



                    <li> <a href="javascript:void(0);" class="nav-link" ; onclick="event.preventDefault();
                document.getElementById('logoutForm').submit()">  Logout </a>
                        <form action="{{route('logout')}}" method="post" id="logoutForm">
                            @csrf
                        </form>
                    </li>
                @else
                    {{-- User is a guest --}}
                    <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endif

            </ul>
        </div>
    </div>
</nav>
