
<?php

$menghaoran = $_POST["menghaoran"];//获取用户
$content = $_POST["content"];//获取评论内容
$time = date("Y-m-d H-i-s");//获取当前时间
echo "$time";

require "DBDA.class.php";
$db = new DBDA();
$sql = "insert into pinglun values('','{$menghaoran}','{$content}','{$time}')";
$arr=$db->query($sql,0);
if($arr)
{
    header("location:pinglun.php");    //返回主页面
}
?>

<?php
$db = new DBDA();
$sql= "select * from pinglun";
$arr = $db->query($sql);
foreach($arr as $v)//遍历出评论表中的数据
{echo"<tr>
        <td>{$v[1]}</td><br>
        <td>{$v[2]}</td><br>
        <td>{$v[3]}</td><br>
        <form action='huichuli.php?id={$v[0]}' method='post'><textarea name='coment' ></textarea>
            <input type='submit' name='hui' value='回复'/>
        </form>
        <tr>";//回复也要遍历出来，而且要用表单包裹起来，因为要用到id

$dc = new DBDA();
$sql = "select * from huifu where jieshouid={$v[0]}";//找到接收者的id
$arr = $dc->query($sql);
foreach($arr as $v)
{
    echo"
    <div style='color:red'>{$v[2]}</div>
    <div style='color:red'>{$v[3]}</div>
    <div style='color:red'>{$v[4]}</div>";
}

}

?>
