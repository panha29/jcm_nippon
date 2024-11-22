<!DOCTYPE html>
<html lang="en" data-url-prefix="/" data-footer="true">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="House Paint, House Painting Services, Cambodia House Painting, Cambodia House Paint, Phnom Penh House Paint, Phnom Penh House Painting">
        <meta property="og:type" content="website">
        <title>Nippon Paint Cambodia</title>
        @include('_layoutV2.head')
    </head>
    {{-- <body data-localscroll-offset="80" data-mobile-nav-breakpoint="1199" data-localscroll-offset="60" data-mobile-nav-style="minimal" data-mobile-nav-scheme="dark" data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="gray" data-mobile-logo-alignment="default" data-overlay-onmobile="false"> --}}
    <body data-localscroll-offset="95" data-mobile-nav-breakpoint="1199" data-mobile-nav-style="minimal" data-mobile-nav-scheme="dark" data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="gray" data-mobile-logo-alignment="default" data-overlay-onmobile="false">
        <div class="relative bg-white" id="wrap">
            <main class="content bg-white" id="lqd-site-content">
                @include('_layoutV2.web-nav')
                @yield('content')
            </main>
            <div class="lqd-back-to-top fixed text-10" data-back-to-top="true">
                <a href="#wrap" class="inline-flex items-center justify-center rounded-full circle relative overflow-hidden leading-1/4em" data-localscroll="true">
                    <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="21" height="32" viewBox="0 0 21 32" style="width: 1em;">
                        <path fill="white" d="M10.5 13.625l-7.938 7.938c-.562.562-1.562.562-2.124 0C.124 21.25 0 20.875 0 20.5s.125-.75.438-1.063L9.5 10.376c.563-.563 1.5-.5 2.063.063l9 9c.562.562.562 1.562 0 2.125s-1.563.562-2.125 0z"></path>
                    </svg>
                </a>
            </div>
        </div>
        @include('_layoutV2.footer')
        @include('_layoutV2.scripts')
    </body>
</html>
