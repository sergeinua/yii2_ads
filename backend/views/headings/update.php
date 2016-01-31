<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Headings */

$this->title = 'Update Headings: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Headings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="headings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
