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
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>-->

        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/type-13.less', '../css/type-13.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-13.css" rel="stylesheet" type="text/css"/>



    </head>
    <body>
        <div class="type-13">
            <div class="row">
                <div class="banner">
                    <a href="#">
                        <img src="../images/type-13//banner.jpg">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="breadcrumb">
                        <ul>
                            <li class="home">
                                <a href="/">Trang chủ</a>
                            </li>
                            <li>
                                <a href="/san-pham.html">Sản phẩm</a>
                            </li>
                            <li>Thức ăn cho heo
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>    
    </body>
</html>
