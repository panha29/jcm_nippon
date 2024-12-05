<section class="lqd-section solutions z-1  pb-60">
    <div class="" style="margin: auto; width:80%">
        <div class="row">
            <div class="col col-5 lg:w-60percent sm:w-full" data-custom-animations="true" data-ca-options='{"animationTarget": "h2, p", "duration" : 1000, "startDelay" : 1500, "delay" : 50, "ease": "expo.out", "initValues": {"y": "50px", "scaleX" : 0, "scaleY" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1}}'>
                <div class="ld-fancy-heading relative mask-text text-center">
                    <h2 class="ld-fh-element mb-0/4em inline-block relative" data-split-text="true" data-split-options='{"type": "lines"}'>Sample Colors⚡</h2>
                </div>
                {{-- <img src="./webv2/images/wall_mockup.png" alt="" id="color_div" style="border: 1px solid #0000005c"> --}}
                <img src="./webv2/images/testing_home.png" alt="" id="color_div" style="border: 1px solid #0000005c">

            </div>
            <div class="col col-7 lg:w-40percent sm:w-full relative flex flex-row items-end justify-center module-last" data-custom-animations="true" data-ca-options='{"animationTarget": ".animation-element", "duration" : 750, "startDelay" : 500, "delay" : 65, "ease": "expo.out", "initValues": {"y": "30px", "scaleX" : 0, "scaleY" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1}}'>
                <div style="height:500px; width: 850px;border:1px solid #ccc;overflow:auto;overflow-x:hidden">
                    @include('websiteV2.color_palette.color_palette')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-5 lg:w-60percent sm:w-full" data-custom-animations="true" data-ca-options='{"animationTarget": "h2, p", "duration" : 1000, "startDelay" : 1500, "delay" : 50, "ease": "expo.out", "initValues": {"y": "50px", "scaleX" : 0, "scaleY" : 0}, "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1}}'>

            </div>
            <div class="col col-7 lg:w-40percent mt-20 sm:w-full relative flex flex-row items-end justify-center">
                <h6 >Want to get more colors? <a href="#">Login</a></h6>
            </div>
        </div>
    </div>
    <script>
        @foreach ($color as $item)
        function function{{$item->id}}() {
          document.getElementById("color_div").style.backgroundColor = "rgb({{$item->colorpalette_rgb}})";
        }
        @endforeach
    </script>
</section>
