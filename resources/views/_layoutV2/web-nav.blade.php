<div class="lqd-sticky-placeholder hidden"></div>
<header id="site-header" class="main-header main-header-overlay" data-sticky-header="true" data-sticky-values-measured="false" data-sticky-options='{"disableOnMobile": true}'>
    <section class="lqd-section desktop-header md:hidden">
        <div class="container-fluid p-0">
            <div class="flex flex-wrap w-full justify-between">
                <div class="navbar-brand-plain w-15percent py-30 flex">
                    <a href="/" class="navbar-brand flex relative p-0 leading-1/4em">
                        <span class="navbar-brand-inner post-rel">
                            <img class="logo-default" src="/webv2/images/logo.png" alt="Nippon Paint Cambodia">
                        </span>
                    </a>
                </div>
                <div class="module-primary-nav w-60percent flex justify-end lg:w-85percent">
                    <div class="navbar-collapse inline-flex lqd-submenu-cover p-0" id="main-header-collapse" aria-expanded="false" role="navigation">
                        <ul id="primary-nav" class="main-nav flex justify-center reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-default lqd-submenu-toggle-hover" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector" : ">li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
                            <li class="is-active">
                                <a class="leading-1/4em text-blue-700" href="/">
                                    Home
                                </a>
                            </li>

                            <li class="menu-item-has-children">
                                <a class="leading-1/4em text-blue-700" href="/Products">
                                    Products
                                    <span class="submenu-expander"></span>
                                    <span class="link-icon inline-flex hide-if-empty right-icon">
                                        <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                    </span>
                                </a>
                                <ul class="nav-item-children">
                                    @foreach ($nav as $item)
                                    <li>
                                        <a href="/Products/{{$item->category_tag}}">{{$item->category_name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a class="leading-1/4em text-blue-700" href="#case-studies">
                                    About Company
                                    <span class="submenu-expander"></span>
                                    <span class="link-icon inline-flex hide-if-empty right-icon">
                                        <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                                    </span>
                                </a>
                                <ul class="nav-item-children">
                                    <li>
                                        <a href="/Project-Reference">Project Reference</a>
                                    </li>
                                    <li>
                                        <a href="/News">News & Media</a>
                                    </li>
                                    <li>
                                        <a href="/Career">Career</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="/Painting-Services">
                                    Painting Services
                                </a>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="/About-Us">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="/Contact-Us">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a class="leading-1/4em text-blue-700" href="/login">
                                    Color Palette
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-25percent flex items-center justify-end lg:hidden">
                    <div class="widget-text-editor mr-15">
                        <h6 class="whitespace-nowrap mt-1em text-end">
                            <span class="text-12 opacity-70 text-blue-700 leading-1/15em tracking-0">More Information</span>
                            <br>
                            <strong>
                                <span class="text-15 text-orange-500 leading-1/15em tracking-1">+855 11 822 266 / 11 907 902</span>
                            </strong>
                        </h6>
                    </div>
                    <div class="module-btn px-0/5em">
                        <a href="/login" class="btn btn-solid btn-md uppercase text-13 font-bold  leading-1/4em bg-white rounded-100 shadow-md text-blue-700 hover:text-white">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="lqd-mobile-sec relative">
        <div class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full">
            <div class="lqd-mobile-modules-container empty"></div>
            <button type="button" class="bg-transparent border-none navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end p-0" data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav" aria-expanded="false" data-toggle-options='{ "changeClassnames":  {"html":  "mobile-nav-activated"} }'>
                <span class="sr-only">Menu</span>
                <span class="bars inline-block relative z-1">
                    <span class="bars-inner flex flex-col w-full h-full">
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                    </span>
                </span>
            </button>
            <a class="navbar-brand flex relative leading-1/4em" href="/">
                <span class="navbar-brand-inner">
                    <img class="logo-default" src="/webv2/images/logo.png" alt="Hub">
                </span>
            </a>
        </div>
        <div class="lqd-mobile-sec-nav w-full absolute z-10">
            <div class="mobile-navbar-collapse navbar-collapse collapse w-full" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
                <ul id="mobile-primary-nav" class="reset-ul lqd-mobile-main-nav main-nav lqd-submenu-toggle-hover">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7550 current_page_item menu-item-7601">
                        <a href="/" class="leading-1/4em">Home</a>
                    </li>
                    <li class="menu-item-has-children">

                        <a class="leading-1/4em" href="/Products">
                            Products
                            <span class="submenu-expander absolute"></span>
                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                            </span>
                        </a>
                        <ul class="nav-item-children">
                            @foreach ($nav as $item)
                            <li>
                                <a href="/Products/{{$item->category_tag}}">{{$item->category_name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="/Painting-Services" class="leading-1/4em">
                            Painting Service
                            <span class="submenu-expander absolute"></span>
                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a class="leading-1/4em " href="#">
                            About Company
                            <span class="submenu-expander absolute"></span>
                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                            </span>
                        </a>
                        <ul class="nav-item-children">
                            <li>
                                <a href="/Project-Reference">Project Reference</a>
                            </li>
                            <li>
                                <a href="/News">News & Media</a>
                            </li>
                            <li>
                                <a href="/Career">Career</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="leading-1/4em" href="/Painting-Services">
                            Painting Services
                        </a>
                    </li>
                    <li>
                        <a href="/Contact-Us" class="leading-1/4em">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="/login" class="leading-1/4em">
                            Color Palette
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
