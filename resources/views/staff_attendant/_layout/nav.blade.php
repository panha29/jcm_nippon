<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="logo position-relative">
        <a href="/">
            <!-- Logo can be added directly -->
            <!-- <img src="/img/logo/logo-white.svg" alt="logo" /> -->
            <h3 style="margin-top: auto; margin-bottom: auto; color:white"><b>JCM NIPPON PAINT</b></h3>
            <!-- Or added via css to provide different ones for different color themes -->
            {{-- <div class="img"></div> --}}
            {{-- <img src="{{URL::asset('../../img/logo/logo.png')}}" alt="" style="width:260px !important"> --}}
        </a>
    </div>
    <!-- Logo End -->

    <!-- Language Switch Start -->
    {{-- <div class="language-switch-container">
        <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">DE</a>
            <a href="#" class="dropdown-item active">EN</a>
            <a href="#" class="dropdown-item">ES</a>
        </div>
    </div> --}}
    <!-- Language Switch End -->

    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="/img/profile/profile-9.webp" />
            <div class="name">{{ Auth::user()->name }}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-end user-menu wide">
            <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                    <div class="text-extra-small text-primary">ACCOUNT</div>
                </div>
                <div class="col-6 pe-1 ps-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-acorn-icon="gear" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>

                            <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                            <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- User Menu End -->

    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu nav">
            <li>
                <a href="/User/Dashboard" draggable="false">
                    <i data-acorn-icon="align-justify" class="icon" data-acorn-size="18"></i>
                    <span class="label">ទំព័រដើម</span>
                </a>
            </li>
            <li>
                <a href="/User/Checkin" draggable="false">
                    <i data-acorn-icon="calendar" class="icon" data-acorn-size="18"></i>
                    <span class="label">Check in</span>
                </a>
            </li>
            <li>
                <a href="/User/Detail/{{auth::user()->id}}" draggable="false">
                    <i data-acorn-icon="settings-1" class="icon" data-acorn-size="18"></i>
                    <span class="label">ប្រវត្តិរូប</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Menu End -->

    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Scrollspy Mobile Button Start -->
        <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
            <i data-acorn-icon="menu-dropdown"></i>
        </a>
        <!-- Scrollspy Mobile Button End -->

        <!-- Scrollspy Mobile Dropdown Start -->
        <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
        <!-- Scrollspy Mobile Dropdown End -->

        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button" style="color: black">
            <i data-acorn-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->
</div>
<div class="nav-shadow"></div>
