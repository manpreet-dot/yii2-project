<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\IdentityInterface;

class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // Implement if needed
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        // Implement if needed
    }

    public function validateAuthKey($authKey)
    {
        // Implement if needed
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }
}
