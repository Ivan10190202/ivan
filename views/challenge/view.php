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
        <?= Html::a('Update', ['update', 'id_challenge' => $model->id_challenge], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_challenge' => $model->id_challenge], [
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
            'id_challenge',
            'title',
            'description:ntext',
            'id_tema',
            'id_chat',
            'id_vicrory',
            'data_create',
            'data_close',
        ],
    ]) ?>

</div>
