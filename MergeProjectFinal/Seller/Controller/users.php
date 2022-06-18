<?php
function getAllUsers()
{
    return json_decode(file_get_contents("../Data/users.json"), true);
}

function getUser($id) {
    $users = getAllUsers();
    return $users[$id] ?? false;
}

function findUser($username) {
    $users = getAllUsers();
    foreach ($users as $user) {
        if ($username === $user['First_Name'])
            return $user;
    }
    return false;
}
?>