<div class="nav-content d-flex">
    <!-- Logo Start -->
    <div class="">
        <a href="/">
            <!-- Logo can be added directly -->
           <img src="/img/logo.png" alt="logo" draggable="false"  class="custom-logo"/>

            <!-- Or added via css to provide different ones for different color themes -->
            {{-- <div class="img"></div> --}}
        </a>
    </div>
    <!-- Logo End -->

    <!-- User Menu Start -->
    <div class="user-container d-flex">
        <a draggable="false" href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="profile" alt="profile" src="/img/profile/avatar-svgrepo-com.svg" />

            <div class="name">KESOR BOUTIQUE</div>
        </a>
        <div class="dropdown-menu dropdown-menu-end user-menu wide">


            <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                    <div class="separator-light"></div>
                </div>
                <div class="col-6 ps-1 pe-1">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i data-acorn-icon="help" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Help</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i data-acorn-icon="file-text" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">Docs</span>
                            </a>
                        </li>
                    </ul>
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
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
                                <span class="align-middle">{{ __('Logout') }}</span>
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

    <!-- Icons Menu Start -->
    <ul class="list-unstyled list-inline text-center menu-icons">
        <li class="list-inline-item">
            <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-acorn-icon="search" data-acorn-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="pinButton" class="pin-button">
                <i data-acorn-icon="lock-on" class="unpin" data-acorn-size="18"></i>
                <i data-acorn-icon="lock-off" class="pin" data-acorn-size="18"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#" id="colorButton">
                <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
            </a>
        </li>

    </ul>
    <!-- Icons Menu End -->

    <!-- Menu Start -->
    <div class="menu-container flex-grow-1">
        <ul id="menu" class="menu">
            <div class="col-12 p-1 mb-3 pt-3">
                <div class="text-extra-small text-primary" class="" style="color: white !important;">INDEX</div>
            </div>
            <li>
                <a href="/Admin/Home" draggable="false">
                    <i data-acorn-icon="shop" class="icon" data-acorn-size="18"></i>
                    <span class="label">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#calendars" data-href="/Calendar/index" draggable="false">
                    <i data-acorn-icon="calendar" class="icon" data-acorn-size="18"></i>
                    <span class="label">Calendar</span>
                </a>
                <ul id="calendars">
                    <li>
                        <a href="/Admin/Calendar/index" draggable="false">
                            <span class="label">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Calendar/Booking" draggable="false">
                            <span class="label">Bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Calendar/Project" draggable="false">
                            <span class="label">Project</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#products" data-href="/Products/List" draggable="false">
                    <i data-acorn-icon="cupcake" class="icon" data-acorn-size="18"></i>
                    <span class="label">Products</span>
                </a>
                <ul id="products">
                    <li>
                        <a href="/Admin/Products/List" draggable="false">
                            <span class="label">List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#orders" data-href="/Orders/List" draggable="false">
                    <i data-acorn-icon="cart" class="icon" data-acorn-size="18"></i>
                    <span class="label">Records</span>
                </a>
                <ul id="orders">
                    <li>
                        <a href="/Admin/Orders/List" draggable="false">
                            <span class="label">Index</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Orders/Issued" draggable="false">
                            <span class="label">Issue Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Orders/Cashcollection" draggable="false">
                            <span class="label">Cash Collection</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Orders/Outstandingbalance" draggable="false">
                            <span class="label">Outstanding Balance</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Orders/Customer" draggable="false">
                            <span class="label">Customer History</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Admin/Orders/Report" draggable="false">
                            <span class="label">Sale Report</span>
                        </a>
                    </li>

                </ul>
            </li>
            {{-- <li>
                <a href="#issueds" data-href="/Issueds/List" draggable="false">
                    <i data-acorn-icon="content" class="icon" data-acorn-size="18"></i>
                    <span class="label">Issued Report</span>
                </a>
                <ul id="issueds">
                    <li>
                        <a href="/Admin/Issueds/List" draggable="false">
                            <span class="label">List</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li>
                <a href="/Admin/Customers/Index" data-href="/Customers/List" draggable="false">
                    <i data-acorn-icon="user" class="icon" data-acorn-size="18"></i>
                    <span class="label">Customers</span>
                </a>
            </li>

            <li>
                <a href="/Admin/Sale/all-item" draggable="false">
                    <i data-acorn-icon="shipping" class="icon" data-acorn-size="18"></i>
                    <span class="label">Sale</span>
                </a>
            </li>
            <div class="col-12 p-1 mb-3 pt-3">
                <div class="text-extra-small text-primary" style="color: white !important;">USER ACCOUNT</div>
            </div>
            <li>
                <a href="/Admin/Accounts/List" draggable="false">
                    <i data-acorn-icon="user" class="icon" data-acorn-size="18"></i>
                    <span class="label">Accounts</span>
                </a>
            </li>
            <div class="col-12 p-1 mb-3 pt-3">
                <div class="text-extra-small text-primary" style="color: white !important;">BUSINESS REPORT</div>
            </div>
            <li>
                <a href="/Business/Customer-History" draggable="false">
                    <i data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                    <span class="label">Statement Payment</span>
                </a>
                {{-- <a href="/Accounts/Post%Expense" draggable="false">
                    <i data-acorn-icon="file-text" class="icon" data-acorn-size="18"></i>
                    <span class="label">Post Expense</span>
                </a>
                <a href="/Accounts/Income%Statement" draggable="false">
                    <i data-acorn-icon="file-data" class="icon" data-acorn-size="18"></i>
                    <span class="label">Income Statement</span>
                </a>
                <a href="/Accounts/Balance%Sheet" draggable="false">
                    <i data-acorn-icon="file-chart" class="icon" data-acorn-size="18"></i>
                    <span class="label">Balance Sheet</span>
                </a> --}}
            </li>
        </ul>
    </div>

    <!-- Menu End -->

    <!-- Mobile Buttons Start -->
    <div class="mobile-buttons-container">
        <!-- Menu Button Start -->
        <a href="#" id="mobileMenuButton" class="menu-button">
            <i data-acorn-icon="menu"></i>
        </a>
        <!-- Menu Button End -->
    </div>
    <!-- Mobile Buttons End -->
</div>
<div class="nav-shadow"></div>
