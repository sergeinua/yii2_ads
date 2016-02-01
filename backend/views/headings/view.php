<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Headings */

$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Headings', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headings-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'record_state',
                'value' => $model->record_state == 1 ? 'Активно':'Неактивно',
            ],
            'name',
            [
                'attribute' => 'parent_id',
                'value' => $model->parent_id != null ?
                    $model->findOne($model->parent_id)->name : '',
            ],
        ],
    ]) ?>

</div>
