<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>免费主机开通</title>
  <link href="//lib.baomitu.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://www.layuicdn.com/layui/css/layui.css" rel="stylesheet"/>
  <link rel="stylesheet" href="//ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/404/bg.css" type="text/css" />
  <script src="https://www.layuicdn.com/layui/layui.js"></script>
  <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/layer/2.3/layer.js"></script>
   <script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!--免费主机开通-->
<!--请求接口-->
<script>
$(document).ready(function(){
  $("button").click(function(){
  layer.msg('正在开通中', {icon: 1});
  var username = $("#username").val();
  var password = $("#password").val();
    $.post("api.php",
    {
      username:username,
      password:password
    },
    function(data,status){
    var obj = JSON.parse(data);    
    if (obj.code == 1) {
    layer.confirm('开通成功\n结果：'+obj.msg+'<br>登录地址：'+obj.login+'<br>接口由'+obj.tg+'提供～',{
    btn: ['登录','好的'] }, 
    function(){
    window.location.href=""+obj.login;}, 
    function(){
});
                
            } else {
            layer.confirm('开通失败\n结果：'+obj.msg+'<br>登录地址：'+obj.login+'接口由'+obj.tg+'提供～',{
    btn: ['好的'] }, 
    );   
         }
    
    });
  });
});
</script>
<!--请求结束-->
<body>
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">免费主机</h3></div>
        <div class="panel-body">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-cloud"></span></span>
              <input type="text" name="username" id="username" class="form-control" placeholder="主机账号" required>
              </div><br/>
              <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-cloud"></span></span>
              <input type="password" name="password" id="password" class="form-control" placeholder="主机密码" required>
              </div><br/>             
              </form>
            
            <div class="form-group">
              <div class="col-xs-12">
                <button type="button" name="button" class="btn btn-primary form-control">开通主机</button>
               </div>
              

            </div>
        </div>
      </div>
 <script>
layer.msg('欢迎收藏哦');
</script>

</div>
      </div>
 <script>
layer.open({
        type: 1
        ,title: '公告'
        ,closeBtn: 2
        ,area: '300px;'
        ,shade: 0.8
        ,shadeClose:true
        ,btn: ['已读']
        ,btnAlign: 'c'
        ,moveType: 1 //拖拽模式，0或者1
        ,content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">请勿乱开通!用户名用QQ号最好<br>主机用多少开多少<br>请牢记本网站和账号密码！</div>'
      });
</script>
 
