
<html>

    <head>
        <title></title>
        <meta charset="utf-8">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../less/type-11.less', '../css/type-11.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-11.css" rel="stylesheet" type="text/css"/>



    </head>
    <body>
        <div class="type-11">
            <div class="row">
                <div class="heading">
                    <!--TITLE-->
                    <div class="p-title">
                        <h2>Thức ăn gia súc gia cầm</h2>
                    </div>
                    <!--END TITLE-->
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row"> 
                        <div class="the-content">
                            <div id="infoDealer" class="infoContact clearfix">
                                <div class="info_dealer info_contact">
                                    <div>
                                        <!--INFOR COMPANY-->
                                        <div itemscope="" itemtype="http://schema.org/Organization">
                                            <p class="name" itemprop="name">CÔNG TY TNHH NÔNG NGHIỆP QUỐC TẾ FAU</p>
                                            <p class="address" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">Số 71, Hà Huy Giáp, Khu Văn Hải, Long Thành, Đồng Nai</p>
                                            <p class="address2">Số 78/79, đường Huỳnh Mẫn Đạt, ấp Bình Hóa, xã Hóa An, Biên Hòa, Đồng Nai</p>
                                            <p class="phone" itemprop="telephone">0613 955 982</p>
                                            <p class="fax" itemprop="faxNumber">0613 955 972</p>
                                            <p class="email" itemprop="email">aufeed.fau@gmail.com</p>
                                            <p class="website" itemprop="url">www.fau.com.vn</p>
                                        </div>
                                        <!--END INFO COMPANY-->
                                    </div>
                                    <div class="Qcode">
                                        <img src="http://chart.apis.google.com/chart?chf=a,s,000000|bg,s,FFFFFF&amp;chs=150x150&amp;chld=M|1&amp;cht=qr&amp;chl=BEGIN%3AVCARD%0AVERSION%3A2.1%0AN%3A%0AORG%3AC%C3%94NG+TY+TNHH+N%C3%94NG+NGHI%E1%BB%86P+QU%E1%BB%90C+T%E1%BA%BE+FAU%0ATITLE%3A%0ATEL%3BWORK%3BVOICE%3A0613+955+982%0ATEL%3BHOME%3BVOICE%3A0613+955+972%0AEMAIL%3BPREF%3BINTERNET%3Aaufeed.fau%40gmail.com%0AURL%3Awww.fau.com.vn%0ANOTE%3AS%E1%BB%91+71%2C+H%C3%A0+Huy+Gi%C3%A1p%2C+Khu+V%C4%83n+H%E1%BA%A3i%2C+Long+Th%C3%A0nh%2C+%C4%90%E1%BB%93ng+Nai%0AEND%3AVCARD&amp;choe=UTF-8">
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>
                            </div>
                            <div class="formContact">

                                <form id="formContact" class="form validate">
                                    <div class="row">
                                        <!--NAME-->
                                        <div class="row-form col-md-7 col-sm-9 col-xs-12">
                                            <label for="name">Họ tên <span>(*)</span></label>
                                            <input type="text"  class="form-control" >
                                            <div class="clear"></div>
                                        </div>
                                        <!--END NAME-->
                                        <!--EMAIL-->
                                        <div class="row-form col-md-7 col-sm-9 col-xs-12">
                                            <label for="email">Email <span>(*)</span></label>
                                            <input type="text" name="email" id="email" class="form-control" value="">
                                            <div class="clear"></div>
                                        </div>
                                        <!--END EMAIL-->
                                        <!--PHONE-->
                                        <div class="row-form col-md-7 col-sm-9 col-xs-12">
                                            <label class="l-phone" for="phone">Điện thoại </label>
                                            <input type="text"   class="form-control">
                                            <div class="clear"></div>
                                        </div>
                                        <!--END PHONE-->
                                        <!--COMPANY-->
                                        <div class="row-form col-md-7 col-sm-9 col-xs-12">
                                            <label for="company">Công ty</label>
                                            <input type="text"  class="form-control">
                                            <div class="clear"></div>
                                        </div>
                                        <!--END COMPANY-->
                                        <!--CONTACT-->
                                        <div class="row-form col-md-7 col-sm-9 col-xs-12">
                                            <label for="staff">Liên hệ tới phòng</label>
                                            <select name="staff"   class="form-control">
                                                <option value="thuc.fau@gmail.com">Phòng Nhân Sự</option>
                                            </select>
                                            <div class="clear"></div>
                                        </div>
                                        <!--END CONTACT-->
                                        <!--CONTENT CONTACT-->
                                        <div class="row-form col-md-7 col-sm-9 col-xs-12">
                                            <label for="f-content">Nội dung liên lạc <span>(*)</span></label>
                                            <textarea class="form-control" ></textarea>
                                            <div class="clear"></div>
                                        </div>
                                        <!--END CONTENT CONTACT-->
                                        <!--CODE SECURITY-->
                                        <div class="row-form col-md-7 col-sm-9 col-xs-12">
                                            <label for="security_code">Mã bảo vệ <span>(*)</span></label>
                                            <input type="text" id="security_code" class="form-control">
                                            <img src="http://www.fau.com.vn/includes/sec_image.php?code=TODkzNc5">
                                            <div class="clear"></div>
                                        </div>
                                        <!--END CODE SECURITY-->
                                        <!--SEND-->
                                        <div class="row-form col-md-7 col-sm-9 col-xs-12 c-button">
                                            <button   type="submit" class="btn"><span>Gửi</span></button>
                                            <button type="reset" class="btn"  ><span>Làm lại</span></button>
                                        </div>
                                        <!--END SEND-->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>