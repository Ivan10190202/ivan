<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Challenge $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Challenges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="challenge-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id_challenge' => $model->id_challenge], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_challenge' => $model->id_challenge], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'description:ntext',
            'data_create',
            'data_close',
        ],
    ]) ?>

<p style="margin-top: 50px;">
        <?= Html::a('Сохранить', ['index'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
