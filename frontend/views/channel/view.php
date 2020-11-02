<?php 

use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $this \yii\web\View' */
/* @var $channel common\models\User */
/* @var $dataProvider ActiveDataProvider */
?>
<div class="jumbotron">
  <h1 class="display-4"><?=$channel->username?></h1>
  <hr class="my-4">
  <?php Pjax::begin()?>
  	<?=$this->render('_subscribe',[
  	    'channel'=>$channel
  	])?>
   <?php Pjax::end()?>
</div>
<?=ListView::widget([
    'dataProvider'=>$dataProvider,
    'itemView'=>'@frontend/views/video/video-item',
    'layout'=>'<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions'=>[
        'tag'=>FALSE
    ]
])?>