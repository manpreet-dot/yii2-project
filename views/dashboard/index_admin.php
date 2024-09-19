<?php
use yii\helpers\Html;
?>

<h1>Admin Dashboard</h1>

<h2>Users List</h2>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?= Html::encode($user->name) ?> (<?= Html::encode($user->email) ?>)</li>
    <?php endforeach; ?>
</ul>
