<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $latestVideo \common\models\Videos*/
/* @var $numberofViews integer*/
/* @var $numberofSubscribers integer*/
/* @var $subscribers \common\models\Subscriber[]*/

$this->title = 'My Yii Application';
?>
<div class="site-index d-flex">
	<div class="card m-2" style="width: 14rem;">
	<?php if($latestVideo):?>
      <div class="embed-responsive embed-responsive-16by9 mb-3"">
              <video class="embed-responsive-item" 
              	poster="<?= $latestVideo->getThumbnailLink()?>""
              	src="<?= $latestVideo->getVideoLink()?>" controls>
              </video>
 	 </div>
      <div class="card-body">
        <h5 class="card-title"><?= $latestVideo->title?></h5>
        <p class="card-text">
        	Likes : <?= $latestVideo->getLikes()->count()?><br>
        	Views : <?= $latestVideo->getViews()->count()?><br>
        </p>
        <a href="<?=Url::to(['/videos/update',
            'id'=>$latestVideo->video_id])?>" 
            class="btn btn-primary">Edit
         </a>
      </div>
    </div>
    <?php else :?>
    	<div class="card-body">
    		You don't have uploaded videos yet
    	</div>
    <?php endif;?>
    <div class="card m-2" style="width: 14rem;">
      <div class="card-body">
        <h5 class="card-title">Total Views</h5>
        <p class="card-text" style="font-size: 46px">
        	<?= $numberofViews?>
        </p>
      </div>
    </div>
    
    <div class="card m-2" style="width: 14rem;">
      <div class="card-body">
        <h5 class="card-title">Total Subscribers</h5>
        <p class="card-text" style="font-size: 46px">
        	<?= $numberofSubscribers?>
        </p>
      </div>
    </div>
    
     <div class="card m-2" style="width: 14rem;">
      <div class="card-body">
        <h5 class="card-title">Latest Subscribers</h5>
        <?php foreach ($subscribers as $subscriber):?>
        	<div>
        		<?= $subscriber->user->username?>
        	</div>
        <?php endforeach;?>
        <p class="card-text" style="font-size: 46px">
        </p>
      </div>
    </div>
  
</div>
