<?php
use app\models\Challenge;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Бросить вызов';
?>
<div class="site-index" style="margin-top:100px;">

   <h1>Приветствуем вас на нашем сайте!</h1>
   <div style=" margin-bottom:50px; margin-top:50px; width: 1000px; height: 130px; background-color: #343A40; text-align: center; border-radius: 50px; padding-top: 30px;" >
   <p style="color: white">У вас есть какой-нибудь спор? Вы очень активный человек? Соперничество для вас лучший мотиватор?</p>
   <p style="color: white">Это отлично! Значит наша площадка вам идеально подойдет! 
   </p>
   </div>
   <h2>Как пользоваться нашим сайтом?</h2>
   <div style="margin-top: 50px;">
   <div style="display: flex; align-items: center;margin-bottom: 20px;">
      <img style="width: 40px; margin-right: 20px;" src="../web/1.png" alt="1"><p style="margin:0" >Для начала вам необходимо <span style="font-weight:bold;">Войти</span> или <span style="font-weight:bold;">Зарегистрироваться</span></p>
   </div>
   <div style="display: flex; align-items: center; margin-bottom: 20px;">
      <img style="width: 40px; margin-right: 20px;" src="../web/2.png" alt="2"><p style="margin:0" >После зайдите на вкладку "Вызовы"</p>
   </div>
   <div style="display: flex; align-items: center;margin-bottom: 20px;">
      <img style="width: 40px; margin-right: 20px;" src="../web/3.png" alt="1"><p style="margin:0" >Перед вами будет список брошенных вызовов. Принимайте любой и действуйте!</p>
   </div>
   <div style="display: flex; align-items: center;margin-bottom: 20px;">
      <img style="width: 40px; margin-right: 20px;" src="../web/4.png" alt="1"><p style="margin:0" >Если вы хотите сами бросить вызов - нажмите кнопку "Бросить вызов"</p>
   </div>
</div>
<p style="margin-top: 50px;">
        <?= Html::a('Начнем?!', ['challenge/index'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
