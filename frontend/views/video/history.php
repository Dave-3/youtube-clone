<?php
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\DataProviderInterface */
?>
<h1>My History</h1>
<?=ListView::widget([
    'dataProvider'=>$dataProvider,
    'itemView'=>'video-item',
    'layout'=>'<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions'=>[
        'tag'=>FALSE
    ]
])?>
