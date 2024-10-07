<!-- Start Banner -->
<link rel="stylesheet" href="css/carousel.css">
{{-- <script type="text/javascript" src="js/carousel.min.js"></script> --}}
<section class="lqd-section w-full flex flex-column items-center justify-center top-90" id="banner">
    <div class="absolute w-full h-full">
        <div class="ld-particles-container relative w-full lqd-particles-as-bg lqd-overlay flex">
            <div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-banner" data-particles="true" data-particles-options='{"particles": {"number": {"value" : 14, "density" : 1} , "color": {"value" : ["#F27E3F", "#0FBBB4", "#48BB0F", "#3FF292", "#899BFF"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 6, "random": true, "anim": {"enable": true, "size_min" : 1, "speed" : 1}} , "move": {"enable": true, "direction": "right", "out_mode": "out"}} , "interactivity" : [], "retina_detect": true}'></div>
        </div>
    </div>
    <div class="">
    {{-- <div class="row items-center">
            <div class="col col-12 col-xl-5" data-custom-animations="true" data-ca-options='{"animationTarget": "h2, h6, p, .btn", "duration" : 1800, "delay" : 170, "ease": "power4.out", "initValues": {"y": "65px", "rotationY" : 65, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
                <div class="ld-fancy-heading relative">
                    <h6 class="ld-fh-element inline-block relative mb-2em text-12 uppercase font-bold tracking-1/5 text-gray-900">Creative solutions for everyone</h6>
                </div>
                <div class="ld-fancy-heading relative">
                    <h2 class="ld-fh-element inline-block relative text-rotator-activated mb-0/25em text-60 leading-1/05em tracking-0" data-text-rotator="true"> Nippon Paint<span class="txt-rotate-keywords">
                            <span class="txt-rotate-keyword lqd-keyword-slide-out"> We Build</span>
                            <span class="txt-rotate-keyword lqd-keyword-slide-out">We Do It</span>
                            <span class="txt-rotate-keyword lqd-keyword-slide-in active"> We Dream</span>
                        </span>
                    </h2>
                </div>
                <div class="ld-fancy-heading relative mt-90">
                    <p class="ld-fh-element relative mb-2em text-20 leading-32">Passionate about creating the color of life.</p>
                </div>
                <div class="flex flex-row flex-wrap items-center justify-start">
                    <div class="fancy-button mr-15 module-btn sm:w-full">
                        <a href="tel: +855 11 822 266" class="btn btn-solid btn-xlg btn-icon-right btn-hover-reveal font-bold uppercase tracking-1/5 leading-1/4em whitespace-nowrap bg-transparent rounded-100 text-white">
                            <span class="btn-txt" data-text="Call us Now">Call us Now</span>
                            <span class="btn-icon text-16">
                                <i aria-hidden="true" class="lqd-icn-ess icon-md-arrow-round-forward-2"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-xl-7 sm:order-first" data-custom-animations="true" data-ca-options='{"animationTarget": "svg, img", "startDelay" : 350, "ease": "power4.out", "initValues": {"opacity" : 0} , "animations": {"opacity" : 1}}'>
                <div class="image-container relative -mr-50 lg:m-0">
                    <div class="ld-masked-image" data-dynamic-shape="true">
                        <svg class="scene lqd-overlay flex" viewbox="140 140 140 140">
                            <defs>
                                <clippath id="banner-masked-svg" clippathunits="objectBoundingBox" transform="scale(0.00158)">
                                    <path vector-effect="non-scaling-stroke" fill="black" d="M212.625, 0.091 C319.112, -2.992 719.225, 71.583 615.507, 328.179 C511.789, 584.775 250.263, 624.292 112.94, 568.057 C-24.383, 511.822 -12.023, 229.89 23.583, 138.127 C59.189, 46.364 106.138, 3.174 212.625, 0.091 Z" pathdata:id="M362.5, 4 C487, 4 631, -44 631, 201.5 C631, 447 538, 623.5 310.5, 581.5 C83, 539.5 -29.917, 266.627 7, 156.5 C43.917, 46.373 238, 4 362.5, 4 Z;M370, 18 C494.5, 18 627, -56.5 627, 189 C627, 434.5 405.5, 573.5 155.5, 581 C-94.5, 588.5 23.083, 175.127 60, 65 C96.917, -45.127 245.5, 18 370, 18 Z"></path>
                                </clippath>
                            </defs>
                        </svg>
                        <figure class="clip-svg" data-responsive-bg="true">
                            <img width="1292" height="1196" src="/webv2/images/big-pic.png" class="w-full invisible" alt="nippon paint cambodia ថ្មាំលាបផ្ទះ nippon paint">
                        </figure>
                    </div>
                </div>
            </div>
            </div>
        </div> --}}

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="webv2/images/banner/new_product.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="webv2/images/banner/new_product.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="webv2/images/banner/new_product.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              {{-- <span class="visually-hidden">Previous</span> --}}
            </a>
            <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              {{-- <span class="visually-hidden">Next</span> --}}
            </a>
          </div>


</section>
<!-- End banner -->

{{-- <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 50000); // Change image every 2 seconds
    }
    </script> --}}


