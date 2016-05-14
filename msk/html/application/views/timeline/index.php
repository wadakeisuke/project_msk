<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MSK48</title>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,user-scalable=no,initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Chivo' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Donegal+One' rel='stylesheet' type='text/css'>
        <link href='/assets/css/pinterestgrid.css' rel='stylesheet' type='text/css'>
        <!--<link href='/assets/css/pinterestgrid.scss' rel='stylesheet' type='text/css'>-->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript">

        </script>
    </head>
    <body>
        
        <header>
            <div class="upper_header">
                <div class="up_me float_f"><p style ="color:white;font-family:cursive;">すべてのマスク女子のために</p></div>
                <div class="up_social float_f"><i class="fa fa-facebook-square"style="color:white"></i><i class="fa fa-twitter-square"style="color:white"></i></div>
            </div>
            <div class="header_logo float_f">
                <a href="/">
                    <img src="assets/img/logo_1.png">
                </a>
            </div>
            <div class="header_menu float_f"　>
                <ul>
                    <li>
                        <a href="timeline/" style="display:block;background:;line-height:25px;"><i class="fa fa-clock-o up_icon"></i></a>
                        <p class="icon_p"><a href="" style="font-size:8px;">メンバー達</a></p>
                    </li>
                    <li>
                        <a href="" style="display:block;background:;line-height:25px;"><i class="fa fa-camera-retro fa-lg up_icon"></i></a>
                        <p class="icon_p"><a href="" style="font-size:8px;">エントリー</a></p>
                    </li>
                    <li>
                        <a href="#" style="display:block;background:;line-height:25px;"><i class="fa fa-file-text up_icon"></i></a>
                        <p class="icon_p"><a href="" style="font-size:8px;">極意</a></p>    
                    </li>
                    <li>
                        <a href="#" style="display:block;background:;line-height:25px;"><i class="fa fa-bars up_icon "></i></a>
                        <p class="icon_p"><a href="" style="font-size:8px;">カスタマイズ</a></p>
                    </li>
                </ul>
            </div>
        </header>

        
        <div class="container">
            <div id="inner_container">

            </div>
        </div>

        <script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
        <script src="/assets/js/jquery.pinterestGrid.extend.js"></script>
        <!--<script src="js/jquery.pinterestGrid.js"></script>-->
        <script>
                            $(function () {
                                $(window).on('load', function () {
                                    $('#container').pinterestGrid({
                                        offsetX: 8,
                                        offsetY: 8,
                                        gridElement: '.grid'
                                    });
                                });
                            });
        </script>
    </body>
</html>
