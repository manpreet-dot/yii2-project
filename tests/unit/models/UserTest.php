<?php

namespace tests\unit\models;

use app\models\User;

class UserTest extends \Codeception\Test\Unit
{
    public function testFindUserById()
    {
        verify($user = User::findIdentity(100))->notEmpty();
        verify($user->name)->equals('admin');

        verify(User::findIdentity(999))->empty();
    }

    public function testFindUserByAccessToken()
    {
        verify($user = User::findIdentityByAccessToken('100-token'))->notEmpty();
        verify($user->name)->equals('admin');

        verify(User::findIdentityByAccessToken('non-existing'))->empty();        
    }

    public function testFindUserByname()
    {
        verify($user = User::findByName('admin'))->notEmpty();
        verify(User::findByName('not-admin'))->empty();
    }

    /**
     * @depends testFindUserByname
     */
    public function testValidateUser()
    {
        $user = User::findByName('admin');
        verify($user->validateAuthKey('test100key'))->notEmpty();
        verify($user->validateAuthKey('test102key'))->empty();

        verify($user->validatePassword('admin'))->notEmpty();
        verify($user->validatePassword('123456'))->empty();        
    }

}
