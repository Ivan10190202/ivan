<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Challenge $model */

$this->title = 'Создать вызов';
$this->params['breadcrumbs'][] = ['label' => 'Challenges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="challenge-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
