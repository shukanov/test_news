<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Избранные новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    a {
        text-decoration: none; 
        color: black; 
    }
    a:hover {
        text-decoration: none; 
        color: #0f0f0f;
   } 
</style>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <?php foreach ($models as $value): ?>
        <?php 
            $link = "/uploads/" . $value->image;    
        ?>
        <div class="row w-100 mt-2 mb-3" style="height: 250px;">
            <a class="col-md-4 h-100 w-100" href="view/?id=<?=$value->id?>" target="_blank">
                <div class="h-100 w-100" style="background-image: url(<?=$link;?>); background-size: cover; background-position: center;">
                </div>
            </a>
            <div class="col-md-8">
                <div class="pb-2 pt-3 font-weight-bold">
                    <a href="view/?id=<?=$value->id?>" target="_blank">
                        <h3><?=$value->title;?></h3>
                    </a>
                </div>
                <div class="mt-3">
                    <?=$value->desc;?>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
