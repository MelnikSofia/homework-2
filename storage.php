<?php
$users = [];
for ($i = 1; $i <= 100; $i++)
{
    $users["user$i"] = "password$i";
}
echo json_encode($users);