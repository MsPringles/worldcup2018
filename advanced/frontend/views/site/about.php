<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180723
    * This page is to introduce our team
    
*/

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '关于我们';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
-->

<div id="blog" class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h4>关于我们</h4>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="blog-item b1">
                    <div class="thumb">
                        <img src="img/blog_01.jpg" alt="">
                        <div class="text-content">
                            <h4>团队信息</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-item second-blog b2">
                    <div class="thumb">
                        <img src="img/blog_02.jpg" alt="">
                        <div class="text-content">
                            <h4>成员信息</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-item b3">
                    <div class="thumb">
                        <img src="img/blog_03.jpg" alt="">
                        <div class="text-content">
                            <h4>团队分工</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pop">
                  <span>✖</span>
                  <p>团队名称：小可爱</p>
                <p>团队组成：王哲/刘莹/于缓缓/黄娅斯/丁玉来</p>
                </div>
                <div class="pop2">
                  <span>✖</span>
                  <p>王哲   学号：1613394       专业：计算机科学与技术      </p>
                   <p>刘莹   学号：1613754       专业：金融 </p>
                    <p>于缓缓   学号：1611398      专业：计算机科学与技术 </p>
                     <p>黄娅斯   学号：1513029       专业：计算机科学与技术 </p>
                      <p>丁玉来   学号：1512973       专业：信息安全  </p>
                </div>
                <div class="pop3">
                  <span>✖</span>
                  <p>王哲/刘莹 —— 后台制作、PPT后台制作部分、用户手册后台部分</p>
                  <p>于缓缓/黄娅斯 —— 前台制作、PPT前台制作部分、用户手册前台部分</p>
                  <p>丁玉来 —— 爬虫、一键部署</p>
                </div>
            </div>
        </div>
    </div>
</div>
