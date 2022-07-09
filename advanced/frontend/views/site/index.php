<?php
/**
* Team: DBIS学前班
* coding by STU_02 STU_ID_02
* 这里是前端的主页视图
*/
?>

<style>
    body{background:url(img/bk/主页背景.jpg);}
</style>
<?php

/* @var $this yii\web\View */

$this->title = '娱乐空间';
?>
<div class="site-index" background="img/1.png">

    <div class="jumbotron text-center bg-transparent"style="float: middle">
        <h1 class="display-4">欢迎光临娱乐空间！</h1>

        <div style="float: middle">
            <p class="lead">这是一个种类丰富、内容多元的娱乐推荐空间</p>
        </div>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>电影</h2>

                <p><a class="btn btn-outline-secondary" href="https://baike.baidu.com/item/%E7%94%B5%E5%BD%B1/31689?fr=aladdin">了解更多 &raquo;</a></p>
                <div style="float: left;width: 40%;margin-top: 20px;">
                    	<img src="img/电影.jpg" style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
                </div>

                <p>电影，也被称为运动画面或动态画面，即“映画”，是作品视觉艺术形式，通过使用移动图像来表达沟通思想，故事，认知，情感，价值观，或各类大气模拟体验。这些图像通常伴随着声音，很少有其他感官刺激。 “电影”一词是电影摄影的缩写，通常用于指代电影制作和电影业，以及由此产生的艺术形式。</p>
            </div>
            <div class="col-lg-4">
                <h2>音乐</h2>

                <p><a class="btn btn-outline-secondary" href="https://baike.baidu.com/item/%E7%94%B5%E5%BD%B1/31689?fr=aladdin">了解更多 &raquo;</a></p>
                <div style="float: left;width: 40%;margin-top: 20px;">
                    	<img src="img/音乐.jpg" style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
                </div>

                <p>音乐是一种艺术形式和文化活动，其媒介是按时组织的、有规律的声波（机械波的一种）。它的基本要素包括强弱、调性、时长、音色等。由这些基本要素相互结合，形成 音乐的常用的“形式要素”，例如：节奏、曲调、和声，以及力度、速度、调式、曲式、织体等。构成音乐的形式要素，就是音乐的表现手段。不同类型音乐可能会强调或忽略其中的某些元素。音乐是用各种各样的乐器和声乐技术演奏， 分为器乐、声乐（例如不带乐器伴奏的歌曲）以及将唱歌和乐器结合在一起的作品。</p>

                
            </div>
            <div class="col-lg-4">
                <h2>电子游戏</h2>

                <p><a class="btn btn-outline-secondary" href="https://baike.baidu.com/item/%E7%94%B5%E5%BD%B1/31689?fr=aladdin">了解更多 &raquo;</a></p>
                <div style="float: left;width: 40%;margin-top: 20px;">
                    	<img src="img/电子游戏.jpg" style="width: 200px;height: 200px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
                </div>

                <p>电子游戏（Video Games，少部分学者使用Electronic Games）又称电玩游戏（简称电玩），是指所有依托于电子设备平台而运行的交互游戏。根据运行媒介的不同分为五类：主机游戏（狭义的，此处专指家用机游戏）、掌机游戏、街机游戏、电脑游戏及手机游戏。完善的电子游戏在20世纪末出现，改变了人类进行游戏的行为方式和对游戏一词的定义，属于一种随科技发展而诞生的文化活动。</p>
            </div>
        </div>

    </div>
</div>
