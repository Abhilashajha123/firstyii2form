<?php

namespace app\controllers;
use yii\web\Controller;

class FirstController extends Controller
{
    public function actionAbhi()
    {
        // $this->layout=false;
        return $this->render('index');
    }

}