<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Silsilah;

/* @var $this yii\web\View */
/* @var $model app\models\Silsilah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="silsilah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'sex')->dropDownList([
        'items'=>['l' => 'Laki-laki','p' => 'Perempuan'],
            ])?>
    <?= $form->field($model, 'nama_bapak')->dropDownList(
        ArrayHelper::map(Silsilah::findBySql('select * from silsilah where sex ="l"')->all(),'id','nama')
    )?>
    
    <?= $form->field($model, 'level_silsilah')->dropDownList([
        'items'=>['1' => 'generasi-1','2' => 'generasi-2','3' => 'generasi-3'],
            ])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
