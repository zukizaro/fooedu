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
        $less->compileFile('../less/type-8.less', '../css/type-8.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-8.css" rel="stylesheet" type="text/css"/>



    </head>
    <body>
        <div class="type-8">

            <div class="row">
                <div class="mid-title">
                    <!--TITLE-->
                    <div class="titleL">
                        <h1>Giới thiệu</h1></div>
                    <div class="clear"></div>
                    <!--END TITLE-->
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
                    <!--END MENU CATEOGRY-->
                </div>
            </div>

            <div class="row">
                <div class="container">
                    <div class="the-content">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="the-content-l">
                                    <div class="fl" style="margin:0px 15px 15px 0px;">
                                        <!--CONTENT INTRODUCTION-->
                                        <p><span style="line-height: 20.8px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>Thành lập từ ngày 21/03/2012, được Sở Kế Hoạch và Đầu Tư tỉnh Đồng Nai cấp giấy phép đầu tư số 3602768468, Công Ty TNHH Nông Nghiệp Quốc Tế FAU luôn dẫn đầu về sản lượng, chất lượng và dịch vụ trong ngành cung cấp thức ăn chăn nuôi, liên tiếp trong mấy năm liền là doanh nghiệp tiên phong trong lĩnh vực sản xuất cung ứng thức ăn gia súc gia cầm siêu sạch.</p>

                                        <p><span style="line-height: 20.8px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>Với nguồn vốn đầu tư là 40 triệu USD 100% từ Australia, dây chuyền sản xuất được lắp đặt toàn bộ từ đối tác Van Aarsen (Hà Lan), năng lực sản xuất của công ty FAU là 240.000 tấn/năm, và mục tiêu của toàn thể ban lãnh đạo, cố vấn, chuyên viên, kỹ sư, nhân viên của công ty là tăng lên 700.000 tấn/năm vào năm 2018. Trên 400 đại lý lớn nhỏ đã và đang là đại diện công ty phân phối từ Bắc chí Nam, cùng đội ngũ nhân viên kinh doanh nhiệt tình đầy kinh nghiệm phục vụ khách hàng, hệ thống phân phối và dịch vụ khách hàng của công ty FAU đang ngày một mạnh hơn, vươn xa hơn.</p>

                                        <p><span style="line-height: 20.8px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>Các dòng sản phẩm của FAU ngày một đa dạng về chủng loại, cân đối cho từng giai đoạn phát triển của gia súc, gia cầm.</p>

                                        <p><span style="line-height: 20.8px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>Nhờ áp dụng những quy trình, trang thiết bị tối tân vào khâu kiểm soát chất lượng nguyên vật liệu đầu vào, cũng như sản phẩm đầu ra; một hệ thống giám sát chặt chẽ khâu sản xuất, nên các dòng sản phẩm mang thương hiệu AU FEED của FAU luôn chứng minh được sự vượt trội về chất lượng.</p>
                                        <!--END CONTENT INTRODUCTION-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="the-content-r">
                                    <!--INFO HISTORY COMPANY-->
                                    <p class="a-title">lịch sử Hình thành và phát triển:</p>
                                    <ul class="lshinhthanh">
                                        <li>
                                            <div class="title">21/03/2012</div>
                                            <p></p>
                                            <p>Công ty TNHH Nông Nghiệp Quốc Tế FAU được thành lập.</p>

                                            <p>Trụ sở đặt tại&nbsp;<em>71, Hà Huy Giáp, Tổ 24, Khu Văn Hải, Long Thành, Đồng Nai</em></p>
                                            <p></p>
                                        </li>
                                        <li>
                                            <div class="title">06/06/2014</div>
                                            <p></p>
                                            <p>Mở rộng nhà máy mới tại&nbsp;<em style="line-height: 1.6em;">78/79, Huỳnh Mẫn Đạt, Bình Hóa, Hóa An,&nbsp; Biên Hòa, Đồng Nai</em></p>
                                            <p></p>
                                        </li>
                                    </ul>
                                    <!--END INFO HISTORY COMPANY-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>
