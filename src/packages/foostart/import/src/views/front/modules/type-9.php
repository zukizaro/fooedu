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
        $less->compileFile('../less/type-9.less', '../css/type-9.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-9.css" rel="stylesheet" type="text/css"/>



    </head>
    <body>
        <div class="type-9">
            <div class="row">
                <div class="heading">
                    <!--TITLE-->
                    <div class="p-title">
                        <h2>Thức ăn gia súc gia cầm</h2>
                    </div>
                    <!--END TITLE-->S
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <!--MENU CATEGORY PRODUCT-->
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
                            <!--END MENU CATEGORY PRODUCT-->
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12 products">
                            <div class="row">
                                <!--ITEM PRODUCT-->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#" >
                                                <img src="../images/type-9/(270x180)_crop_20141209100602-3.jpg">
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
                                <!--END ITEM PRODUCT-->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#" >
                                                <img src="../images/type-9/(270x180)_crop_20141209100602-3.jpg">
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
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#" >
                                                <img src="../images/type-9/(270x180)_crop_20141209100602-3.jpg">
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
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#" >
                                                <img src="../images/type-9/(270x180)_crop_20141209100602-3.jpg">
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
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#" >
                                                <img src="../images/type-9/(270x180)_crop_20141209100602-3.jpg">
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
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#" >
                                                <img src="../images/type-9/(270x180)_crop_20141209100602-3.jpg">
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
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#" >
                                                <img src="../images/type-9/(270x180)_crop_20141209100602-3.jpg">
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
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item">
                                        <div class="i-images">
                                            <a href="#" >
                                                <img src="../images/type-9/(270x180)_crop_20141209100602-3.jpg">
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
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <!--BEGIN ITEM GALLERY-->
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="../images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END ITEM GALLERY-->
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="../images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="../images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="../images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="../images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="../images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="../images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="../images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
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
