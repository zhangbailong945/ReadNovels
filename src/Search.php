<?php
include 'simple_html_dom.php';


if(!empty($_POST['search']))
{
   $data=array();
   $content =  file_get_html('http://so.00ksw.com/cse/search?s=10977942222484467615&q='.$_POST['search']);
   foreach($content->find('div.result-game-item-detail') as $e)
   {
     foreach($e->find('a[cpos="title"]') as $e)
     {  
         $novels=array('href'=>str_replace('\\','/',$e->href),'title'=>$e->title);
         $data[]=$novels;
         unset($novels);
     }
   }
   
   echo json_encode($data);
}