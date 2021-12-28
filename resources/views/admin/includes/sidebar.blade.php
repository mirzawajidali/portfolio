<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="index.html">
                 <img src="{{ asset('public/assets/images/logo.png')}}" class="img-fluid" width="10%" height="10%" alt="" /><span>Admin</span></a></div>
                <li class="label">Main</li>
                <li><a href="{{ route('dashboard') }}"><i class="ti-home"></i> Dashboard </a></li>
                <li><a href="{{ route('profile') }}"><i class="ti-user"></i> Profile </a></li>
                <li><a href="{{ route('banner') }}"><i class="ti-image"></i> Banner </a></li>
                <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>  About  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('skill') }}">Skills</a></li>
                        <li><a href="chartjs.html">Interest</a></li>
                        <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                        <li><a href="chartist.html">Others</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('logout') }}"><i class="ti-close"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->