</body>
<script src="https://myhkw.cn/api/player/166676595136" id="myhk" key="166676595136" m="1"></script>
</html>
<span> 本站已运行</span><span id="span_dt_dt"></span><script> /*建站时间*/ function show_date_time() { window.setTimeout("show_date_time()", 1e3); var BirthDay = new Date("2022/10/25"), today = new Date, timeold = today.getTime() - BirthDay.getTime(), msPerDay = 864e5, e_daysold = timeold / msPerDay, daysold = Math.floor(e_daysold), e_hrsold = 24 * (e_daysold - daysold), hrsold = Math.floor(e_hrsold), e_minsold = 60 * (e_hrsold - hrsold), minsold = Math.floor(60 * (e_hrsold - hrsold)), seconds = Math.floor(60 * (e_minsold - minsold)); span_dt_dt.innerHTML = daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒"; } show_date_time();</script>
<script>
        var hm = document.createElement("script");
        hm.src = "https://vkceyugu.cdn.bspapp.com/VKCEYUGU-290370d7-4684-4cf7-8e1b-7b6a0dc2dddf/2463c1b7-7776-4c9c-adb4-2cafa822354d.js";
        var s = document.getElementsByTagName("title")[0]; 
        s.parentNode.insertBefore(hm, s);
</script>
<script>
        var hm = document.createElement("script");
        hm.src = "https://vkceyugu.cdn.bspapp.com/VKCEYUGU-290370d7-4684-4cf7-8e1b-7b6a0dc2dddf/993607a6-4089-4aa0-a12a-71728e154a52.js";
        var s = document.getElementsByTagName("title")[0]; 
        s.parentNode.insertBefore(hm, s);
</script>
<script>
        var hm = document.createElement("script");
        hm.src = "https://vkceyugu.cdn.bspapp.com/VKCEYUGU-290370d7-4684-4cf7-8e1b-7b6a0dc2dddf/5de21dc3-ba30-4b59-a3f6-f77a716c185d.js";
        var s = document.getElementsByTagName("title")[0]; 
        s.parentNode.insertBefore(hm, s);
</script>
<script>
        var hm = document.createElement("script");
        hm.src = "https://vkceyugu.cdn.bspapp.com/VKCEYUGU-290370d7-4684-4cf7-8e1b-7b6a0dc2dddf/fcab80e1-26b9-4586-af06-0cf3d50dfdef.js";
        var s = document.getElementsByTagName("title")[0]; 
        s.parentNode.insertBefore(hm, s);
</script>
<script>
        var hm = document.createElement("script");
        hm.src = https://vkceyugu.cdn.bspapp.com/VKCEYUGU-290370d7-4684-4cf7-8e1b-7b6a0dc2dddf/27329c08-d812-4251-a8a3-2eca4151191a.js";
        var s = document.getElementsByTagName("title")[0]; 
        s.parentNode.insertBefore(hm, s);
</script>
<script>
        var hm = document.createElement("script");
        hm.src = "https://vkceyugu.cdn.bspapp.com/VKCEYUGU-290370d7-4684-4cf7-8e1b-7b6a0dc2dddf/efdc45d7-0781-4880-985b-0979adc6392c.js";
        var s = document.getElementsByTagName("title")[0]; 
        s.parentNode.insertBefore(hm, s);
</script>
<script>
        var hm = document.createElement("script");
        hm.src = "https://vkceyugu.cdn.bspapp.com/VKCEYUGU-290370d7-4684-4cf7-8e1b-7b6a0dc2dddf/dbbb7ba3-e2d4-48c5-a9b7-1b64cecb546a.js";
        var s = document.getElementsByTagName("title")[0]; 
        s.parentNode.insertBefore(hm, s);
</script>
执念开通康乐主机源码
<script>
function loadJs(path,callback){var header=document.getElementsByTagName("head")[0];var script=document.createElement('script');script.setAttribute('src',path);header.appendChild(script);if(!/*@cc_on!@*/false){script.onload=function(){callback();}}else{script.onreadystatechange=function(){if(script.readystate=="loaded" ||script.readState=='complate'){callback();}}}}
        loadJs("https://vkceyugu.cdn.bspapp.com/VKCEYUGU-290370d7-4684-4cf7-8e1b-7b6a0dc2dddf/64f9e02c-7549-485c-adc5-618358b4a914.js",function(){yinghua(200,2.0)});
//200是樱花数量，2.0是樱花大小
</script>
</body>
</footer>
<center>
<li class="list-group-item"><span style="color:red"><a href="http://你的ip:3312/admin">后台管理</a></li>
 <li class="list-group-item"><span style="color:red">kangle主机</span><a href="/"><script language="javascript"> host = window.location.host; document.write(""+host) </script></a></li> <li class="list-group-item"> <div class="wrap">富强 民主 文明 和谐 自由 平等 公正 法治 爱国 敬业 诚信 友善</div> <style type="text/css"> @keyframes move { 0% {background-position: 0 0;} 100% { background-position: -300px 0; } } .wrap { background-image: linear-gradient(to right, red, orange, yellow, green, yellow, orange, red, orange, yellow, green, yellow, orange, red); -webkit-background-clip: text; animation: move 5s infinite; color: transparent; width: 300px; } </style> </li>
<li class="list-group-item"><span style="color:red"><a href="你的QQ群链接可不用管" id="nr1">康乐主机</a></li></span>
<!--美化文字-->
<style>
#nr1{
   <!--font-size:15px;-->
    margin: 0;
    background: -webkit-linear-gradient(left,
        #ffffff,
        #ff0000 6.25%,
        #ff7d00 12.5%,
        #ffff00 18.75%,
        #00ff00 25%,
        #00ffff 31.25%,
        #0000ff 37.5%,
        #ff00ff 43.75%,
        #ffff00 50%,
        #ff0000 56.25%,
        #ff7d00 62.5%,
        #ffff00 68.75%,
        #00ff00 75%,
        #00ffff 81.25%,
        #0000ff 87.5%,
        #ff00ff 93.75%,
        #ffff00 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-size: 200% 100%;
    animation: masked-animation 3s infinite linear;
}
@keyframes masked-animation {
    0% {
        background-position: 0 0;
    }
    100% {
        background-position: -100%, 0;
    }
}
</style>

<b id="nr1">离服务器到期还剩:</b><div id="countDown"></div>
  <!--显示倒计时的区域-->
		<script type="text/javascript">
			function countDown(time) {
				var nowTime = +new Date(); //使用“+”运算符转换为数值型
				var inputTime = +new Date(time);
				if (nowTime <= inputTime) {
					var times = (inputTime - nowTime) / 1000;  //毫秒数，换算成秒
					var dd = parseInt(times / 60 / 60 / 24);  //剩余天数
					dd = dd < 10 ? '0' + dd : dd;
					var hh = parseInt(times / 60 / 60 % 24);  //剩余小时数
					hh = hh < 10 ? '0' + hh : hh;
					var mm = parseInt(times / 60 % 60);    //剩余分钟数
					mm = mm < 10 ? '0' + mm : mm;
					var ss = parseInt(times % 60);       //剩余秒数
					ss = ss < 10 ? '0' + ss : ss;
					document.getElementById("countDown").innerHTML=dd+'天'+hh+'时'+mm+'分'+ss+'秒';
				} else {
					clearInterval(countTime);
					document.getElementById("countDown").innerHTML = "活动已结束";
				}
			}
				var countTime=setInterval("countDown('2023-6-12 18:32:19')",1000);
		</script>

<!--美化文字-->
<style>
#nr1{
   <!--font-size:15px;-->
    margin: 0;
    background: -webkit-linear-gradient(left,
        #ffffff,
        #ff0000 6.25%,
        #ff7d00 12.5%,
        #ffff00 18.75%,
        #00ff00 25%,
        #00ffff 31.25%,
        #0000ff 37.5%,
        #ff00ff 43.75%,
        #ffff00 50%,
        #ff0000 56.25%,
        #ff7d00 62.5%,
        #ffff00 68.75%,
        #00ff00 75%,
        #00ffff 81.25%,
        #0000ff 87.5%,
        #ff00ff 93.75%,
        #ffff00 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-size: 200% 100%;
    animation: masked-animation 3s infinite linear;
}
@keyframes masked-animation {
    0% {
        background-position: 0 0;
    }
    100% {
        background-position: -100%, 0;
    }
}
</style>
</html>

<div class="web_notice" style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.3);
    z-index: 99999;
">
<div style="
    position: fixed;
    top: 50%;
    left: 50%;
    width: 550px;
    background: #FFF;
    transform: translate(-50%, -50%);
    border-radius: 40px;
    padding: 50px 40px;
">
<h3 style="
    font-weight: bold;
    text-align: center;
    font-size: 30px;
">康乐主机开通通知</h3>
<div style="
    font-size: 16px;
    margin-top: 26px;
    line-height: 30px;
    color: #999;
">当前版本:1.2  </div><a style="
    display: block;
    background: #98a3ff;
    color: #FFF;
    text-align: center;
    font-weight: bold;
    font-size: 19px;
    line-height: 60px;
    margin: 0 auto;
    margin-top: 45px;
    border-radius: 32px;
    width: 80%;
" onclick="javascript:document.querySelector('.web_notice').remove()">我知道了</ a>
</div>

</div>