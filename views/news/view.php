<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="pb-6 m-4" style="min-height: 500px; background-image: url(/uploads/<?=$model->image?>); background-size: cover; background-position: center;">
    </div>

    <div class="mt-2" style="font-family: 'Montserrat',Helvetica,sans-serif;font-size: 24px;">
        <?=$model->desc;?>
    </div>
    <div class="mt-2" style="font-family: 'Fira Sans';">
        <?=$model->content;?>
    </div>






































    <!-- <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'desc',
            'content:ntext',
            [
                'attribute'=>'image',
                'value'=> "\uploads\\" . $model->image,
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            [
                'format' => 'boolean',
                'attribute' => 'elect',
                'filter' => [0=>'Нет',1=>'Да'],
            ]
        ],
    ]) ?> -->

</div>
