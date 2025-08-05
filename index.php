<?php
include("classes/User.php");

$user = new User("localhost", "root", "", "authoop");

$user->create("gweh", "gweh", "gweh");
var_dump($user->get());