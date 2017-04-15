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
        $less->compileFile('../less/type-3.less', '../css/type-3.css');
        ?>
        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-3.css" rel="stylesheet" type="text/css"/>


        <!--SLIDE RIGHT-->
        <script src="../js/slick.js" type="text/javascript"></script>
        <link href="../css/slick.css" rel="stylesheet" type="text/css"/>
        

        <script>
            $(document).ready(function () {
                $('#slider-news').slick({
                    vertical: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    focusOnSelect: true,
                    autoplay: true,
                    autoplaySpeed: 2000
                });
            });
        </script>
    </head>
    <body>
        <div class="type-3">
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
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="row">
                                <!--ITEM PRODUCT LARGE-->
                                <div class="item-large">
                                    <div class="i-images">
                                        <a href="#">
                                            <img src="../images/type-3/slider1.jpg">
                                        </a>
                                    </div>
                                    <div class="i-description">
                                        <div class="i-label">Tin tức &amp; Sự kiện</div>
                                        <h3 class="i-title">
                                            <a href="#">Ứng dụng hệ thống núm uống tự chảy trong chăn nuôi gà</a>
                                        </h3>

                                    </div>
                                </div>
                                <!--END ITEM PRODUCT LARGE-->
                            </div>
                            <div class="row list-pd">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#">
                                                <img src="../images/type-3/(283x190)_crop_5.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <div class="i-label">Tin tức &amp; Sự kiện</div>
                                            <h3 class="i-title">
                                                <a href="#">10 năm chăn nuôi Việt Nam phát triển và hội nhập</a>
                                            </h3>
                                            <div class="i-content">
                                                <h5>Là lĩnh vực chủ chốt trong SX nông nghiệp, tuy nhiên phải tới năm 2005, ngành chăn nuôi Việt Nam mới có cơ quan quản lí nhà nước riêng (Cục Chăn nuôi).</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#">
                                                <img src="../images/type-3/(283x190)_crop_5.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <div class="i-label">Tin tức &amp; Sự kiện</div>
                                            <h3 class="i-title">
                                                <a href="#">10 năm chăn nuôi Việt Nam phát triển và hội nhập</a>
                                            </h3>
                                            <div class="i-content">
                                                <h5>Là lĩnh vực chủ chốt trong SX nông nghiệp, tuy nhiên phải tới năm 2005, ngành chăn nuôi Việt Nam mới có cơ quan quản lí nhà nước riêng (Cục Chăn nuôi).</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#">
                                                <img src="../images/type-3/(283x190)_crop_5.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <div class="i-label">Tin tức &amp; Sự kiện</div>
                                            <h3 class="i-title">
                                                <a href="#">10 năm chăn nuôi Việt Nam phát triển và hội nhập</a>
                                            </h3>
                                            <div class="i-content">
                                                <h5>Là lĩnh vực chủ chốt trong SX nông nghiệp, tuy nhiên phải tới năm 2005, ngành chăn nuôi Việt Nam mới có cơ quan quản lí nhà nước riêng (Cục Chăn nuôi).</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#">
                                                <img src="../images/type-3/(283x190)_crop_5.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <div class="i-label">Tin tức &amp; Sự kiện</div>
                                            <h3 class="i-title">
                                                <a href="#">10 năm chăn nuôi Việt Nam phát triển và hội nhập</a>
                                            </h3>
                                            <div class="i-content">
                                                <h5>Là lĩnh vực chủ chốt trong SX nông nghiệp, tuy nhiên phải tới năm 2005, ngành chăn nuôi Việt Nam mới có cơ quan quản lí nhà nước riêng (Cục Chăn nuôi).</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#">
                                                <img src="../images/type-3/(283x190)_crop_5.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <div class="i-label">Tin tức &amp; Sự kiện</div>
                                            <h3 class="i-title">
                                                <a href="#">10 năm chăn nuôi Việt Nam phát triển và hội nhập</a>
                                            </h3>
                                            <div class="i-content">
                                                <h5>Là lĩnh vực chủ chốt trong SX nông nghiệp, tuy nhiên phải tới năm 2005, ngành chăn nuôi Việt Nam mới có cơ quan quản lí nhà nước riêng (Cục Chăn nuôi).</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#">
                                                <img src="../images/type-3/(283x190)_crop_5.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <div class="i-label">Tin tức &amp; Sự kiện</div>
                                            <h3 class="i-title">
                                                <a href="#">10 năm chăn nuôi Việt Nam phát triển và hội nhập</a>
                                            </h3>
                                            <div class="i-content">
                                                <h5>Là lĩnh vực chủ chốt trong SX nông nghiệp, tuy nhiên phải tới năm 2005, ngành chăn nuôi Việt Nam mới có cơ quan quản lí nhà nước riêng (Cục Chăn nuôi).</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#">
                                                <img src="../images/type-3/(283x190)_crop_5.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <div class="i-label">Tin tức &amp; Sự kiện</div>
                                            <h3 class="i-title">
                                                <a href="#">10 năm chăn nuôi Việt Nam phát triển và hội nhập</a>
                                            </h3>
                                            <div class="i-content">
                                                <h5>Là lĩnh vực chủ chốt trong SX nông nghiệp, tuy nhiên phải tới năm 2005, ngành chăn nuôi Việt Nam mới có cơ quan quản lí nhà nước riêng (Cục Chăn nuôi).</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 mg-r pd-r">
                            <div class="item-slider">
                                <div class="s-title">Bằng khen &amp; chứng nhận</div>
                                <div class="slider-news">
                                    <div id="slider-news">
                                        <div class="s-item">
                                            <div class="i-images"><img  src="http://fau.com.vn/vnt_upload/weblink/thumbs/(150x100)_crop_bangkhen.jpg"  alt="GIẢI THƯỞNG - 2015" /></div>
                                            <div class="i-description">GIẢI THƯỞNG - 2015</div>
                                        </div>
                                        <div class="s-item">
                                            <div class="i-images"><img  src="http://fau.com.vn/vnt_upload/weblink/thumbs/(150x100)_crop_bangkhen.jpg"  alt="GIẢI THƯỞNG - 2015" /></div>
                                            <div class="i-description">GIẢI THƯỞNG - 2015</div>
                                        </div>
                                        <div class="s-item">
                                            <div class="i-images"><img  src="http://fau.com.vn/vnt_upload/weblink/thumbs/(150x100)_crop_bangkhen.jpg"  alt="GIẢI THƯỞNG - 2015" /></div>
                                            <div class="i-description">GIẢI THƯỞNG - 2015</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
