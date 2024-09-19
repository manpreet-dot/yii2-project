<?php
namespace app\models;

use Yii;
use app\models\User;
use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $role;

    public function rules()
    {
        return [
            [['name', 'email', 'password', 'role'], 'required'],
            ['email', 'email'],
            ['role', 'in', 'range' => ['admin', 'user', 'manager']],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
            $user->role = $this->role;

            return $user->save();
        }
        return false;
    }
}
