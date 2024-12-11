<!-- Start Banner -->

<link rel="stylesheet" href="css/carousel.css">
{{-- <script type="text/javascript" src="js/carousel.min.js"></script> --}}
<div class="lqd-section banner min-h-25vh flex flex-wrap flex-row items-center justify-around transition-all bg-no-repeat bg-center bg-cover" id="banner">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item  active">
                    <img src="webv2/images/banner/m_web_banner1.jpg" class="d-block" alt="Nippon Paint Cambodia ថ្នាំលាបពណ៍ផ្ទះ">
                </div>
                <div class="carousel-item ">
                    <img src="webv2/images/banner/new_product1.jpg" class="d-block" alt="Nippon Paint Cambodia ថ្នាំលាបពណ៍ផ្ទះ">
                </div>
                <div class="carousel-item ">
                    <img src="webv2/images/banner/new_product2.jpg" class="d-block" alt="Nippon Paint Cambodia ថ្នាំលាបពណ៍ផ្ទះ">
                </div>
            </div>
            <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
</div>
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

    <script>
        const myCarouselElement = document.querySelector('#myCarousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})
    </script>


