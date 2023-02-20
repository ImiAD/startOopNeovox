<?php

class SuperUser extends User
{
    static public int $countSuperUser = 0;
    public string $role;

    public function __construct(string $name, string $login, string $password, string $role)
    {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        ++self::$countSuperUser;
    }

    public function showInfo(): void
    {
        parent::showInfo();
        echo '<b>Роль пользователя:</b> '.$this->role.'<br>';
    }
}