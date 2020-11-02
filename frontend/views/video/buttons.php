<?php 
use yii\helpers\Url;

/* @var $model common\models\Videos */


?>
		<a href="<?=Url::to(['/video/like','id'=>$model->video_id])?>" 
       		 class="btn btn-sm <?=$model->isLikedBy(Yii::$app->user->id)?'btn-outline-primary':'btn-outline-secondary'?>" 
       		 data-method="post" data-pjax="1">
       		 <i class="fas fa-thumbs-up"></i> <?=$model->getLikes()->count()?>
       		 </a>
       		 <a href="<?=Url::to(['/video/dis-like','id'=>$model->video_id])?>" 
       		 class="btn btn-sm <?=$model->isDisLikedBy(Yii::$app->user->id)?'btn-outline-primary':'btn-outline-secondary'?>" data-method="post" data-pjax="1">
       		 <i class="fas fa-thumbs-down"></i><?=$model->getDisLikes()->count()?>
       </a>