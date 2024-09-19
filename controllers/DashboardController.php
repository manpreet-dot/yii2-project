<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Project;

class DashboardController extends Controller
{
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['auth/login']);
        }

        $role = Yii::$app->user->identity->role;

        if ($role === 'admin') {
            $users = User::find()->all();
            return $this->render('index_admin', ['users' => $users]);
        } elseif ($role === 'manager') {
            $projects = Project::find()->all();
            return $this->render('index_manager', ['projects' => $projects]);
        } else {
            throw new \yii\web\ForbiddenHttpException('You are not allowed to access this page.');
        }
    }
}
