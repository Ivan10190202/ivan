<?php
use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = 'Личный кабинет';
?>
<div class="user-index">
    <h1 style="margin-top: 100px;" ><?= Html::encode($this->title) ?></h1>
    <div style="padding: 30px; width: 100%; background-color: #343A40; border-radius: 30px; margin-top:60px;">
        <p style=" color: white; font-size: 20px; margin-bottom: 0px;">Ваш ник: </p>
        <h3 style="color: white; font-size: 28px;"><?=Yii::$app->user->identity->username;?></h3>
        <p style="color: white; font-size: 20px; margin-top: 30px; margin-bottom: 0px;">Почта: </p>
        <h3 style="color: white; font-size: 28px;  margin-bottom: 30px;"><?=Yii::$app->user->identity->email;?></h3>
        <p style="color: white; font-size: 20px; margin-top: 30px; margin-bottom: 0px;">Ваш зашифрованный пароль: </p>
        <h3 style="color: white; font-size: 28px; width:100%;"><?=Yii::$app->user->identity->password_hash;?></h3>    
    </div>
</div>