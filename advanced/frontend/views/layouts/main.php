<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    * This is the main layout of frontend web
    
*/

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\ArrayHelper;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>互联网数据库</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/tooplate-style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


        <link rel="stylesheet"
        href="css/bootstrap.min.css">
        <link rel="stylesheet"
          href="css/bootstrap-theme.min.css">
        <script
          src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script
          src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


      

</head>
<body>
<?php $this->beginBody() ?>

<?php
NavBar::begin([
    'brandLabel' => '世界杯',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
        //'class' => 'navbar navbar-fixed-top',
    ],
]);

$menuItems = [
    ['label' => '主页', 'url' => ['/site/index']],
];

//如果未登陆（isGuest)(游客)
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => '登陆', 'url' => ['/site/login']];
} else {

    
    $menuItems[] = ['label' => '个人中心', 'items' => [
            ['label' => '我的信息', 'url' => ['/user/view']],
            ['label' => '修改密码', 'url' => ['/user/resetpwd']],
        ]];
    $menuItems[] = ['label' => '世界杯！', 'items' => [
            ['label' => '球员', 'url' => ['/wcup-player/index']],
            ['label' => '比赛', 'url' => ['/wcup-champion/index']],
            ['label' => '城市', 'url' => ['/wcup-country/index']],
            ['label' => '场地', 'url' => ['/wcup-ground/index']],
            ['label' => '裁判', 'url' => ['/wcup-judge/index']],
            ['label' => '记录', 'url' => ['/wcup-record/index']],
            ['label' => '统计', 'url' => ['/wcup-statistics/index']],
            ['label' => '球队', 'url' => ['/wcup-team/index']],
            ['label' => '进球', 'url' => ['/wcup-top/index']],
        ]];

    $menuItems[] = ['label' => '评论信息', 'items' => [
                ['label' => '我的评论', 'url' => ['/wcup-comment/mine']],
                ['label' => '所有评论', 'url' => ['/wcup-comment/index']],
            ]];

    $menuItems[] = ['label' => '关于我们', 'url' => ['/site/about'],
        
    ];
    $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            '登出 (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()

        . '</li>';

}

echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,

]);
NavBar::end();
?>



<div class="wrap">


    <!--网页头部样式-->
    <section class="cd-hero">
        <ul class="cd-hero-slider autoplay">  
        <!-- 
            <ul class="cd-hero-slider autoplay"> for slider auto play 
            <ul class="cd-hero-slider"> for disabled auto play
        -->
            <li class="selected first-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Russia  2018</span>
                        <br/>
                        <h2 style = "display:inline;">Welcome to the World Cup</h2>
                        <p></p>
                        <p>You will get information about the 2018 World Cup here. We hope that you can have a happy summer.</p>
                                           
                    </div>                   
                </div> <!-- .cd-full-width -->
            </li>

            <li class="second-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                       <span>Russia  2018</span>
                        <br/>
                        <h2 style = "display:inline;">Welcome to the World Cup</h2>
                        <p></p>
                        <p>You will get information about the 2018 World Cup here. We hope that you can have a happy summer.</p>
                                             
                    </div>                     
                </div> <!-- .cd-full-width -->
            </li>

            <li class="third-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Russia  2018</span>
                        <br/>
                        <h2 style = "display:inline;">Welcome to the World Cup</h2>
                        <p></p>
                        <p>You will get information about the 2018 World Cup here. We hope that you can have a happy summer.</p>
                                                  
                    </div>                         
                </div> <!-- .cd-full-width -->
            </li>
        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>
                
                <ul>
                    <li class="selected"><a href="#0"></a></li>
                    <li><a href="#0"></a></li>
                    <li><a href="#0"></a></li>                        
                </ul>
            </nav> 
        </div> <!-- .cd-slider-nav -->
    </section> <!-- .cd-hero -->

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; 世界杯 <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
