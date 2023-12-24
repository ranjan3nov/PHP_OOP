<?php
class Users
{

    function fetchUser($id)
    {
        $db = new Database();
        $db->selectQuery($id, $tableName);
    }
    function deleteUser($id)
    {
    }
}

$user1 = new Users();
$user1->fetchUser(101);
