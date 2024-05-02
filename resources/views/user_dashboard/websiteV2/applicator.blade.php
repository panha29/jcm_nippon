 <!-- Start Team -->
 <style>
    .youtube-player {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      max-width: 100%;
      background: #000;
      margin: 5px;
    }

    .youtube-player iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 100;
      background: transparent;
    }

    .youtube-player img {
      object-fit: cover;
      display: block;
      left: 0;
      bottom: 0;
      margin: auto;
      max-width: 100%;
      width: 100%;
      position: absolute;
      right: 0;
      top: 0;
      border: none;
      height: auto;
      cursor: pointer;
      -webkit-transition: 0.4s all;
      -moz-transition: 0.4s all;
      transition: 0.4s all;
    }

    .youtube-player img:hover {
      -webkit-filter: brightness(75%);
    }

    .youtube-player .play {
      height: 48px;
      width: 68px;
      left: 50%;
      top: 50%;
      margin-left: -34px;
      margin-top: -24px;
      position: absolute;
      background: url('https://i.ibb.co/j3jcJKv/yt.png') no-repeat;
      cursor: pointer;
    }
  </style>
 <section class="lqd-section team pt-30 pb-130" id="team" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element, h2, .btn", "ease": "power4.out", "initValues": {"y": "45px", "rotationY" : 45, "opacity" : 0} , "animations": {"y": "0px", "rotationY" : 0, "opacity" : 1}}'>
    <div class="container">
        <div class="row items-center justify-between">
            <div class="col col-12 col-md-6 module-title sm:py-0">
                <div class="ld-fancy-heading relative">
                    <h2 class="ld-fh-element inline-block relative lqd-highlight-grow-bottom m-0" data-inview="true" data-transition-delay="true" data-delay-options='{"delayType": "transition"}'> Our <mark class="lqd-highlight">
                            <span class="lqd-highlight-txt">Applicator</span>
                            <span class="lqd-highlight-inner bottom-0/2em left-0 bg-green-200"></span>
                        </mark>
                    </h2>
                </div>
            </div>
            <div class="col col-12 col-md-6 text-end sm:text-start module-btn">

            </div>
            <div class="col col-12 col-xl-6 animation-element">
                <div class="lqd-tm relative lqd-tm-style-2 module-1">
                    <div class="lqd-tm-img">
                        <figure class="m-0">
                            <div class="youtube-player" data-id="NbNjNi3aKW8?si=rCTz-bfBS6VGOIzW"></div>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-xl-5 offset-xl-1 animation-element">
                <div class="lqd-tm relative lqd-tm-style-2 module-2">
                    <div class="lqd-tm-img">
                        <figure class="m-0">
                            <img class="w-full" width="600" height="600" src="/webv2/images/jcmnippon-app.jpg" alt="Lena Meki">
                        </figure>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<script>
    /*
     * Light YouTube Embeds by @labnol
     * Credit: https://www.labnol.org/
     */

    function labnolIframe(div) {
      var iframe = document.createElement('iframe');
      iframe.setAttribute('src', 'https://www.youtube.com/embed/' + div.dataset.id + '?autoplay=1');
      iframe.setAttribute('frameborder', '0');
      iframe.setAttribute('allowfullscreen', '1');
      iframe.setAttribute('allow', 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture');
      div.parentNode.replaceChild(iframe, div);
    }

    function initYouTubeVideos() {
      var playerElements = document.querySelectorAll('.youtube-player');
      for (var n = 0; n < playerElements.length; n++) {
        var videoId = playerElements[n].dataset.id;
        var div = document.createElement('div');
        div.setAttribute('data-id', videoId);
        var thumbNode = document.createElement('img');
        thumbNode.src = '//i.ytimg.com/vi/ID/hqdefault.jpg'.replace('ID', videoId);
        div.appendChild(thumbNode);
        var playButton = document.createElement('div');
        playButton.setAttribute('class', 'play');
        div.appendChild(playButton);
        div.onclick = function () {
          labnolIframe(this);
        };
        playerElements[n].appendChild(div);
      }
    }

    document.addEventListener('DOMContentLoaded', initYouTubeVideos);
  </script>
<!-- End Team -->
