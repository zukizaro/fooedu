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
        $less->compileFile('../less/type-6.less', '../css/type-6.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-6.css" rel="stylesheet" type="text/css"/>



    </head>
    <body>
        <div class="type-6">

            <div class="row">
                <div class="mid-title">
                    <div class="titleL">
                        <!--TITLE-->
                        <h1>Giới thiệu</h1>
                        <!--END TITLE-->
                    </div>
                    
                    <div class="clear"></div>
                </div>
            </div> 
            <div class="row">
                <div class="menu-category">
                    <!--BEGIN MENU CATEGORY-->
                    <ul>
                        <li class="current"><a class="hovers_effect" href="#"><span class="hovers_text">Giới thiệu</span></a></li>
                        <li><a class="hovers_effect" href="#"><span class="hovers_text">Triết lý hoạt động</span></a></li>
                        <li><a class="hovers_effect" href="#"><span class="hovers_text">Lịch sử hình thành</span></a></li>
                        <li><a class="hovers_effect" href="#"><span class="hovers_text">Hệ thống phân phối</span></a></li>
                        <li><a class="hovers_effect" href="#"><span class="hovers_text">Đội ngũ nhân sự</span></a></li>
                    </ul>
                    <!--END MENU CATEGORY-->
                </div>
            </div>

        </div>

    </body>
</html>
