<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/type-4.less', '../css/type-4.css');
        ?>


        <link href="../css/swipe-slider.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/jquery.swiper.min.js" type="text/javascript"></script>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-4.css" rel="stylesheet" type="text/css"/>

        <script>
            jQuery(document).ready(function ($) {
                Swiper('#slide-swiper', {
                    loop: true,
                    speed: 500,
                    slidesPerView: 4,
                    autoplay: 400,
                    spaceBetween: 15,
                    prevButton: '#slide_prev',
                    nextButton: '#slide_next',
                    breakpoints: {
                        991: {
                            slidesPerView: 3
                        },
                        767: {
                            slidesPerView: 2
                        }
                    }
                });
            });
        </script>

    </head>
    <body>
        <div class="type-4">
            <div class="row"> 
                <div class="container">
                    <div class="row">
                        <div class="related-product">
                            <!--TITLE-->
                            <div class="title">Sản phẩm cùng loại</div>
                            <!--END TITLE-->
                            <div id="slide-swiper" class="swiper-container">
                                <div class="swiper-wrapper"> 
                                    <!--ITEM PRODUCT SLIDE-->
                                    <div class="swiper-slide">
                                        <div class="product-slider">
                                            <div class="item">
                                                <div class="i-images">
                                                    <a href="#" >
                                                        <img src="../images/type-2/(270x180)_crop_651l.jpg">
                                                    </a>
                                                </div>
                                                <div class="i-description">
                                                    <h3 class="i-title">
                                                        <a href="#">AU FEED - 651L</a>
                                                    </h3>
                                                    <div class="i-content">Thức ăn hỗn hợp cho heo nái mang thai</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END ITEM PRODUCT SLIDE-->
                                    <div class="swiper-slide">
                                        <div class="product-slider">
                                            <div class="item">
                                                <div class="i-images">
                                                    <a href="#" >
                                                        <img src="../images/type-2/(270x180)_crop_651l.jpg">
                                                    </a>
                                                </div>
                                                <div class="i-description">
                                                    <h3 class="i-title">
                                                        <a href="#">AU FEED - 651L</a>
                                                    </h3>
                                                    <div class="i-content">Thức ăn hỗn hợp cho heo nái mang thai</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider">
                                            <div class="item">
                                                <div class="i-images">
                                                    <a href="#" >
                                                        <img src="../images/type-2/(270x180)_crop_651l.jpg">
                                                    </a>
                                                </div>
                                                <div class="i-description">
                                                    <h3 class="i-title">
                                                        <a href="#">AU FEED - 651L</a>
                                                    </h3>
                                                    <div class="i-content">Thức ăn hỗn hợp cho heo nái mang thai</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider">
                                            <div class="item">
                                                <div class="i-images">
                                                    <a href="#" >
                                                        <img src="../images/type-2/(270x180)_crop_651l.jpg">
                                                    </a>
                                                </div>
                                                <div class="i-description">
                                                    <h3 class="i-title">
                                                        <a href="#">AU FEED - 651L</a>
                                                    </h3>
                                                    <div class="i-content">Thức ăn hỗn hợp cho heo nái mang thai</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider">
                                            <div class="item">
                                                <div class="i-images">
                                                    <a href="#" >
                                                        <img src="../images/type-2/(270x180)_crop_651l.jpg">
                                                    </a>
                                                </div>
                                                <div class="i-description">
                                                    <h3 class="i-title">
                                                        <a href="#">AU FEED - 651L</a>
                                                    </h3>
                                                    <div class="i-content">Thức ăn hỗn hợp cho heo nái mang thai</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider">
                                            <div class="item">
                                                <div class="i-images">
                                                    <a href="#" >
                                                        <img src="../images/type-2/(270x180)_crop_651l.jpg">
                                                    </a>
                                                </div>
                                                <div class="i-description">
                                                    <h3 class="i-title">
                                                        <a href="#">AU FEED - 651L</a>
                                                    </h3>
                                                    <div class="i-content">Thức ăn hỗn hợp cho heo nái mang thai</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider">
                                            <div class="item">
                                                <div class="i-images">
                                                    <a href="#" >
                                                        <img src="../images/type-2/(270x180)_crop_651l.jpg">
                                                    </a>
                                                </div>
                                                <div class="i-description">
                                                    <h3 class="i-title">
                                                        <a href="#">AU FEED - 651L</a>
                                                    </h3>
                                                    <div class="i-content">Thức ăn hỗn hợp cho heo nái mang thai</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider">
                                            <div class="item">
                                                <div class="i-images">
                                                    <a href="#" >
                                                        <img src="../images/type-2/(270x180)_crop_651l.jpg">
                                                    </a>
                                                </div>
                                                <div class="i-description">
                                                    <h3 class="i-title">
                                                        <a href="#">AU FEED - 651L</a>
                                                    </h3>
                                                    <div class="i-content">Thức ăn hỗn hợp cho heo nái mang thai</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-slider">
                                            <div class="item">
                                                <div class="i-images">
                                                    <a href="#" >
                                                        <img src="../images/type-2/(270x180)_crop_651l.jpg">
                                                    </a>
                                                </div>
                                                <div class="i-description">
                                                    <h3 class="i-title">
                                                        <a href="#">AU FEED - 651L</a>
                                                    </h3>
                                                    <div class="i-content">Thức ăn hỗn hợp cho heo nái mang thai</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--CONTROL SLIDE PRODUCT-->
                            <div class="slide-controls"> 
                                <div id="slide_prev" class="slide-prev" href="#myCarousel" data-slide="prev">prev</div>
                                <div id="slide_next" class="slide-next" href="#myCarousel" data-slide="next">next</div>
                            </div>
                            <!--END CONTROL SLIDE PRODUCT-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
