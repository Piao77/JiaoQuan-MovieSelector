<?php
$id = $_GET["id"];//将点击回复的评论id传过来
$times = date("Y-m-d H-i-s");//获取当前时间
echo "$times";
$coment = $_POST["coment"];
$libai = "libai";//发送人默认值
require "DBDA.class.php";
$db = new DBDA();
$sql = "insert into huifu values('','{$id}','{$libai}','{$times}','{$coment}')";//将数据添加到数据库中
$arr=$db->query($sql,0);
if($arr)
{
    header("location:pinglun.php");    //回到主页面
}