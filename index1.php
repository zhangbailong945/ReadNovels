<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>NOVEL</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style>
a{ color: inherit;}
html,body,div {
    text-decoration: none;
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

.icon {
	padding:15px;
	margin:2% auto;
}
.icon img{
	display:block;
	margin:auto;
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
	color: #999;
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
input.url {
	width: 65%;
	padding: 15px;
	color: #999;
	font-size: 17px;
	outline: none;
	background: #E5FFFF;
	border: none;
	margin:3% auto;
	border-radius:4px;
}
input[type="submit"] {
	width: 10%;
	border: none;
	outline: none;
	padding: 16px 0px;
	cursor: pointer;
	color:#fff;
	background: #27b1ed; 
	font-size:16px;
	margin-left:1%;
    border-radius: 4px;
}
input[type="submit"]:hover {
	background:#09204E;  
	transition:all 0.5s ease-in-out;
} 


</style>
<script>
function key() { 
  if(event.keyCode == 13) { 
   document.getElementById("enter").click(); 
   return false; 
  } 
 } 
function Jump(){
    var link = document.getElementById('link').value; 
    location.href = '.?search=' + link;}
</script>

</head>
<body>
        <div class="icon"> 
			<a href="."><img src="http://cloud.is-best.net/static/images/ttt/novellogo.png" alt="under-construction">
	               </a>	
		</div>
		
       <div class="shuru">
	
						<input type="text" id="link"class="url" placeholder="请输入小说名称"  value="<?php echo $_GET['search']?>" onkeydown ="key()">
						<input type="submit" id="enter"  value="        确定        " onclick="Jump()">
				
		</div>
		<div  class="shuchu">
		  (内容丢失时，请刷新页面或重新输入地址)<br>
		  搜索结果:<br>
		    <HR>
	  <?php
include_once('simple_html_dom.php');
$content =  file_get_html('http://so.00ksw.com/cse/search?s=10977942222484467615&q='.$_GET['search']);
foreach($content->find('div.result-game-item-detail') as $e)
foreach($e->find('a[cpos="title"]') as $e) 
echo '<a href="http://localhost/readnovels/catalog.php?code='.$e->href   .'"target="_blank">'.$e->title.'</a><br>' ;


?>
<HR>

	    </div>
	

</body>
</html>