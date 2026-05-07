<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>




<div class="box_2">
    <div class="container">
        <div clas="row">
            <div class="caption">
                <p>Видео отзывы</p>
            </div>
            <div id="carousel_box_2" class="box_2_slider owl-carousel owl-theme owl-loaded">
                
                
                <!--<div class="video-block">
                    <a class="box_2_video video-block__preview video-block__preview--pic3" href="https://www.youtube.com/watch?v=gIJ66dzhiXU">
                        <p class="video-block__title">Спил деревьев по ул. Уличной</p>
                        <div class="icon-play"></div>
                        <img src="/assets/valka-pro/img/updated-layout/person.png" alt="" class="video-block__person-photo">                        
                    </a>
                    <p class="video-block__person-name">Надежда</p>
                </div>-->                
                
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1170px;"><div class="owl-item active" style="width: 360px; margin-right: 30px;"><div class="video-block">
                    <a class="box_2_video video-block__preview video-block__preview--pic1" href="https://www.youtube.com/watch?v=mN1TI6A0qKU">
                        <p class="video-block__title">Спил деревьев в п. Белоостров</p>
                        <div class="icon-play"></div>
                        <div class="video-block__person-photo video-block__person-photo--person1"></div>
                    </a>
                    <p class="video-block__person-name">Сергей</p>
                </div></div><div class="owl-item active" style="width: 360px; margin-right: 30px;"><div class="video-block">
                    <a class="box_2_video video-block__preview video-block__preview--pic2" href="https://www.youtube.com/watch?v=Hx2C6TZFNGY">
                        <p class="video-block__title">Спил деревьев в п. Стрельна</p>
                        <div class="icon-play"></div>
                        <div class="video-block__person-photo video-block__person-photo--person2"></div>
                    </a>
                    <p class="video-block__person-name">Роман</p>
                </div></div><div class="owl-item active" style="width: 360px; margin-right: 30px;"><div class="video-block">
                    <a class="box_2_video video-block__preview video-block__preview--pic7" href="https://www.youtube.com/watch?v=kFsL1W4qPyc">
                        <p class="video-block__title">Спил деревьев в СНТ Заозёрное</p>
                        <div class="icon-play"></div>
                        <div class="video-block__person-photo video-block__person-photo--person3"></div>
                    </a>
                    <p class="video-block__person-name">Надежда</p>
                </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""></div><div class="owl-next" style=""></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div></div></div></div>
        </div>
    </div>
</div>

<style>
.box_1 .caption h1,
.box_2 .caption p,
.box_3 .caption p,
.box_4 .caption p,
.box_5 .caption p,
.box_7 .caption p,
.box_8 .caption p,
.box_10 .caption p {
    font-family: GothamPro-Medium;
    font-size: 30px;
    text-transform: uppercase;
    color: #212121;
    font-weight: normal;
}

.box_1 .flex_list > div > a > p,
.box_3 .flex_list p {
    font-family: GothamPro;
    font-size: 16px;
    color: #212121;
    margin-top: 18px;
}
.box_1 .flex_list {

}
.box_1 .flex_list > div {
    margin-top: 47px;
}
.box_2_slider {
    margin-top: 42px;
}
.box_2_slider .owl-controls {
    display: none;
}
.video-block__preview {
    min-height: 280px;
    background-size: 499px 374px;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    text-align: center;
    position: relative;
    display: block;
}
.video-block__preview:hover,
.video-block__preview:focus {
    color: #ffffff;
    text-decoration: none;
}
.video-block__preview--pic1 {
    background-image: url();
}
.video-block__preview--pic3 {
    background-image: url();
}
.video-block__preview--pic2 {
    background-image: url();
}
.video-block__preview--pic7 {
    background-image: url();
}
.video-block__title {
    background-color: rgba(54, 47, 45, 0.5);
    font-family: GothamPro;
    font-size: 16px;
    color: #ffffff;
    padding: 22px 0;
}
.box_2 .video-block .video-block__preview .video-block__person-photo {
    position: absolute;
    bottom: -35px;
    left: 50%;
    margin-left: -35px;
    height: 70px;
    width: 70px;
    border-radius: 50%;
}
.box_2 .video-block .video-block__preview .video-block__person-photo:hover {
    height: 70px;
    width: 70px;
}
.video-block__person-name {
    font-family: GothamPro-Medium;
    font-size: 18px;
    text-align: center;
    margin-top: 42px;
    color: #362f2d;
}
.box_2 .owl-carousel .owl-item {
    height: auto;
}
.box_2 .icon-play {
    margin-top: 50px;
}
.box_0 .owl-dot,
.box_2 .owl-dot,
.box_4 .owl-dot {
    margin: 9px;
}
.box_0 .owl-dot span,
.box_2 .owl-dot span,
.box_4 .owl-dot span {
    height: 12px;
    width: 12px;
    border: 2px solid #fd7004;
    background-color: #fd7004;
    border-radius: 50%;
}
.box_0 .owl-dots,
.box_2 .owl-dots,
.box_4 .owl-dots {
    margin-top: 19px;
}
.box_0 .owl-dot.active span {
    background-color: rgba(0,0,0,0);
}
.box_0 .owl-dots {
    bottom: 45px;
}
.box_4 .caption {
    margin-bottom: 42px;
}
.description__title {
    font-family: GothamPro-Medium;
    font-size: 22px;
    color: #05a905;
    font-weight: normal;
    margin: 0 0 28px;
}
.description__title.description__title--small {
    font-size: 16px;
}








