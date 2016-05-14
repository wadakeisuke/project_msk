<!DOCTYPE html>
<html>
    <head>
        <title>MSK48</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
        <link rel="shortcut icon" href="assets/img/favicon.png" >


        <link href="assets/css/top_style.css" rel="stylesheet">
        <link href="assets/css/flickity.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/js/snap.svg-min.js" rel="stylesheet">


        <style>
            .swiper-container{width:100%;padding-top:30px;padding-bottom:30px;background:white;clear:both}
            .swiper-slide{background-position:center;background-size:cover;width:150px;height:150px;}
            .swiper-slide img{width:100%;height:100%;}
        </style>
        <style>
            .btn_box{width:100%;opacity:0.7;}
            .btn_item{
                width:80%;
                margin:15px 10%;
                height:60px;
                opacity:0.7;
                color:575757;
                text-align:center;
                border-left:1px solid #ff0000;
                border-right:1px solid #0000ff;
            }
            .btn_item a{color:575757;line-height:60px;}
            .btn_item:before,
            .btn_item:after {
                content:"";
                display:block;
                height:1px;
                background:-webkit-gradient(linear, left top, right bottom, from(#f00), to(#00f));
                background:-moz-linear-gradient(left, #f00, #00f);
                background:linear-gradient(left, #f00, #00f);
            }

            .info_box{
                width:100%
            }
            .info_item{
                width:96%;
                margin:5px 3%;
                height:45px;
                background:#2e8ece;
                opacity:0.7;
            }
            .info_item a{padding-left:20px;color:white;line-height:45px;}
            .social_box{
                width:100%;
                height:60px;
            }
            .social_box ul{
                width:90%;
                height:60px;
                margin:0 5%
            }
            .social_box ul li{
                width:33.333333%;
                height:60px;
                text-align:center;
                float:left;
                list-style-type: none;
            }
            .fb_item{background:#3b5998;}
            .ig_item{background:#517fa4;}
            .tw_item{background:#2290bf;}
            .top_social{
                color:white;
                line-height:60px;
                font-size:30px;
            }
        </style>
        <link href="assets/css/swiper.css" rel="stylesheet">
    </head>
    <body>
<?php
class MY_Loader extends CI_Loader {
    function __construct(){
        parent::__construct();
        $this->header_path = APPPATH . "views/headerview.php";
        $this->footer_path = APPPATH . "views/footer.php";
    }
 
    public function set_header($view)
    {
        $this->header_path = APPPATH . "views/".$view.".php";
    }
 
    public function set_footer($view)
    {
        $this->footer_path = APPPATH . "views/".$view.".php";
    }
 
    public function view($view, $vars = array(), $return = FALSE)
    {
        $ci =& get_instance();
        $class = $ci->router->fetch_class(); // Get class
        $action = $ci->router->fetch_method(); // Get action
 
        $header =  $this->_ci_load(array('_ci_path' => $this->header_path, '_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
        $body =  $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
        $footer =  $this->_ci_load(array('_ci_path' => $this->footer_path, '_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
        if($return) {
            return $body;
        }
    }
}
?>
<!--
        <header>
            <div class="header_logo float_f">
                <a href="/">
                    <img src="assets/img/newlogo.png">
                </a>
            </div>
            <div class="header_menu float_f"　>
                <ul>
                    <li>
                        <a href="timeline/" style="display:block;background:;line-height:25px;"><i class="fa fa-clock-o up_icon"></i></a>
                        <p class="icon_p"><a href="timeline/" style="font-size:8px;">メンバー達</a></p>
                    </li>
                    <li>
                        <a href="upload/" style="display:block;background:;line-height:25px;"><i class="fa fa-camera-retro fa-lg up_icon"></i></a>
                        <p class="icon_p"><a href="upload/" style="font-size:8px;">エントリー</a></p>
                    </li>
                    <li>
                        <a href="#" style="display:block;background:;line-height:25px;"><i class="fa fa-file-text up_icon"></i></a>
                        <p class="icon_p"><a href="/" style="font-size:8px;">極意</a></p>    
                    </li>
                    <li>
                        <a href="#" style="display:block;background:;line-height:25px;"><i class="fa fa-bars up_icon "></i></a>
                        <p class="icon_p"><a href="/" style="font-size:8px;">カスタマイズ</a></p>
                    </li>
                </ul>
            </div>
        </header>
-->


        <div class="content">
            <!--startd upper_content-->
            <div class="upper_content">
                <div class="main-gallery">
                    <img src="assets/img/0003.jpeg" height="400" width="1000" alt="" class="gallery-cell">
                    <img src="assets/img/6.jpg" height="400" width="1000" alt="" class="gallery-cell">
                    <img src="assets/img/20.jpg" height="400" width="1000" alt="" class="gallery-cell">
                </div>
                <!--別ページに移行--
                <div class="main-text">
                    <p style="font-size:20px;text-align:center;text-shadow:3px 3px 3px #ecf0f1">今会いに行けるアイドルから、今なれるアイドルへ</p><br>
                    <p>世界初！マスク女子特化型まとめサイトここにはマスク女子のすべてがあります。マスク写真を投稿し、好きなマスク女子を探せます！さらにはマスクミスコンも画策中！</p>
                </div>
                -->
            </div>

            <div>今、何人の人がエントリーしています！</div>

            <div class="button_box">
                <div class="btn_item">
                    <a>メンバー達を見てみよう</a>
                </div>
                <div class="btn_item">
                    <a>MSK48にエントリー</a>
                </div>
            </div>
            <!-- Swiper -->メンバー達
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="#"><img src="assets//img/10.jpg"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="assets//img/11.jpg"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="assets//img/12.jpg"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="assets//img/13.jpg"></a></div>
                    <div class="swiper-slide"><a href="#"><img src="assets//img/14.jpg"></a></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>→もっと見る
            <!-- /Swiper -->
            <div class="info_box">
                <div class="info_item">
                    <a>msk48ってなに？かなかな？</a>
                </div>
                <div class="info_item">
                    <a>エントリーの方法を伝授します</a>
                </div>
            </div>
            MSK48を応援してください！お願いします！
            <!--Social-->
            <div class="social_box">
                <ul>
                    <li class="fb_item"><i class="fa fa-facebook top_social"></i></li>
                    <li class="tw_item"><i class="fa fa-twitter top_social"></i></li>
                    <li class="ig_item"><i class="fa fa-instagram top_social"></i></li>
                </ul>
            </div>
            <!--Social-->

            <!--end upper_content-->
            <!--別ページに移行
            <div class="flow clear_b">
                <div class="titleber">
                    <h4>まずはやり方を見てみよう！</h4>
                </div>
                <div class="flow_1">
                    <div class="flow_img float_f">
                        <img src="img/maskers_icon1-01.png" height="300" width="1000" alt="" class="flow-cell">
                    </div>
                    <div class="bubble bubble-half-left float_f">
                        <p>投稿方法簡単３ステップ！１マスクを選んで付けます</p>
                    </div>
                </div>
                <div class="flow_2">
                    <div class="bubble bubble-half-right float_f">
                        <p>２写真を撮る（撮ってもらう）</p>
                    </div>
                    <div class="flow_img float_f">
                        <img src="img/maskers_icon2-01.png" height="300" width="1000" alt="" class="flow-cell">
                    </div>
                </div>
                <div class="flow_3">
                    <div class="flow_img float_f">
                        <img src="img/maskers_icon3-01.png" height="300" width="1000" alt="" class="flow-cell">
                    </div>
                    <div class="bubble bubble-half-left float_f">
                        <p>３アップロード</p>
                    </div>
                </div>
            </div>
            -->
            <!--
            <div class="form clear_b">
                <div class="btn float_f">                        
                    <a href="/">
                        <i class="fa fa-clock-o up_icon" style="color:white"></i>
                        <p class="icon_p" style="color:white">タイムライン</p>
                    </a></div>
                <div class="btn float_f">
                    <a href="/">
                        <i class="fa fa-camera-retro fa-lg　up_icon" style="color:white"></i>
                        <p class="icon_p" style="color:white">投稿</p>
                    </a>
                </div>
            </div>
            -->

            <div class="footer">
                footer
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js?20150524"></script>

        <script src="assets/js/flickity.pkgd.min.js"></script>
        <script src="assets/js/classie.js"></script>
        <script src="assets/js/main4.js"></script>
        <script src="assets/js/main.js"></script>


    </body>

    <script src="assets/js/swiper.jquery.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflow: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true
            }
        });
    </script>
</html>