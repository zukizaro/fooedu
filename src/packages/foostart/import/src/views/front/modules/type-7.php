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
        $less->compileFile('../less/type-7.less', '../css/type-7.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-7.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div class="type-7">

            <div class="row">
                <!--TITLE-->
                <div class="mid-title">
                    <div class="titleL">
                        <h1>Danh sach cua hang</h1></div>
                    <div class="clear"></div>
                </div>
                <!--END TITLE-->
            </div> 
            <div class="row">
                <div class="container">
                    <div class="mid-content"> 
                        <div class="the-content"> 
                            <div class="formSystem"> 
                                <!--FORM SEARCH MERCHANT-->
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="formSystem-l">
                                                <div class="table-system"> 
                                                    <span class="title-system">Các đại lý trên: </span> 
                                                    <div class="row-input"> 
                                                        <div class="fl"> 
                                                            <select id="dealer_city" name="dealer_city" class="form-control" size="1">
                                                                <option value="" selected="">Chọn Thành phố</option><option>Đồng Nai</option><option value="58">Đồng Tháp</option>
                                                            </select>
                                                        </div>
                                                        <div class="fr"> 
                                                            <select id="dealer_state" name="dealer_state" class="form-control" size="1">
                                                                <option value="" selected="">Chọn Quận/Huyện</option>
                                                            </select> 
                                                        </div> 
                                                        <div class="clear"></div> 
                                                    </div> 
                                                </div> 
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="formSystem-r"> 
                                                <div class="input-group"> 
                                                    <input type="text" placeholder="Nhập tên đường, hoặc tên đại lý ..." class="form-control"> 
                                                    <span class="input-group-btn">
                                                        <input type="button" value="Tìm đại lý" name="search-submit" id="search-submit" class="search-submit btn"> 
                                                    </span> 
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div> 
                                </form> 
                                <!--END FORM SEARCH MERCHANT-->

                            </div> 
                        </div> 
                        <div class="clear"></div> 

                        <div class="showresult">
                            <div class="row">
                                <!--RESULT MERCHANT ON MAPS-->
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="showmap">
                                        <div id="googleMap"  style="width: 100%; height: 650px;"></div>
                                    </div>
                                </div>
                                <!--END RESULT MERCHANT ON MAP-->
                                <!--RESULT INFO ADDRESS MERCHANT-->
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="result">
                                        <div class="r-count" id="ext_mess_result"></div>
                                        <div class="show-result">
                                            <div class="result-wrapper" id="list_dealer">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END RESULT INFO ADDRESS MERCHANT-->
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function myMap() {
                var mapProp = {
                    center: new google.maps.LatLng(51.508742, -0.120850),
                    zoom: 5,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

    </body>
</html>
