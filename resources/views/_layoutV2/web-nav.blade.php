<style>
    .inline-ul>li>a {
    display: inline-flex;
    color: black;
}
    [data-mobile-nav-scheme=dark] .lqd-mobile-sec .navbar-collapse {
    background-color: #fff;
}
[data-mobile-nav-scheme=dark] .lqd-mobile-sec .header-module .social-icon>li>a, [data-mobile-nav-scheme=dark] .lqd-mobile-sec .main-nav .lqd-custom-menu>li>a, [data-mobile-nav-scheme=dark] .lqd-mobile-sec ul.main-nav.lqd-mobile-main-nav>li>a {
    border-color: rgba(255, 255, 255, .1);
    color: #191d18;
}
.h3, h3{
    font-family: "Golos Text", sans-serif;
    font-size: 25px;
    line-height: 1.2em;
    font-weight: 600;
    text-transform: var(--lqd-h3-text-transform, var(--lqd-heading-text-transform));
    letter-spacing: -0.5px;
    color: #273653
}
.lqd-mobile-sec .navbar-brand {
    padding: 0;
    max-width: 75% !important;
}
.lqd-mobile-sec .navbar-header {

    height: 50px;
}
</style>
<div class="lqd-sticky-placeholder hidden"></div>
<header id="site-header" class="main-header main-header-overlay sticky-header-noshadow" data-sticky-header="true" data-sticky-values-measured="false" data-sticky-options='{"disableOnMobile": true}'>
    {{-- <div class="lqd-hide-onstuck flex flex-wrap items-center justify-center transition-all py-10 bg-transparent module-top" style="background-image: linear-gradient(90deg, #84F0B2 0%, #5F91A7 100%);">
        <div class="ld-fancy-heading relative bg-white rounded-16 px-15 mr-15">
            <p class="ld-fh-element mb-0 inline-block relative text-10 text-medium uppercase tracking-2">Free update</p>
        </div>
        <div class="ld-fancy-heading relative">
            <h6 class="ld-fh-element mb-0 inline-block relative text-14 text-medium nav-text">Free support, Free updates, Free plugins.</h6>
        </div>
        <a href="#" class="btn btn-underlined border-thick ml-10 text-14 text-medium leading-1em text-white-60 hover:nav-text" target="_blank" rel="nofollow">
            <span class="btn-txt" data-text="Join Us">Join Us</span>
        </a>
    </div> --}}
    <div class="module-header flex justify-center md:hidden">
        <div class="module-sticky static flex flex-row items-center justify-between border-1 border-white-10 rounded-100 transition-all pr-10 pl-30">
            <div class="flex items-center justify-start">
                <div id="site-logo" class="module-logo flex navbar-brand-plain pointer-events-auto py-20 pr-30">
                    <a class="navbar-brand flex p-0 relative" href="/" rel="home">
                        <span class="navbar-brand-inner post-rel">
                            <img class="logo-sticky" src="../img/logo/logo-new.png" alt="JCM Nippon Paint, House Paint Cambodia, House Paint Phnom Penh," style="width: 200px">
                            <img class="logo-default" src="../img/logo/logo-new.png" alt="JCM Nippon Paint, House Paint Cambodia, House Paint Phnom Penh," style="width: 200px">
                        </span>
                    </a>
                </div>
                <div class="navbar-collapse inline-flex p-0 lqd-submenu-default-style items-stretch h-full pointer-events-auto" id="main-header-collapse" aria-expanded="false" role="navigation">
                    <ul class="main-nav flex reset-ul inline-ul lqd-menu-counter-left lqd-menu-items-inline main-nav-hover-fade-inactive" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
                        <li class="menu-item-object-page menu-item-home">
                            <a href="/" class="text-16 font-medium nav-text">Home<sup class="link-sup">01</sup></a>
                        </li>
                        <li class="menu-item-object-page menu-item-has-children">
                            <a href="/Products" class="text-16 font-medium nav-text">
                                <span>Products</span>
                                <span class="submenu-expander">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="32" viewBox="0 0 21 32" style="width: 1em; height: 1em;">
                                        <path fill="currentColor" d="M10.5 18.375l7.938-7.938c.562-.562 1.562-.562 2.125 0s.562 1.563 0 2.126l-9 9c-.563.562-1.5.625-2.063.062L.437 12.562C.126 12.25 0 11.876 0 11.5s.125-.75.438-1.063c.562-.562 1.562-.562 2.124 0z"></path>
                                    </svg>
                                </span>
                                <sup class="link-sup">02</sup>
                            </a>
                            <ul class="nav-item-children">
                                <li>
                                    <a href="/Products/Interior">Interior</a>
                                </li>
                                <li>
                                    <a href="/Products/Exterior">Exterior</a>
                                </li>
                                <li>
                                    <a href="/Products/Sealer_Primer">Primer & Sealer</a>
                                </li>
                                <li>
                                    <a href="/Products/Wood_Metal">Wood & Metal</a>
                                </li>
                                <li>
                                    <a href="/Products/Coating">Coating</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-object-page">
                            <a href="/About-Us" class="text-16 font-medium nav-text">About<sup class="link-sup">03</sup></a>
                        </li>

                        <li class="menu-item-object-page menu-item-has-children">
                            <a href="#" class="text-16 font-medium nav-text">
                                <span>Company</span>
                                <span class="submenu-expander">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="32" viewBox="0 0 21 32" style="width: 1em; height: 1em;">
                                        <path fill="currentColor" d="M10.5 18.375l7.938-7.938c.562-.562 1.562-.562 2.125 0s.562 1.563 0 2.126l-9 9c-.563.562-1.5.625-2.063.062L.437 12.562C.126 12.25 0 11.876 0 11.5s.125-.75.438-1.063c.562-.562 1.562-.562 2.124 0z"></path>
                                    </svg>
                                </span>
                                <sup class="link-sup">04</sup>
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

                        <li class="menu-item-object-page">
                            <a href="../page-start-hub-5-contact.html" class="text-16 font-medium nav-text">Contact<sup class="link-sup">05</sup></a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="login" class="btn btn-solid pointer-events-auto text-primary bg-green-300 rounded-100 module-btn-sm">
                <span class="btn-txt" >Login</span>
            </a>
        </div>
    </div>

    <div class="lqd-mobile-sec relative">
        <div class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full">
            {{-- <div class="lqd-mobile-modules-container empty"></div> --}}
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
                    {{-- <img class="logo-default" src="/webv2/images/logo.png" alt="Hub"> --}}
                        <img class="logo-default" src="../img/logo/logo.png" alt="Nippon Paint Cambodia ថ្មាំលាបផ្ទះ nippon paint">
                </span>
            </a>
        </div>
        <div class="lqd-mobile-sec-nav w-full absolute z-10">
            <div class="mobile-navbar-collapse navbar-collapse collapse w-full" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
                <ul id="mobile-primary-nav" class="reset-ul lqd-mobile-main-nav main-nav lqd-submenu-toggle-hover">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7550 current_page_item menu-item-7601">
                        <a href="/Home" class="leading-1/4em">Home</a>
                    </li>
                    <li class="menu-item-has-children">

                        <a class="leading-1/4em" href="/Products">
                            Products
                            <span class="submenu-expander absolute"></span>
                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                            </span>
                        </a>
                        {{-- <ul class="nav-item-children">
                            @foreach ($nav as $item)
                            <li>
                                <a href="/Products/{{$item->category_tag}}">{{$item->category_name}}</a>
                            </li>
                            @endforeach
                        </ul> --}}
                    </li>
                    <li class="menu-item-has-children">
                        <a href="/Painting-Services" class="leading-1/4em">
                            Painting Service
                            {{-- <span class="submenu-expander absolute"></span>
                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i>
                            </span> --}}
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
                        <a href="/About-Us" class="leading-1/4em">
                            About Us
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
                    <li>
                        <a class="btn btn-solid btn-md uppercase text-13 font-bold  leading-1/4em rounded-100 shadow-md text-blue-700 hover:text-white" href="/login" style="background-color: springgreen;">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
