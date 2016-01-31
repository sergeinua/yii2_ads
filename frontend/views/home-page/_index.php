<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HomePageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-page-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Home Page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'file_name',
            'position',
            'record_state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
