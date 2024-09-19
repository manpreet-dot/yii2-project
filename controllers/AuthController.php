<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\LoginForm;
use app\models\SignupForm;

class AuthController extends Controller
{
    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['site/index']);
        }

        return $this->render('login', ['model' => $model]);
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            return $this->redirect(['auth/login']);
        }

        return $this->render('signup', ['model' => $model]);
    }
}
