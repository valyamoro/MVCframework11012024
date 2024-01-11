<?php

namespace app\Models;

use app\core\Model;

class UserModel extends Model
{
    public string $id;
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;

    protected const TABLE_NAME = 'users';
}