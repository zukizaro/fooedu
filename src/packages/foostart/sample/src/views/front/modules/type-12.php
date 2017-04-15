
<html>

    <head>
        <title></title>
        <meta charset="utf-8">
<!--        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>-->

        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/type-12.less', '../css/type-12.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-12.css" rel="stylesheet" type="text/css"/>



    </head>
    <body>
        <div class="type-12">

            <div class="row">
                <div class="container">
                    <div id="footer">
                        <div class="row footer-head">
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="info-company">
                                    <!--INFO COMPANY FOOTER-->
                                    <p class="name"><span>Copyright © 2015 </span>CÔNG TY TNHH NÔNG NGHIỆP QUỐC TẾ FAU </p>
                                    <p>[VP] : Số 71, Hà Huy Giáp, Khu Văn Hải, Long Thành, Đồng Nai</p>
                                    <p>[NM]: Số 78/79, đường Huỳnh Mẫn Đạt, ấp Bình Hóa, xã Hóa An, Biên Hòa, Đồng Nai</p>
                                    <p>[ĐT] : 0613 955 982.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[F] 0613 955 972</p>
                                    <div>
                                        <a class="fancybox.ajax viewmap" href="http://www.fau.com.vn/modules/contact/ajax/load_map2.php?id=1">Xem bản đồ</a>
                                    </div>
                                    <!--END INFO COMPANY FOOTER-->

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="user-traffic">
                                    <ul class="box_statistics">
                                        <!--TRAFFIC-->
                                        <li>Đang online : <b id="stats_online">4</b></li>
                                        <li>Số lượt truy cập : <b id="stats_totals">156284</b></li>
                                        <li>Thành viên : <b id="stats_member">0</b></li>
                                        <!--END TRAFFIC-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-sm-8 col-xs-12">
                                <div class="info-footer">
                                    <ul>
                                        <!--INFO FOOTER-->
                                        <li><a href="#" target="_blank" class="thietkeweb">Thiết kế web:</a> <strong><a href="#" target="_blank">TRUST.vn</a> </strong></li>
                                        <li><a href="#" target="_self">Điều khoản sử dụng</a></li>
                                        <li class="current"><a href="#" target="_self">Liên hệ</a></li>
                                        <!--END INFOR FOOTER-->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="social-footer">
                                    <!--LINK SOCIAL-->
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="../images/type-12/facebook.png" alt="Facebook">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="../images/type-12/google.png" alt="Google">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <img src="../images/type-12/youtube.png" alt="Youtube">
                                            </a>
                                        </li>
                                    </ul>
                                    <!--END LINK SOCIAL-->
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>