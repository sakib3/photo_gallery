<?php
require_once("includes/database.php");
require_once("includes/user.php");


$user= User::find_by_id(1);
/*$user = new User();
$user->id= $record['id'];
$user->username=$record['username'];
$user->password=$record['password'];
$user->first_name = $record['first_name'];
$user->last_name= $record['last_name'];*/
echo $user->full_name();


echo "<hr/>";
$users = User::find_all();
foreach ($users as $user){
    echo "User: ".$user->username."<br/>";
    echo "Name: ".$user->full_name()."<br/><br/>";
}
//6.6
?>
