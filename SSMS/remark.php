<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$sid=$_SESSION['aid'];
if(!empty($_POST))
{
    $id = $_POST['id'];
    $remark = $_POST['remark'];
    mysqli_query($set, "UPDATE issue SET remark = '".$_POST['remark']."' WHERE id='".$_POST['id']."'");
    header("location:issue.php");
}
?>