<?php
require_once __DIR__."/../../controller/MemberController.php";

$user_name=$_GET['user_name'];
$member = new MemberController();
$member->RejectRequest($user_name);
?>