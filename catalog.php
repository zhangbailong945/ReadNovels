<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>NOVEL</title>
<meta http-equiv="Content-Type" content="text/html;gb2312">
<style>
a{ color: inherit;}
html,body,div {
	margin:0;
	padding:0;
	border:0;
	font-size:100%;
	font:inherit;
	vertical-align:baseline;
}




body {
	margin:0;
	padding:0;


	background:url(http://ww1.sinaimg.cn/mw690/006Bo8Q9jw1faico53u7mj31kw0zk777.jpg) no-repeat;
	font-family: 'Tahoma', sans-serif;
	background-size:100% 100%;
	background-attachment: fixed;
    background-position: center;
    
}


.shuru {
	text-align:center;
	margin:2% auto;
}
.shuru p {
	color:#048698;
	font-size:20px;
	font-weight:600;
	
}

.shuchu{
    width: 100%;
    padding: 15px;
	color: #4A4A4A;
	font-size: 17px;
	outline: none;
	background: #E5FFFF; 
	border: none;
	margin:3% auto;
	border-radius:4px;
	float:left;}
.shuchu li{	
    float:left;
   	width:33%;
    height:50px;
}
.shuchu p {
    
	color:#048698;
	font-size:20px;
	font-weight:600;
	
}


</style>


</head>
<body>

        
		<div  style="	width: 75%;margin:0 auto;">
		    <div  class="shuchu">
		        <?php  echo '<aa style="color: #999">'.@iconv( "utf-8", "gb2312//IGNORE",'阅读：(内容丢失时，请刷新页面)').'</aa><hr>';?>

<?php
$url=base64_decode($_GET['code']) ;
include_once('simple_html_dom.php');
$content =  file_get_html($url);
foreach($content->find('div#info') as $title)
foreach($title->find('h1') as $title)
echo '<h1 style="color: #1F1F1F">'.$title->innertext.'</h1><HR>';
foreach($content->find('dd') as $e)
foreach($e->find('a') as $a)
echo '<li><a href="http://localhost/readnovels/content.php?code='.base64_encode($url.$a->href)   .'"target="_blank">'.$a->innertext.'</a></li>' ;  
?>
	    </div></div>
	

</body>
</html>