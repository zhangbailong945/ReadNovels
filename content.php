<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>NOVEL</title>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
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
.shuchu {
	width: 75%;
	padding: 15px;
	color: #1F1F1F;
	font-size: 17px;
	outline: none;
	background: #E5FFFF; 
	border: none;
	margin:3% auto;
	border-radius:4px;
}
.shuchu p {
	color:#048698;
	font-size:20px;
	font-weight:600;
	
}

</style>


</head>
<body>

       
		<div  class="shuchu">
		 <?php  echo '<aa style="color: #999">'.@iconv( "utf-8", "gb2312//IGNORE",'阅读：(内容丢失时，请刷新页面)').'</aa><hr>';?>
		 <?php
include_once('simple_html_dom.php');

$content =  file_get_html(base64_decode($_GET['code']) );
foreach($content->find('div.bookname') as $e)
foreach($content->find('h1') as $e)
    echo '<h1>'.$e->innertext.'</h1><HR>' ;
foreach($content->find('div#content') as $e)
    echo $e->innertext ;
?>
<HR>

	    </div>
	

</body>
</html>