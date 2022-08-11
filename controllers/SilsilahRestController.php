<?php

namespace app\controllers;
use yii\rest\ActiveController;

class SilsilahRestController extends ActiveController
{
   public $modelClass='app\models\Silsilah';
    /*
    public function actionIndex()
    {
      $silsilah= \app\models\Silsilah::find()->all;
        return ['results'=>$silsilah,];
    } */

}
