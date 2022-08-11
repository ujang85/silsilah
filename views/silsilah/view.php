<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Silsilah */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Silsilah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="silsilah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('kembali',['index'],
                    ['title'=> 'Kembali','class'=>'btn btn-info']) ?>
         <?= Html::a('Tambah Data',['create'],
                    ['title'=> 'Tambah Data','class'=>'btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
        //    'sex',
        [
         'attribute'=>'sex',
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
        ],
    ]) ?>

</div>
