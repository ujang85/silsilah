<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Silsilah */

$this->title = 'Create Silsilah';
$this->params['breadcrumbs'][] = ['label' => 'Silsilahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="silsilah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
