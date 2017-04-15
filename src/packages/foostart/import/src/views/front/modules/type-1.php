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
            $less->compileFile('../less/type-1.less', '../css/type-1.css');
        ?>

        <link href="../css/nivo-slider.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-1.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="../js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script type="text/javascript"> 
            
            $(window).load(function () {
                $('#slider_main').nivoSlider({
                    effect: 'random',
                    pauseTime: 4000, 
                    directionNav: true,
                    controlNav: true,
                    pauseOnHover: false
                });
            });

        </script>
    </head>
    <body>
        <div class="type-1">
            <div class="row">
                <div class="banner">
                    <div id="slider_main" class="nivoSlider">
                        <!--START SLIDE BANNER-->
                        <a href="#" target="_blank">
                            <img src="../images/type-1/slider1.jpg"/>
                        </a>
                        <a href="#" target="_self">
                            <img src="../images/type-1/nong_nghiep_quoc_te_fau_banner_03.jpg"/>
                        </a>
                        <a href="#" target="_self">
                            <img src="../images/type-1/nong_nghiep_quoc_te_fau_banner_02.jpg"/>
                        </a>
                        <a href="#" target="_self">
                            <img src="../images/type-1/nong_nghiep_quoc_te_fau_banner_01.jpg"/>
                        </a>
                        <!--END SLIDE BANNER-->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
