<div class="lqd-sticky-placeholder hidden"></div>
<header id="site-header" class="main-header main-header-overlay" data-sticky-header="true" data-sticky-values-measured="false" data-sticky-options='{"disableOnMobile": true}'>
    <section class="lqd-section desktop-header md:hidden">
        <div class="container-fluid p-0">
            <div class="flex flex-wrap w-full justify-between">
                <div class="navbar-brand-plain w-15percent flex">
                    <a href="/User/Dashboard" class="navbar-brand flex relative p-0 leading-1/4em">
                        <span class="navbar-brand-inner post-rel">
                            <div class="row">
                                <div class="col" style="padding-right:0;">
                                    <img class="logo-default" src="/webv2/images/logon.png" alt="Nippon Paint Cambodia ថ្មាំលាបផ្ទះ nippon paint" style="float: right">
                                </div>
                                <div class="col">
                                    <h3>NIPPON PAINT</h3>
                                </div>
                            </div>
                        </span>
                    </a>
                </div>
                <div class="module-primary-nav w-60percent flex justify-end lg:w-85percent">
                    <div class="navbar-collapse inline-flex lqd-submenu-cover p-0" id="main-header-collapse" aria-expanded="false" role="navigation">
                        <ul style="font-weight: 600; text-transform:uppercase;" id="primary-nav" class="main-nav flex justify-center reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-default lqd-submenu-toggle-hover" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector" : ">li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
                            <li class="is-active">
                                <a class="leading-1/4em text-blue-700" href="/User/Dashboard">
                                    Home
                                </a>
                            </li>

                            <li class="menu-item-has-children">
                                <a class="leading-1/4em text-blue-700" href="/User/Products">
                                    Products
                                    <span class="submenu-expander"></span>
                                    {{-- <span class="link-icon inline-flex hide-if-empty right-icon">
                                        <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                    </span> --}}
                                </a>
                                {{-- <ul class="nav-item-children">
                                    @foreach ($nav as $item)
                                    <li>
                                        <a href="/User/Products/{{$item->category_tag}}">{{$item->category_name}}</a>
                                    </li>
                                    @endforeach
                                </ul> --}}
                            </li>

                            <li class="menu-item-has-children">
                                <a class="leading-1/4em text-blue-700">
                                    About Company
                                    <span class="submenu-expander"></span>
                                    <span class="link-icon inline-flex hide-if-empty right-icon">
                                        <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                    </span>
                                </a>
                                <ul class="nav-item-children">
                                    <li>
                                        <a href="/User/Project-Reference">Project Reference</a>
                                    </li>
                                    <li>
                                        <a href="/User/News">News & Media</a>
                                    </li>
                                    <li>
                                        <a href="/User/Career">Career</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="/User/Painting-Services">
                                    Painting Services
                                </a>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="/User/About-Us">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="/User/Contact-Us">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="/User/Color-Palette">
                                    Color Palette
                                </a>
                            </li>
                            @if(Auth::user()->member == 'yes')
                                <li>
                                    <a class="leading-1/4em text-blue-700" href="/User/Color-Pricing">
                                        Color Pricing
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="flex items-center justify-end lg:hidden">
                    <div class="widget-text-editor mr-15">
                        <h6 class="whitespace-nowrap mt-1em text-end">
                            <span class="text-12 opacity-70 text-blue-700 leading-1/15em tracking-0">Welcome!</span>
                            <br>
                            <strong>
                                <span class="text-15 text-orange-500 leading-1/15em tracking-1">{{Auth::user()->name}}</span>
                            </strong>
                        </h6>
                    </div>
                    <div class="module-btn px-0/5em">
                        <a class="btn btn-solid btn-md uppercase text-13 font-bold  leading-1/4em bg-white rounded-100 shadow-md text-blue-700 hover:text-white" href="/logout">
                        Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="lqd-mobile-sec relative">
        <div class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full">
            <div class="lqd-mobile-modules-container empty"></div>
            <a class="navbar-brand flex relative leading-1/4em" href="/User/Dashboard" style="width: 45%; display:block; margin-top:auto; margin-bottom:auto; padding:0">
                <span class="navbar-brand-inner">
                    <div class="row">
                        <div class="col" style="padding-right:0;">
                            <img class="logo-default" src="/webv2/images/logon.png" alt="Nippon Paint Cambodia ថ្មាំលាបផ្ទះ nippon paint" style="float: right">
                        </div>
                        <div class="col">
                            <h3 style="margin-bottom: 0">NIPPON PAINT</h3>
                        </div>
                    </div>
                </span>
            </a>
            <div style="margin:auto">
                <a class="" href="/User/Dashboard" style="float: right;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M10 11H7.101l.001-.009a4.956 4.956 0 0 1 .752-1.787 5.054 5.054 0 0 1 2.2-1.811c.302-.128.617-.226.938-.291a5.078 5.078 0 0 1 2.018 0 4.978 4.978 0 0 1 2.525 1.361l1.416-1.412a7.036 7.036 0 0 0-2.224-1.501 6.921 6.921 0 0 0-1.315-.408 7.079 7.079 0 0 0-2.819 0 6.94 6.94 0 0 0-1.316.409 7.04 7.04 0 0 0-3.08 2.534 6.978 6.978 0 0 0-1.054 2.505c-.028.135-.043.273-.063.41H2l4 4 4-4zm4 2h2.899l-.001.008a4.976 4.976 0 0 1-2.103 3.138 4.943 4.943 0 0 1-1.787.752 5.073 5.073 0 0 1-2.017 0 4.956 4.956 0 0 1-1.787-.752 5.072 5.072 0 0 1-.74-.61L7.05 16.95a7.032 7.032 0 0 0 2.225 1.5c.424.18.867.317 1.315.408a7.07 7.07 0 0 0 2.818 0 7.031 7.031 0 0 0 4.395-2.945 6.974 6.974 0 0 0 1.053-2.503c.027-.135.043-.273.063-.41H22l-4-4-4 4z"></path></svg>
                </a>
            </div>
            <button style="width: 30px" type="button" class="bg-transparent border-none navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end p-0" data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav" aria-expanded="false" data-toggle-options='{ "changeClassnames":  {"html":  "mobile-nav-activated"} }'>
                <span class="sr-only">Menu</span>
                <span class="bars inline-block relative z-1">
                    <span class="bars-inner flex flex-col w-full h-full">
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                    </span>
                </span>
            </button>
        </div>

        {{-- mobile nav --}}
        <div class="lqd-mobile-sec-nav w-full absolute z-10">
            <div class="mobile-navbar-collapse navbar-collapse collapse w-full" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
                <ul id="mobile-primary-nav" class="reset-ul lqd-mobile-main-nav main-nav lqd-submenu-toggle-hover">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7550 current_page_item menu-item-7601">
                        <a href="/User/Price-List" class="leading-1/4em">Price List</a>
                    </li>
                    {{-- @if(Auth::user()->duty == 'duty') --}}

                    <li class="menu-item-has-children">
                        <a class="leading-1/4em" href="/User/Products">
                            Products
                            <span class="submenu-expander absolute"></span>
                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                            </span>
                        </a>
                        <ul class="nav-item-children">
                            @foreach ($nav as $item)
                            <li>
                                <a href="/User/Products/{{$item->category_tag}}">{{$item->category_name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- <li class="menu-item-has-children">
                        <a class="leading-1/4em ">
                            About Company
                            <span class="submenu-expander absolute"></span>
                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                            </span>
                        </a>
                        <ul class="nav-item-children">
                            <li>
                                <a href="/User/Project-Reference">Project Reference</a>
                            </li>
                            <li>
                                <a href="/User/News">News & Media</a>
                            </li>
                            <li>
                                <a href="/User/Career">Career</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="leading-1/4em" href="/User/Painting-Services">
                            Painting Services
                        </a>
                    </li>
                    <li>
                        <a href="/User/About-Us" class="leading-1/4em">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="/User/Contact-Us" class="leading-1/4em">
                            Contact Us
                        </a>
                    </li>
                    @endif --}}

                    <li>
                        <a href="/User/Mobile/ColorPalette" class="leading-1/4em">
                            Color Palette
                        </a>
                    </li>
                    {{-- @if(Auth::user()->member == 'yes')
                    <li>
                        <a href="/User/Color-Pricing" class="leading-1/4em">
                            Color Pricing
                        </a>
                    </li>
                    <li>
                        <a href="/User/Checkin" class="leading-1/4em">
                            កំណត់ត្រាវត្តមាន
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="/User/Name" class="leading-1/4em">
                            Account Setting
                        </a>
                    </li> --}}
                    <div class="row" style="display: flex; padding: 0px 25px; align-items:center;">
                        <div class="col">
                            <h5 class="uppercase">
                                {{Auth::user()->name}}
                            </h5>
                        </div>
                        <div class="col">
                            <li style="float:right;">
                                <a style="background-color:orange; color:white" class="btn btn-solid btn-md uppercase text-13 font-bold leading-1/4em bg-white rounded-100 shadow-md text-white-700 hover:text-white" href="/logout">
                                    Logout
                                </a>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        {{-- end of mobile nav --}}
    </div>
</header>
<script>
    var appilix_push_notification_user_identity = "{{Auth::user()->email}}";
    console.log(appilix_push_notification_user_identity);
</script>
