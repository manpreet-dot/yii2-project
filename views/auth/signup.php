<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="site-signup">
    <h1><?= Html::encode('Signup') ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'role')->dropDownList(['admin' => 'Admin', 'user' => 'User', 'manager' => 'Manager']) ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
