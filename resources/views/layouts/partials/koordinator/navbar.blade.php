<?php
use App\Models\tb_koordinator;

$koordinator = tb_koordinator::where('id_user', Auth::user()->id)->first();

?>


<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #F69000;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars" style="color: #FFFFFF;"></i></a>
        </li>
        
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt" style="color: #FFFFFF;"></i>
            </a>
        </li>
        <li class="nav-item hidden-caret">
            <h3 class="text-white mr-2 mt-2">{{ Auth::User()->name }}</h3>
        </li>
        <li class="nav-item dropdown hidden-caret">
            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm float-right">
                 @if ($koordinator->profile_pict != null)
                    <img src="{{ $koordinator->gambar() }}" alt="Profile"
                    class="avatar-img rounded-circle">
                     
                 @endif
                    
                </div>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                        <div class="user-box">
                            <div class="u-text">
                                <h3>{{ Auth::User()->name }}</h3>
                                <p class="text-muted">{{ Auth::User()->email }}</p>
                            </div>
                        </div>
                    </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            @if (Auth::user()->id != 1)
                                <a class="dropdown-item" href="/koordinator/profile">Profile</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/koordinator/logout">Logout</a>
                        </li>
                </div>
            </ul>
        </li>   
        {{-- <li class="nav-item">
            <a class="nav-link" 
                href="/logout" role="button" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <p style="color: #FFFFFF;" class="btn-hover">Logout</p> 
                
            </a>
            <form action="/logout" id="logout-form" method="post">
                @csrf
            </form> --}}
        </li>
    </ul>
</nav>