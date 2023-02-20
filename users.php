<?php

function myAutoloader($className)
{
    require_once __DIR__.'\\classes\\'.$className.'.php';
}

spl_autoload_register('myAutoloader');

$user1 = new User('Vita', 'vitaLogin', 'vitaPassword');
$user1->showInfo();

$user2 = new User('Creta', 'cretaLogin', 'cretaPassword');
$user2->showInfo();

$user3 = new User('Motay', 'motayLogin', 'motayPassword');
$user3->showInfo();
echo '<hr>';
echo '<b>Всего обычных пользователей:</b> ';
echo User::$countUser;

$user = new SuperUser('Warta', 'wartaLogin', 'wartaPassword', 'админ');
$user->showInfo();
echo '<hr>';
echo '<b>Всего суперпользователей пользователей:</b> ';
echo SuperUser::$countSuperUser;
echo '<hr>';