<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
<h1><?= Html::encode($this->title) ?></h1>
<p>Чтобы продолжить пользоваться системой вы должны быть зарегистрироваться:</p>
<div class="row">
<div class="col-lg-5">
<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-group">
<?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
</div>
<?php ActiveForm::end(); ?>
</div>
</div>
</div>
