<?php
use yii\helpers\Html;

$this->title = 'Projects';
?>
<h1><?= Html::encode($this->title) ?></h1>

<p><?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?></p>

<ul>
    <?php foreach ($projects as $project): ?>
        <li>
            <?= Html::encode($project->title) ?> - 
            <?= Html::a('Update', ['update', 'id' => $project->id]) ?> |
            <?= Html::a('Delete', ['delete', 'id' => $project->id], [
                'data' => ['confirm' => 'Are you sure you want to delete this project?', 'method' => 'post'],
            ]) ?>
        </li>
    <?php endforeach; ?>
</ul>
