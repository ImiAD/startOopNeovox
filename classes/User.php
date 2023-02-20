<?php
class User
{
    static public int $countUser = 0;
    public string $name;
    public string $login;
    public string $password;

    public function __construct(string $name, string $login, string $password)
    {
        $this->name     = $name;
        $this->login    = $login;
        $this->password = $password;
        ++self::$countUser;
    }

    public function showInfo(): void
    {
        echo '<hr>';
        echo '<b> Имя пользователя:</b> '.$this->name.'<br>';
        echo '<b> Логин пользователя:</b> '.$this->login.'<br>';
        echo '<b> Пароль пользователя:</b> '.$this->password.'<br>';
    }
//    public function __destruct()
//    {
//        echo '<br><b>Удаление пользователя:</b> '.$this->login.'<b>!</b>'.'<hr>';
//    }
}