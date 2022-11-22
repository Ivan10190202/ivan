<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Challenge $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="challenge-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_tema')->dropDownList(['Спорт','Развлечение','Учеба','Бизнес','Другое']) ?>

    <?= $form->field($model, 'id_vicrory')->textInput() ?>


    <?= $form->field($model, 'data_close')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
