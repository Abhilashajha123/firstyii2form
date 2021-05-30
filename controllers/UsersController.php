<?php

namespace app\controllers;
use app\models\Users;
class UsersController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $user=Users::find()->all();
        
        return $this->renderPartial('index',['user'=>$user]);
    }

}