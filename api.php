<?php
/*
 *请求接口文件
 *author：
 */
$username=$_POST["username"];
$password=$_POST["password"];
if($username==null)exit('{"code":0,"msg":"请输入账号"}');
if($password==null)exit('{"code":0,"msg":"请输入密码"}');
$urls="http://16dwz.com/API/kangle.php?ip=1.1.1.1&key=安全码&id=1&name=$username&pass=$password";
/**
ip为服务器ip
key为康乐安全码
id为康乐产品id
以上三项可以更改
**/
$curl=curl_init();//初始化curl
$ua='Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com)';
curl_setopt($curl, CURLOPT_URL, $urls);//访问的url
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//以文件流显示
curl_setopt($curl, CURLOPT_USERAGENT, $ua);//百度蜘蛛
curl_setopt($curl, CURLOPT_TIMEOUT, 20);//防止死循环
$result=curl_exec($curl);//返回结果
curl_close($curl);//关闭curl
$status = json_decode($result,true);
$jsonData = array(
            'code' => $status ['code'],
            'msg' => $status ['msg'],
            'login' => $status ['login'],
            'username' => $username,
            'tg' => '<a href="http://baidu.cn" style="color:red">1111</a>',
            'password' => $password
        );
         exit(json_encode($jsonData));
?>