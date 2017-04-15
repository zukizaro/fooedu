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

<!--        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>-->

        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/type-2.less', '../css/type-2.css');
        ?>
        <link href="../css/swipe-slider.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/jquery.swiper.min.js" type="text/javascript"></script>
        
        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-2.css" rel="stylesheet" type="text/css"/>

        <script>
            jQuery(document).ready(function ($) {
                Swiper('#slide-swiper', {
                    loop: true,
                    speed: 500,
                    slidesPerView: 3,
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
        <div class="type-2">
            <div class="row">
                <div class="container">
                    <div class="heading">
                        <!--TITLE-->
                        <div class="p-title">
                            <h2>Thức ăn gia súc gia cầm</h2>
                        </div>
                        <!--END TITLE-->
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <!--PRODUCT CATEGORY-->
                            <div class="prod-menu">
                                <div class="w-prod-menu">
                                    <ul>
                                        <li><a href="#">Thức ăn cho bò</a></li>
                                        <li><a href="#">Thức ăn cho vịt</a></li>
                                        <li><a href="#">Thức ăn cho gà</a></li>
                                        <li><a href="#">Thức ăn cho heo</a></li>
                                        <li><a href="#">Trứng Omega 3</a></li>
                                        <li><a href="#">Thịt heo hữu cơ</a></li>
                                    </ul>
                                </div>
                                <div class="m-prod-menu">
                                    <select>
                                        <option>Thức ăn cho bò</option>
                                        <option>Thức ăn cho vịt</option>
                                        <option>Thức ăn cho gà</option>
                                        <option>Thức ăn cho heo</option>
                                        <option>Trứng Omega 3</option>
                                        <option>Thịt heo hữu cơ</option>
                                    </select>
                                </div>
                            </div>
                            <!--END PRODUCT CATEGORY-->
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <!--SLIDE PRODUCT-->
                            <div id="slide-swiper" class="swiper-container">
                                <div class="swiper-wrapper"> 
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
                            <!--END SLIDE PRODUCT-->
                            <!--CONTROL SLIDER-->
                            <div class="slide-controls"> 
                                <div id="slide_prev" class="slide-prev" href="#myCarousel" data-slide="prev">prev</div>
                                <div id="slide_next" class="slide-next" href="#myCarousel" data-slide="next">next</div>
                            </div>
                            <!--END CONTROL SLIDER-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
