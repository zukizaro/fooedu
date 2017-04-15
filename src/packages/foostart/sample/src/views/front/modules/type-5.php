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
        $less->compileFile('../less/type-5.less', '../css/type-5.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-5.css" rel="stylesheet" type="text/css"/>



    </head>
    <body>
        <div class="type-5">
            <div class="row"> 
                
                <!--BANNER IMAGE-->
                <div class="banner-image">
                    <div class="oImage">
                        <a href="#">
                            <img src="../images/type-5/banner image.jpg">
                        </a>
                    </div>
                </div>
                <!--END BANNER IMAGE-->
            </div>
            <div class="row">
                <div class="container">
                    <div class="navation">
                        <ul>
                            <li class="home"><a href="#">Trang chủ</a></li>
                            <li><a href="#">Sản phẩm</a></li>
                            <li>Thức ăn cho heo</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="heading">
                    <!--TITLE-->
                    <div class="p-title">
                        <h2>Thức ăn gia súc gia cầm</h2>
                    </div>
                    <!--END TITLE-->
                </div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-prod-left">
                                <!-- BEGIN: SLIDE DETAIL IMAGE -->
                                <div class="imageDetail">
                                    <a class="fancybox" href="#">
                                        <img src="../images/type-5/691.jpg" />
                                    </a>
                                </div>
                                <!-- END: SLIDE DETAIL IMAGE -->
                                <!--===BEGIN: SOCIAL==-->
                                <div class="like_share">
                                    <div class="like_facebook">
                                        <ul>
                                            <li>
                                                <a   href="#" rel="nofollow" target="_blank">
                                                    <img src="../images/type-5//icon_facebook_share.gif" />
                                                </a>
                                            </li>
                                            <li>
                                                <a  href="#" rel="nofollow" target="_blank">
                                                    <img src="../images/type-5/icon_google_share.gif" />
                                                </a>
                                            </li>
                                            <li>
                                                <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.fau.com.vn/au-feed-691.html&amp;layout=button_count&amp;show_faces=true&amp;width=90&amp;action=like&amp;colorscheme=light&amp;height=20" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:20px;" allowTransparency="true"></iframe>
                                            </li>
                                            <li>
                                            <g:plusone href="http://www.fau.com.vn/au-feed-691.html" size="medium"></g:plusone>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="feedback">
                                        <a class="link-print" href="javascript:print();">In trang</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!--END SOCIAL-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--BEGIN INFO PRODUCT-->
                            <div class="info-prod-right">
                                <div class="star">
                                    <ul>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="detail_grid">
                                    <div class="detail_row">
                                        <div class="label1">Mã sản phẩm</div>
                                        <div class="grid_info">691</div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="detail_row">
                                        <div class="label1">Thức ăn cho</div>
                                        <div class="grid_info">Thức ăn hỗn hợp cho heo từ 30kg - xuất</div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="detail_row">
                                        <div class="label1">Sản xuất tại</div>
                                        <div class="grid_info">Việt Nam</div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="detail_row">
                                        <div class="label1">Khối lượng</div>
                                        <div class="grid_info">25kg</div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="detail_row">
                                        <div class="label1">Thành phần</div>
                                        <div class="grid_info">Bột cá,bột huyết,tấm, bắp, cám mì mạch, khô dầu đậu nành cô đặc, các acid amin, các chất bổ sung khoáng và vitamin.</div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <form>
                                    <div class="button-cart">
                                        <input name="btnAddcart" type="submit" align="absmiddle" value="Đặt hàng ngay">
                                    </div>
                                </form>
                                <!--===BEGIN: TAG==-->
                                <div class="tag1">
                                    <p><span class="title">TAG: </span> <a href="#">cam heo</a> </p>
                                </div>
                                <!--===END: TAG==-->
                            </div>
                            <!--END INFO PRODUCT-->
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="tab">
                            <div id="exTab" class="tab_specify">	
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a  href="#1" data-toggle="tab">Thông số kỹ thuật</a></li>
                                    <li><a href="#2" data-toggle="tab">Đánh giá sản phẩm</a></li>
                                </ul>

                                <div class="tab-content ">
                                    <!--BEGIN DESCRIPTION PRODUCT-->
                                    <div class="tab-pane active" id="1">
                                        <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
                                    </div>
                                    <div class="tab-pane" id="2">
                                        <h3>Notice the gap between the content and tab after applying a background color</h3>
                                    </div>
                                    <div class="tab-pane" id="3">
                                        <h3>add clearfix to tab-content (see the css)</h3>
                                    </div>
                                    <!--END DESCRIPTION PRODUCT-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
