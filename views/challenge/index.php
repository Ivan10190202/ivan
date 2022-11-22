<?php

use app\models\Challenge;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\ChallengeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Challenges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="challenge-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Бросить вызов', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_challenge',
            'title',
            'description:ntext',
            'id_tema',
            //'id_chat',
            'id_vicrory',
            //'data_create',
            'data_close',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Challenge $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_challenge' => $model->id_challenge]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
