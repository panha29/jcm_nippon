<style>
.color {
      animation: colorchange 50s; /* animation-name followed by duration in seconds*/
         /* you could also use milliseconds (ms) or something like 2.5s */
      -webkit-animation: colorchange 50s; /* Chrome and Safari */

}
.drip-wrapper {
  border: 0px solid #ffc217;
  filter: url("#goo");
  height: 100%;
  overflow: hidden;
  position: static;
	left: 0;
	right: 0;
	bottom: 0;
  width: 100%;
  left: auto;
  z-index:-2;
}
.drip-wrapper .drip-top {
  border-radius: 30%;
  height: 50px;
  position: absolute;
  width: 100%;
  top: -30px;
  background: #AA0000;

}
.drip-wrapper .drip-bottom {
  border-radius: 10%;
  height: 50px;
  position: absolute;
  width: 100%;
  bottom: -30px;
  background: #AA0000;
}
.drip-wrapper .drip {
  border-radius: 50%;
  height: 100px;
  position: absolute;
  width: 75px;
  background: #AA0000;
  transform: translate(0, 0) scale(2);
  animation: drip-1 cubic-bezier(0.66, 0.1, 0.97, 0.36) 3s infinite;

}
.drip-wrapper .drip:nth-child(1) {
  animation-name: drip-1;
  animation-delay: 1.25s;
  left: 5%;
  top: -29%;
}
.drip-wrapper .drip:nth-child(2) {
  animation-name: drip-2;
  animation-delay: 0.5s;
  left: 10%;
  top: -20%;
}
.drip-wrapper .drip:nth-child(3) {
  animation-name: drip-3;
  animation-delay: 2s;
  left: 20%;
  top: -25%;
}
.drip-wrapper .drip:nth-child(4) {
  animation-name: drip-4;
  animation-delay: 1s;
  left: 30%;
  top: -25%;
}
.drip-wrapper .drip:nth-child(5) {
  animation-name: drip-5;
  animation-delay: 1.75s;
  left: 50%;
  height: 75px;
  width: 50px;
  top: -20%;
}
.drip-wrapper .drip:nth-child(6) {
  animation-name: drip-1;
  animation-delay: 2.25s;
  left: 60%;
  top: -20%;
}
.drip-wrapper .drip:nth-child(7) {
  animation-name: drip-2;
  animation-delay: 1.5s;
  left: 75%;
  top: -20%;
  height: 50px;
  width: 30px;
}
.drip-wrapper .drip:nth-child(8) {
  animation-name: drip-3;
  animation-delay: 1s;
  left: 90%;
  top: -25%;
}
.drip-wrapper .drip:nth-child(9) {
  animation-name: drip-4;
  animation-delay: 0.75s;
  left: 100%;
  top: -25%;
}
.drip-wrapper .drip:nth-child(10) {
  animation-name: drip-5;
  animation-delay: 2.5s;
  left: 50%;
  top: -20%;
  height: 50px;
  width: 40px;
}
.drip-wrapper .drip:nth-child(11) {
  animation-name: drip-5;
  animation-delay: 0.25s;
  left: -20%;
  top: -20%;
}
@keyframes drip-1 {
  to {
    transform: translateY(500px) scale(0);
  }
}
@keyframes drip-2 {
  to {
    transform: translateY(800px) scale(0);
  }
}
@keyframes drip-3 {
  to {
    transform: translateY(600px) scale(0);
  }
}
@keyframes drip-4 {
  to {
    transform: translateY(500px) scale(0.4);
  }
}
@keyframes drip-5 {
  to {
    transform: translateY(400px) scale(0.2);
  }
}
@keyframes colorchange {
  0% {
    background: #AA0000;
  }
  10% {
    background: #EA3281;
  }
  20% {
    background: #E71669;
  }
  30% {
    background: #661BAC;
  }
  40% {
    background: #FDC600;
  }
  50% {
    background: #75AC25;
  }
  60% {
    background: #3283B5;
  }
  70% {
    background: #0A5D9A;
  }
  80% {
    background: #232F37;
  }
  90% {
    background: #1B2735;
  }
  100% {
    background: #090a0f;
  }
}
@-webkit-keyframes colorchange /* Safari and Chrome - necessary duplicate */ {
  0% {
    background: #e8630a;
  }
  10% {
    background: #EA3281;
  }
  20% {
    background: #E71669;
  }
  30% {
    background: #661BAC;
  }
  40% {
    background: #FDC600;
  }
  50% {
    background: #75AC25;
  }
  60% {
    background: #3283B5;
  }
  70% {
    background: #0A5D9A;
  }
  80% {
    background: #232F37;
  }
  90% {
    background: #1B2735;
  }
  100% {
    background: #090a0f;
  }
}
</style>
<div class="drip-wrapper">
    <div class="drip-top"></div>
    <div class="drip"></div>
    <div class="drip"></div>
    <div class="drip"></div>
    <div class="drip"></div>
    <div class="drip"></div>
    <div class="drip"></div>
    <div class="drip"></div>
    <div class="drip"></div>
    <div class="drip"></div>
    <div class="drip"></div>
    <div class="drip-bottom"></div>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <filter id="goo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
        <feBlend in="SourceGraphic" in2="goo" />
        </filter>
    </defs>
  </svg>
</div>
