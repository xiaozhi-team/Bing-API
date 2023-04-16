<!-- 
By xiaozhiboy
gitee:https://gitee.com/xiaozhi_boy/bingIMG/
QQ:2450135751
-->
<?php
header('Access-Control-Allow-Origin:*'); // *代表允许任何网址请求
header('Content-type: application/json');
$bingurl = "http://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1";
$Pinfo = json_decode(file_get_contents($bingurl));
$img = $Pinfo->{"images"}[0]->{"url"};
$copyright = $Pinfo->{"images"}[0]->{"copyright"};
$imgurl = "http://cn.bing.com".$img;
if(!$Pinfo == ' '){
$value = array("code"=>201,"msg"=>"查询失败","tips"=>"请前往https://gitee.com/xiaozhi_boy/bingIMG/查看是否有更新");  
exit();
}
$value = array("code"=>200,"msg"=>"查询成功","imgurl"=>$imgurl,"imgcopyright"=>$copyright);  
echo json(null,$value);
function json($code,$name,$msg=false) {
	if(is_array($name)) {
		$foundation=array(
				'code'=>$code,
				);
		$array=array_merge($foundation,$name);
	} else {
		header('Content-type: application/json');
		$array=array(
				'code'=>$code,
				$name=>$msg,
				);
	}
	return json_encode($array,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}
