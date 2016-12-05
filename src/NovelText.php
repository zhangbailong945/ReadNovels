<?php
class NovelText{

	  public function getText($url)
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

$obj=new NovelText();
$url="http://www.20xs.cc/dingdian/0_296/n31039.html";
$texts=array();
$directoryHtml=$obj->getText($url);
print_r($directoryHtml);
$matchRegD="/<div id=\"god\"><\/div><script>yuntujians();<\/script>(.*)<div id=\"ali\"><\/div><\/div>/i";
if(preg_match($matchRegD,$directoryHtml,$matches))
{

   $directoryHtml=$matches[1];
}

