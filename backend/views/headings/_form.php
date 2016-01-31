<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Headings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="headings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'record_state')
        ->dropDownList(
            \yii\helpers\ArrayHelper::map(\app\models\RecordState::find()->all(), 'id', 'text')
        )
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

   <!--  <!?= $form->field($model, 'parent_id')->textInput() ?> -->


    <?= $form->field($model, 'parent_id')
        ->dropDownList(
            array_merge(
                [''],
                \yii\helpers\ArrayHelper::map(\app\models\Headings::find()->all(), 'id', 'name')
            )
        ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
