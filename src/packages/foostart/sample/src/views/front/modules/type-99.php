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
        $less->compileFile('../less/type-99.less', '../css/type-99.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-99.css" rel="stylesheet" type="text/css"/>



    </head>
    <body>
        <div class="type-99">
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
                            <div class="div-question">
                                <!--FEEDBACK-->
                                <div class="q-title">Nếu bạn có thắc mắc hãy gửi câu hỏi cho chúng tôi.</div>
                                <div class="q-content">Câu hỏi của bạn sẽ được trả lời cụ thể .</div>
                                <div>
                                    <a class="q-question" href="/tu-van-hoi-dap/write.html/?cat_id=">Gửi câu hỏi</a>
                                </div>
                                <!--END FEEDBACK-->
                            </div>

                            <div class="list-question">
                                <div class="faq" id="accordion">
                                    <div class="panel panel-default row-question">
                                        <div class="panel-heading">
                                            <div class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                <!--ITEM QUESTION FEEDBACK-->
                                                <div class="item-question">
                                                    <div>
                                                        <a class="show-answer" href="javascript:void(0)" title="2. Lợn con đẻ được 10 ngày, chỉ nằm thở, không bú sữa, sau 5 ngày thì chết. Xin hỏi nguyên nhân và cách khắc phục như thế nào?">2. Lợn con đẻ được 10 ngày, chỉ nằm thở, không bú sữa, sau 5 ngày thì chết. Xin hỏi nguyên nhân và cách khắc phục như thế nào?</a>
                                                    </div>
                                                    <div class="i-name">Chị Nguyễn Thị Lan, Lương Tài – Bắc Ninh  -  01:59 - 11/12/2013</div>
                                                </div>
                                                <!--END ITEM QUESTION FEEDBACK-->
                                            </div>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <!--ITEM ANSWER-->
                                                <div class="item-answer">
                                                    <span class="span-answer">Trả lời :</span><p>PGS.TS Trương Văn Dung – Nguyên Viện trưởng Viện Thú y Việt Nam cho biết lợn đã bị nhiễm khuẩn đường tiêu hóa do E.coli.</p>

                                                    <p>Chị&nbsp;có thể điều trị như sau:</p>

                                                    <p><em>- Dùng kháng thể E.COLI tiêm phúc mạc 1ml/1kg thể trọng trong 3 ngày hoặc dùng kháng thể E,COLI bột hòa nước cho uống với liều 10-20g/con/ngày cho uống liên tục 3 ngày.</em></p>

                                                    <p><em>- Cho uống chất điện giải Gluco-C 3 ngày liền</em></p>

                                                    <p><em>- Bổ sung SIÊU MEN SACCHARO và VITAMIN ADE vào thức ăn hàng ngày.</em></p>

                                                    <p><em>- Vệ sinh tiêu độc chuồng nuôi bằng dung dịch VIRKON hoặc HANIODIN 10% hoặc BENKOSID để diệt mầm bệnh ngoài môi trường.</em></p>
                                                </div>
                                                <!--END ITEM ANSWER-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default row-question">
                                        <div class="panel-heading">
                                            <div class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                <div class="item-question">
                                                    <div>
                                                        <a class="show-answer" href="javascript:void(0)" title="2. Lợn con đẻ được 10 ngày, chỉ nằm thở, không bú sữa, sau 5 ngày thì chết. Xin hỏi nguyên nhân và cách khắc phục như thế nào?">2. Lợn con đẻ được 10 ngày, chỉ nằm thở, không bú sữa, sau 5 ngày thì chết. Xin hỏi nguyên nhân và cách khắc phục như thế nào?</a>
                                                    </div>
                                                    <div class="i-name">Chị Nguyễn Thị Lan, Lương Tài – Bắc Ninh  -  01:59 - 11/12/2013</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="item-answer">
                                                    <span class="span-answer">Trả lời :</span><p>PGS.TS Trương Văn Dung – Nguyên Viện trưởng Viện Thú y Việt Nam cho biết lợn đã bị nhiễm khuẩn đường tiêu hóa do E.coli.</p>

                                                    <p>Chị&nbsp;có thể điều trị như sau:</p>

                                                    <p><em>- Dùng kháng thể E.COLI tiêm phúc mạc 1ml/1kg thể trọng trong 3 ngày hoặc dùng kháng thể E,COLI bột hòa nước cho uống với liều 10-20g/con/ngày cho uống liên tục 3 ngày.</em></p>

                                                    <p><em>- Cho uống chất điện giải Gluco-C 3 ngày liền</em></p>

                                                    <p><em>- Bổ sung SIÊU MEN SACCHARO và VITAMIN ADE vào thức ăn hàng ngày.</em></p>

                                                    <p><em>- Vệ sinh tiêu độc chuồng nuôi bằng dung dịch VIRKON hoặc HANIODIN 10% hoặc BENKOSID để diệt mầm bệnh ngoài môi trường.</em></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>

                            </div>

                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $(document).on('click', '.panel div.panel-title', function (e) {
                    if ($(this).attr('aria-expanded') === 'true') {
                        $('.row-question').removeClass('show');
                        $('.panel-collapse').removeClass('in');
                        $(this).parent().parent().addClass('show');
                    } else {
                        $(this).parent().parent().removeClass('show');
                        $(this).parent().parent().children('.panel-collapse').removeClass('in');
                    }
                });
            });
        </script>
    </body>
</html>
