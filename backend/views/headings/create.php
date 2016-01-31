<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Headings */

$this->title = 'Create Headings';
$this->params['breadcrumbs'][] = ['label' => 'Headings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
