<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Challenge $model */

$this->title = 'Update Challenge: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Challenges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id_challenge' => $model->id_challenge]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="challenge-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
