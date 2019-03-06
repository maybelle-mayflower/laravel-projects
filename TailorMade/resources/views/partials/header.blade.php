<table class="doc-loader">
            <tbody>
                <tr>
                    <td>

                        <img src="images/ajax-document-loader.gif" alt="Loading...">                    
                    </td>
                </tr>
            </tbody>
        </table>   
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="margin-bottom: 20px;">
    <a class="navbar-brand" href="/">TailorMade</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                @guest
                <a class="nav-link dropdown-toggle"  id="dropdown09" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">User Account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    
                    <a class="dropdown-item" href="{{ route('register') }}">Sign up</a>
                    <a class="dropdown-item" href="{{ route('login') }}">Sign in</a>
                    @else
                    <a class="nav-link dropdown-toggle"  id="dropdown09" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                        <a class="dropdown-item"  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </li>
        </ul>
    </div>
</nav>


        <div class="menu-wraper center-relative">
            <div class="menu-logo center-text">
                <a href="index.html">
                    <img src="images/reopenDefaultLogo.png" alt="Reopen" />
                </a>               
            </div>
            <nav id="header-main-menu" class="big-menu">
                <ul class="main-menu sm sm-clean">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}">About</a>
                    </li>
                    <li>
                        <a href="blog.html">Search Gallery</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="contact-map.html">Contact + Map</a>
                            </li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="more.html">More</a>
                    </li>                                        
                </ul>                
            </nav>            
            <div class="clear"></div>
        </div>