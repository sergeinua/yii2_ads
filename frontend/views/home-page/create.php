<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HomePage */

$this->title = 'Create Home Page';
$this->params['breadcrumbs'][] = ['label' => 'Home Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
