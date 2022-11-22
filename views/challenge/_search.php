<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ChallengeSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="challenge-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_challenge') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'id_tema') ?>

    <?= $form->field($model, 'id_chat') ?>

    <?php // echo $form->field($model, 'id_vicrory') ?>

    <?php // echo $form->field($model, 'data_create') ?>

    <?php // echo $form->field($model, 'data_close') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
