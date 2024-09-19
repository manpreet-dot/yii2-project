<?php
use yii\helpers\Html;
?>

<h1>Manager Dashboard</h1>

<h2>Projects List</h2>
<ul>
    <?php foreach ($projects as $project): ?>
        <li><?= Html::encode($project->title) ?> - <?= Html::encode($project->description) ?></li>
    <?php endforeach; ?>
</ul>
