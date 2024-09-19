<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = 'Update Project: ' . $model->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<?= $this->render('_form', ['model' => $model]) ?>
