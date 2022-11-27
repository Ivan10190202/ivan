<?php

use app\models\Challenge;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\DetailView;

/** @var app\models\Challenge $model */
/** @var yii\web\View $this */
/** @var app\models\ChallengeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Список брошенных вызовов:';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="challenge-index" style="display:flex;">

    <h1><?= Html::encode($this->title) ?></h1>

    <p style="margin-left:100px; margin-top:9px;">
        <?= Html::a('Бросить вызов', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
<div>
    <?php foreach ($challenge as $one):?>

        <div style="width:100%; border: 5px solid orange;border-radius:20px; padding: 30px; margin-top:50px;" >
            <h2 style="margin-bottom:40px;"><?=$one->title?></h2>
            <p style="font-weight:bold; margin: 0;">Описание:</p>
            <p style="margin: 0; margin-bottom:10px;"><?=$one->description?></p>
            <p style="font-weight:bold; margin: 0; ">Дедлайн:</p>
            <p style="margin: 0; margin-bottom:10px;"><?=$one->data_close?></p>
            <p style="font-weight:bold; margin: 0;">Дата создания:</p>
            <p style="margin: 0;margin-bottom:10px;"><?=$one->data_create?></p>

            <div style="display: flex;">
            <a style="margin-right:30px;" class="btn btn-outline-success" href="http://ivan/web/index.php?r=challenge%2Findex" title="delete" aria-label="Delete"
                       data-pjax="0" data-confirm="Вы действительно хотите принять вызов: <?=$one->title?>?" data-method="post">Принять вызов</a>
            <p style="margin:0;">
                <?= Html::a('Удалить', ['index', 'id_challenge' => $model->id_challenge], [
                'class' => 'btn btn-outline-danger',
                'data' => [
                    'confirm' => 'Вы действительно хотите удалить?',
                    'method' => 'post',
                ],
                ]) ?>
            </p>
            </div>
        </div>

    <?php endforeach; ?>
    
</div>