/*
* Owl Carousel - Animate Plugin
*/
.owl-carousel .animated {
-webkit-animation-duration: 1000ms;
animation-duration: 1000ms;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
}
.owl-carousel .owl-animated-in {
z-index: 0;
}
.owl-carousel .owl-animated-out {
z-index: 1;
}
.owl-carousel .fadeOut {
-webkit-animation-name: fadeOut;
animation-name: fadeOut;
}

@-webkit-keyframes fadeOut {
0% {
    opacity: 1;
}

100% {
    opacity: 0;
}
}
@keyframes fadeOut {
0% {
    opacity: 1;
}

100% {
    opacity: 0;
}
}

/*
*     Owl Carousel - Auto Height Plugin
*/
.owl-height {
-webkit-transition: height 500ms ease-in-out;
-moz-transition: height 500ms ease-in-out;
-ms-transition: height 500ms ease-in-out;
-o-transition: height 500ms ease-in-out;
transition: height 500ms ease-in-out;
}

/*
* Core Owl Carousel CSS File
*/
.owl-carousel {
display: none;
width: 100%;
-webkit-tap-highlight-color: transparent;
/* position relative and z-index fix webkit rendering fonts issue */
position: relative;
z-index: 1;
}
.owl-carousel .owl-stage {
position: relative;
-ms-touch-action: pan-Y;
}
.owl-carousel .owl-stage:after {
content: ".";
display: block;
clear: both;
visibility: hidden;
line-height: 0;
height: 0;
}
.owl-carousel .owl-stage-outer {
position: relative;
overflow: hidden;
/* fix for flashing background */
-webkit-transform: translate3d(0px, 0px, 0px);
}
.owl-carousel .owl-controls .owl-nav .owl-prev,
.owl-carousel .owl-controls .owl-nav .owl-next,
.owl-carousel .owl-controls .owl-dot {
cursor: pointer;
cursor: hand;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}
.owl-carousel.owl-loaded {
display: block;
}
.owl-carousel.owl-loading {
opacity: 0;
display: block;
}
.owl-carousel.owl-hidden {
opacity: 0;
}
.owl-carousel .owl-refresh .owl-item {
display: none;
}
.owl-carousel .owl-item {
position: relative;
min-height: 1px;
float: left;
-webkit-backface-visibility: hidden;
-webkit-tap-highlight-color: transparent;
-webkit-touch-callout: none;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}
.owl-carousel .owl-item img {
display: block;
width: 100%;
-webkit-transform-style: preserve-3d;
}
.owl-carousel.owl-text-select-on .owl-item {
-webkit-user-select: auto;
-moz-user-select: auto;
-ms-user-select: auto;
user-select: auto;
}
.owl-carousel .owl-grab {
cursor: move;
cursor: -webkit-grab;
cursor: -o-grab;
cursor: -ms-grab;
cursor: grab;
}
.owl-carousel.owl-rtl {
direction: rtl;
}
.owl-carousel.owl-rtl .owl-item {
float: right;
}

/* No Js */
.no-js .owl-carousel {
display: block;
}

/*
*     Owl Carousel - Lazy Load Plugin
*/
.owl-carousel .owl-item .owl-lazy {
opacity: 0;
-webkit-transition: opacity 400ms ease;
-moz-transition: opacity 400ms ease;
-ms-transition: opacity 400ms ease;
-o-transition: opacity 400ms ease;
transition: opacity 400ms ease;
}
.owl-carousel .owl-item img {
transform-style: preserve-3d;
}

/*
*     Owl Carousel - Video Plugin
*/
.owl-carousel .owl-video-wrapper {
position: relative;
height: 100%;
background: #000;
}
.owl-carousel .owl-video-play-icon {
position: absolute;
height: 80px;
width: 80px;
left: 50%;
top: 50%;
margin-left: -40px;
margin-top: -40px;
background: url("https://www.valka-pro.ru/assets/valka-pro/css/owl.video.play.png") no-repeat;
cursor: pointer;
z-index: 1;
-webkit-backface-visibility: hidden;
-webkit-transition: scale 100ms ease;
-moz-transition: scale 100ms ease;
-ms-transition: scale 100ms ease;
-o-transition: scale 100ms ease;
transition: scale 100ms ease;
}
.owl-carousel .owl-video-play-icon:hover {
-webkit-transition: scale(1.3, 1.3);
-moz-transition: scale(1.3, 1.3);
-ms-transition: scale(1.3, 1.3);
-o-transition: scale(1.3, 1.3);
transition: scale(1.3, 1.3);
}
.owl-carousel .owl-video-playing .owl-video-tn,
.owl-carousel .owl-video-playing .owl-video-play-icon {
display: none;
}
.owl-carousel .owl-video-tn {
opacity: 0;
height: 100%;
background-position: center center;
background-repeat: no-repeat;
-webkit-background-size: contain;
-moz-background-size: contain;
-o-background-size: contain;
background-size: contain;
-webkit-transition: opacity 400ms ease;
-moz-transition: opacity 400ms ease;
-ms-transition: opacity 400ms ease;
-o-transition: opacity 400ms ease;
transition: opacity 400ms ease;
}
.owl-carousel .owl-video-frame {
position: relative;
z-index: 1;
}


</style>
 

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>