<style>
    .nav-text{
        color: black;
    }
    .bg-green-300 {
    background-color: rgb(255 6 6);
    }
    .text-primary {
    color: #ffffff;
}
</style>
<div class="lqd-sticky-placeholder hidden"></div>
<header id="site-header" class="main-header main-header-overlay sticky-header-noshadow" data-sticky-header="true" data-sticky-values-measured="false" data-sticky-options='{"disableOnMobile": true}'>
    {{-- <div class="lqd-hide-onstuck flex flex-wrap items-center justify-center transition-all py-10 bg-transparent module-top" style="background-image: linear-gradient(90deg, #84F0B2 0%, #5F91A7 100%);">
        <div class="ld-fancy-heading relative bg-white rounded-16 px-15 mr-15">
            <p class="ld-fh-element mb-0 inline-block relative text-10 text-medium uppercase tracking-2">Free update</p>
        </div>
        <div class="ld-fancy-heading relative">
            <h6 class="ld-fh-element mb-0 inline-block relative text-14 text-medium text-white">Free support, Free updates, Free plugins.</h6>
        </div>
        <a href="#" class="btn btn-underlined border-thick ml-10 text-14 text-medium leading-1em text-white-60 hover:text-white" target="_blank" rel="nofollow">
            <span class="btn-txt" data-text="Join Us">Join Us</span>
        </a>
    </div> --}}
    <div class="module-header flex justify-center md:hidden">
        <div class="module-sticky w-full static flex flex-row items-center justify-between border-1 border-white-10 rounded-100 transition-all pr-10 pl-30">
            <div class="flex items-center justify-start">
                <div id="site-logo" class="module-logo flex navbar-brand-plain pointer-events-auto py-20 pr-30">
                    <a class="navbar-brand flex p-0 relative" href="/User/Dashboard" rel="home">
                        <span class="navbar-brand-inner post-rel">
                            <img class="logo-sticky" src="../../img/logo/logo.png" alt="Nippon Paint Cambodia">
                            <img class="logo-default" src="../../img/logo/logo.png" alt="Nippon Paint Cambodia">
                        </span>
                    </a>
                </div>
                <div class="navbar-collapse inline-flex p-0 lqd-submenu-default-style items-stretch h-full pointer-events-auto" id="main-header-collapse" aria-expanded="false" role="navigation">
                    <ul class="main-nav flex reset-ul inline-ul lqd-menu-counter-left lqd-menu-items-inline main-nav-hover-fade-inactive" data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}' data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
                        <li class="menu-item-object-page menu-item-home">
                            <a href="/User/Dashboard" class="text-16 nav-text font-medium">Home<sup class="link-sup">01</sup></a>
                        </li>
                        <li class="menu-item-object-page menu-item-has-children">
                            <a href="/User/Products" class="text-16 nav-text font-medium">
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
                                    <a href="/User/Products/Interior">Interior</a>
                                </li>
                                <li>
                                    <a href="/User/Products/Exterior">Exterior</a>
                                </li>
                                <li>
                                    <a href="/User/Products/Sealer_Primer">Primer & Sealer</a>
                                </li>
                                <li>
                                    <a href="/User/Products/Wood_Metal">Wood & Metal</a>
                                </li>
                                <li>
                                    <a href="/User/Products/Coating">Coating</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-object-page">
                            <a href="/User/About_Us" class="text-16 nav-text font-medium">About<sup class="link-sup">03</sup></a>
                        </li>

                        <li class="menu-item-object-page menu-item-has-children">
                            <a href="#" class="text-16 nav-text font-medium">
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
                                    <a href="/User/Project_Reference">Project Reference</a>
                                </li>
                                <li>
                                    <a href="/User/News">News & Media</a>
                                </li>
                                <li>
                                    <a href="/User/Career">Career</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item-object-page">
                            <a href="/User/Contact_Us" class="text-16 nav-text font-medium">Contact<sup class="link-sup">05</sup></a>
                        </li>

                        <li class="menu-item-object-page">
                            <a href="/User/Color_Palette" class="text-16 nav-text font-medium">Color Palette<sup class="link-sup">06</sup></a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="/logout" class="btn btn-solid pointer-events-auto text-primary bg-green-300 rounded-100 module-btn-sm">
                <span class="btn-txt" >Logout</span>
            </a>
        </div>
    </div>

    <div class="lqd-mobile-sec elementor relative">
        <div class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full">
            <div class="lqd-mobile-modules-container empty"></div>
            <button type="button" class="navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-center" data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav" aria-expanded="false" data-toggle-options='{ "changeClassnames":  {"html":  "mobile-nav-activated"} }'>
                <span class="sr-only">Menu</span>
                <span class="bars inline-block relative z-1">
                    <span class="bars-inner flex flex-col w-full h-full">
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                        <span class="bar inline-block"></span>
                    </span>
                </span>
            </button>
            <a class="navbar-brand flex relative" href="../index-start-hub-5.html">
                <span class="navbar-brand-inner">
                    <img class="logo-default" src="../css/hub5/images/demo/start-hub-5/logo-dark.svg" alt="Starthub five">
                </span>
            </a>
        </div>
        <div class="lqd-mobile-sec-nav w-full absolute z-10">
            <div class="mobile-navbar-collapse navbar-collapse collapse w-full" id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
                <ul id="mobile-primary-nav" class="reset-ul lqd-mobile-main-nav main-nav nav" data-localscroll="true" data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
                    <li>
                        <a href="#banner">
                            <span>Home</span>
                            <sup class="link-sup">01</sup>
                        </a>
                    </li>
                    <li class="menu-item-object-page menu-item-has-children">
                        <a href="../page-start-hub-5-services.html">
                            <span>Products</span>
                            <span class="submenu-expander absolute"></span>
                            <sup class="link-sup">02</sup>
                        </a>
                    </li>
                    <li>
                        <a href="../page-start-hub-5-about.html">
                            <span>About</span>
                            <sup class="link-sup">03</sup>
                        </a>
                    </li>

                    <li>
                        <a href="#testimonials">
                            <span>Customer Stories</span>
                            <sup class="link-sup">04</sup>
                        </a>
                    </li>

                    <li>
                        <a href="../page-start-hub-5-contact.html">
                            <span>Contact</span>
                            <sup class="link-sup">05</sup>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
