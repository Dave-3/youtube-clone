<?php 

namespace common\helpers;

use yii\helpers\Url;

class Html
{
    public static function channelLink($user ,$schema = FALSE) {
        return \yii\helpers\Html::a($user->username,
            Url::to(['/channel/view','username'=> $user->username],$schema)
           ,['class'=>'text-dark']);
    }
}
?>

