<?php
function checkAuth(string $login, string $password): bool
{

    //var_dump($login);
    $users = require __DIR__ . '/data/db.php';
    
    //var_dump($users);
    foreach ($users as $user) {
        if ($user['login'] === $login 
            && $user['password'] === $password
        ) {
            return true;
        }
    }

    return false;
}

function getUserLogin(): ?string
{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCookie = $_COOKIE['password'] ?? '';

    if (checkAuth($loginFromCookie, $passwordFromCookie)) {
        return $loginFromCookie;
    }

    return null;
}