<?php
use yii\widgets\ListView;
use yii\bootstrap4\LinkPager;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\DataProviderInterface */
?>

<?=ListView::widget([
    'dataProvider'=>$dataProvider,
    'pager'=>[
        'class'=>LinkPager::class,
    ],
    'itemView'=>'video-item',
    'layout'=>'<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions'=>[
        'tag'=>FALSE
    ]
])?>
