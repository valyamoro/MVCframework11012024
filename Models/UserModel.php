<?php

namespace app\Models;

use app\core\Model;

class UserModel extends Model
{
    protected const TABLE_NAME = 'users';

    protected string $id;
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected string $password;

    public function getId(): string
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

}
