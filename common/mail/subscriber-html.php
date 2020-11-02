<?php 

use common\helpers\Html;

/* @var $channel common\models\User */
/* @var $user common\models\User */
?>

<p>Hello <?=$channel->username ?></p>
<p>User <?= Html::channelLink($user, TRUE)?> has subscribed to you</p>
<p>YouTube Team</p>
