<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <?php foreach ($models as $value): ?>
        <?php 
            $link = "/uploads/" . $value->image;    
        ?>
        <div class="row w-100 mt-2 mb-3" style="height: 250px;">
            <div class="col-md-4 h-100" style="background-image: url(<?=$link;?>); background-size: cover; background-position: center;">
            </div>
            <div class="col-md-8">
                <div class="pb-2 pt-3 font-weight-bold">
                    <h3><?=$value->title;?></h3>
                </div>
                <div class="mt-3">
                    <?=$value->desc;?>
                </div>
            </div>
        </div>
    <?php endforeach;?>

    <!-- <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($models as $value): ?>
            <?php 
                $link = "\uploads\\" . $value->image;    
            ?>
            <div class="col mb-4">
                <div class="card">
                <img src="<?=$link;?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$value->title?></h5>
                    <p class="card-text"><?=$value->desc;?></p>
                </div>
                </div>
            </div>
        <?php endforeach;?>
    </div> -->


</div>
