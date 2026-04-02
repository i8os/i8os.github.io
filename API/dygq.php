<?php
$file=dirname(__FILE__)."/asset/dygq.txt";
if(!file_exists($file))die('音乐文件不存在。');
$musicLinks=array_filter(array_map('trim',file($file)));
$music=$musicLinks[array_rand($musicLinks)];

if(isset($_GET['type'])&&$_GET['type']==='json'){
header('Content-Type:application/json');
echo json_encode([
"code"=>200,
"music"=>$music,
"tips"=>"夏风云API"
],JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
}else{
header("Location:$music");
exit;
}
?>
