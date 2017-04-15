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
        $less->compileFile('../less/type-comment.less', '../css/type-comment.css');
        ?>

        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-comment.css" rel="stylesheet" type="text/css"/>



    </head>
    <body>
        <div class="type-comment">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="comment">
                            <div class="box-comment">
                                <form>
                                    <div class="title">
                                        Ý kiến thảo luận
                                    </div>
                                    <div class="form-comment">
                                        <div class="input-group">
                                            <div class="txt-comment">
                                                <textarea id="txtComment" placeholder="Mời bạn nhập ý kiến thắc mắc của bạn" class="form-control" style="height: 155px;"></textarea>
                                            </div>
                                            <div class="content-info">
                                                <div class="info-title">Nhập thông tin của bạn</div>
                                                <input id="email" class="form-control" placeholder="Email">
                                                <input id="name" class="form-control" placeholder="Name">
                                                <div>
                                                    <label>Đáng giá SP:</label> 
                                                    <img onmouseover="vnTcomment.select_vote(1)" src="../images/type-comment/star2.gif" id="vote_1" align="absmiddle" style="cursor:pointer">
                                                    <img onmouseover="vnTcomment.select_vote(2)" src="../images/type-comment/star2.gif" id="vote_2" align="absmiddle" style="cursor:pointer">
                                                    <img onmouseover="vnTcomment.select_vote(3)" src="../images/type-comment/star2.gif" id="vote_3" align="absmiddle" style="cursor:pointer">
                                                    <img onmouseover="vnTcomment.select_vote(4)" src="../images/type-comment/star2.gif" id="vote_4" align="absmiddle" style="cursor:pointer">
                                                    <img onmouseover="vnTcomment.select_vote(5)" src="../images/type-comment/star2.gif" id="vote_5" align="absmiddle" style="cursor:pointer">
                                                    <input type="hidden" value="5" name="hvote" id="hvote">
                                                </div>
                                                <div>
                                                    <div class="vk-menu">
                                                        <b>Bộ gõ :</b> <input id="him_off" name="viet_method"   type="radio"> Off
                                                        <input id="him_telex" type="radio"  name="viet_method"> Telex
                                                        <input id="him_vni" name="viet_method"  type="radio"> VNI
                                                    </div>
                                                    <script type="text/javascript">var method = 2, on_off = 1, useCookie = 0;</script>
                                                </div>
                                                <div>
                                                    <input type="checkbox" value="1" name="hidden_email" id="hidden_email"> &nbsp;Ẩn email của tôi
                                                </div>
                                            </div>

                                        </div>
                                        <span class="input-group-btn">
                                            <input type="hidden" name="h_code" id="h_code" value="427570">
                                            <input name="comment_id" value="117" type="hidden">
                                            <button name="btnSend" id="btnSend" value="submit" class="btn" type="submit">Gửi</button>
                                        </span>
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
