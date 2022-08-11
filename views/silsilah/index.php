<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use app\models\Silsilah;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SilsilahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Silsilah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="silsilah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Silsilah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            'header' =>'Nomor'
            ],

            'id',
            'nama',
            [
        'class'=>'\yii\grid\DataColumn',
         'attribute'=>'sex',
         'filter' => ['l' => "Laki-laki", 'p' => "Perempuan"],
                'value' => function ($model) {
                    $data=$model->sex;
                    if(is_null($data)||($data)=='l')
                        {
                            return "Laki-laki";    
                        }else
                        {
                            return "Perempuan";                           
                        }
            }, 
            
     ],
     [
        'class'=>'\yii\grid\DataColumn',
         'attribute'=>'nama_bapak',
         'filter' => ArrayHelper::map(Silsilah::findBySql('select * from silsilah where sex ="l"')->all(),'id','nama'),
                'value' => function ($model) {
                    $data=$model->nama_bapak;
                    if(is_null($data)||($data)==0)
                        {
                            return "masih kosong";    
                        }else
                        {
                        //   return $data;
                         return   $data2=Silsilah::findOne($data)->nama;

                    }
            }, 
            
     ],

     [
        'class'=>'\yii\grid\DataColumn',
         'attribute'=>'level_silsilah',
         
                'value' => function ($model) {
                    $data=$model->level_silsilah;
                    if(is_null($data)||($data)==0)
                        {
                            return "masih kosong";    
                        }else
                        {
                        //   return $data;
                         return  "generasi".' '.$data;

                    }
            }, 
            
     ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
