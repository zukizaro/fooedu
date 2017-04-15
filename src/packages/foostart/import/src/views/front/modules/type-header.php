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
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/type-header.less', '../css/type-header.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-header.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div class="type-header">
            <div class="row">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <img src="../images/type-header/logo-FAU.png">
                                </div>
                            </div>
                            <div class="col-md-9">

                                <div class="header-r">

                                    <div class="menu-top">
                                        <div class="form-search">
                                            <div class="s-title">search</div>
                                            <form id="formSearch" class="box_search">
                                                <div class="formSearch">
                                                    <input name="do_search" value="1" type="hidden">
                                                    <div class="input-group">
                                                        <input name="keyword" id="keyword" type="text" class="input-search form-control" placeholder="Nhập từ khóa tìm kiếm..." value="">
                                                        <span class="input-group-btn">
                                                            <button id="btn-search" name="btn-search" type="submit" class="btn btn-search" value="Search">
                                                                <span>Search</span>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="menu-top-item">
                                            <ul>
                                                <li class="member">
                                                    <a href="#">
                                                        Thành viên
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="menu-main">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <div class="item">
                                                <a href="#" class="home">
                                                    <span>Trang chủ</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="navbar1" class="navbar-collapse collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="active first">
                                                    <a href="#" class="home item-main">
                                                        <span>Home</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a  href="#" class="dropdown-toggle item-main" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        <span>Sản phẩm</span>
                                                    </a>
                                                    <ul  class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropdown">
                                                    <a  href="#" class="dropdown-toggle item-main" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        <span>Sản phẩm</span>
                                                    </a>
                                                    <ul  class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropdown">
                                                    <a  href="#" class="dropdown-toggle item-main" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        <span>Sản phẩm</span>
                                                    </a>
                                                    <ul  class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropdown">
                                                    <a  href="#" class="dropdown-toggle item-main" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        <span>Sản phẩm</span>
                                                    </a>
                                                    <ul  class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a  href="#" class="dropdown-toggle item-main" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        <span>Sản phẩm</span>
                                                    </a>
                                                    <ul  class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a  href="#" class="dropdown-toggle item-main" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        <span>Sản phẩm</span>
                                                    </a>
                                                    <ul  class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span>Thịt heo hữu cơ</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                 

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        var i = 0;
                        $(document).click(function (event) {
                            if ($(event.target).closest('.s-title').length == 1) {
                                if (i == 0) {
                                    $('.form-search').addClass('show');
                                    i = 1;
                                } else {
                                    $('.form-search').removeClass('show');
                                    i = 0;
                                }
                            } else {
                                $('.form-search').removeClass('show');
                                i = 0;
                            }
                        });
                    });
                </script>
            </div>
        </div> 

    </body>
</html>
