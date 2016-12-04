<?php

class NovelDirectory{
                
	  public function getDirectory($url)
	  {

	      $ch=curl_init();
	
	      curl_setopt($ch,CURLOPT_URL,$url);
	      
	      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

	      curl_setopt($ch,CURLOPT_HEADER,0);
	
	      $output=curl_exec($ch);

	      curl_close($ch);
	      return $output;
	  }
}

$obj=new NovelDirectory();
$url="http://www.20xs.cc/dingdian/0_296/";
$directoryHtml=$obj->getDirectory($url);

$directoryText=array();
$matchRegD="/<div class=\"article_texttitleb\">(.*)<\/li><\/ul>/";

if(preg_match($matchRegD,$directoryHtml,$matches))
{

   $directoryHtml=$matches[1];
}
$directoryHtml=str_replace('<script>yuntujianssa();</script>','',$directoryHtml);

$directoryHtml=$directoryHtml.'</li>';

$directoryList=array();

if(preg_match_all('/<a +href="([^"]*)">(.*)<\/a>/iU',$directoryHtml,$matches))
{
	for($j=0;$j<count($matches[2]);$j++)
	{
	   $ahref=$matches[1][$j];
	   $atext=$matches[2][$j];
	   //转码字符串为utf-8，gbk输出为null
	   $atext=iconv('gbk','utf-8',$atext);
       $list=array('link'=>$ahref,'atext'=>$atext);
       $directoryList[]=$list;
       unset($list);
	}
}

//反转数组，最新章节排在最近前面
$directoryList=array_reverse($directoryList);



//$directoryText[1310];

header("Content-type:text/html;charset=utf-8");
//print_r($directoryList);
echo json_encode($directoryList);


