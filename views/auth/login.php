<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="site-login">
    <h1><?= Html::encode('Login') ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
                </div>
                <a href="index.php?r=auth/signup">Signup</a>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
