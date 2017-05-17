$(function(){
	loadNovelDirectory();
});

function loadNovelDirectory()
{
   $.ajax({
		   url:'./src/NovelDirectory.php',
		   async:true,
		   dataType:'json',
		   success:function(data)
		   {
			    $('#directory').html('');
		        for(var i=0;i<data.length;i++)
		        {
		                 if(i==0)
		                 {
		                     
		                	 $('#directory').append('<center><a href="#" class="list-group-item active">小说名字</a></center>');
		                	 $('#directory').append('<center><a href="#bottom" class="list-group-item">前往第一章</a></center>');
		                 }		
		
		            	 $('#directory').append('<a href="javascript:void(0);" onclick="lookCharacter(\''+data[i]["link"]+'\');" class="list-group-item">'+data[i]["atext"]+'</a>');		            	  
		                 
		        }
		        $('#directory').append('<center><a href="#" name="bottom" class="list-group-item">返回最新章节</a></center>');
		        $('#directory').append('<center><a href="javascript:void(0);"  class="list-group-item active">关闭</a></center>');
		        
	        },
            beforeSend:function(){
	        	$('#directory').html('<center class="list-group-item"><a href="javascript:void(0);">获取目录中.......</a></center>');
	    	}
		});
}

function lookCharacter(link)
{
	$.ajax({
		   url:'./src/NovelText.php',
		   type:'post',
		   data:{link:link,'action':'character'},
		   success:function(data)
		   {

			    $('#directory').html('');
			    $('#directory').html(data);
			    /*
		        for(var i=0;i<data.length;i++)
		        {
		                 if(i==0)
		                 {
		                     
		                	 $('#directory').append('<center><a href="#" class="list-group-item active">小说名字</a></center>');
		                	 $('#directory').append('<center><a href="#bottom" class="list-group-item">前往第一章</a></center>');
		                 }		
		
		            	 $('#directory').append('<a href="javascript:void(0);" onclick="lookCharacter('+data[i]["link"]+');" class="list-group-item">'+data[i]["atext"]+'</a>');		            	  
		                 
		        }
		        $('#directory').append('<center><a href="#" name="bottom" class="list-group-item">返回最新章节</a></center>');
		        $('#directory').append('<center><a href="javascript:void(0);"  class="list-group-item active">关闭</a></center>');
		        */
	        },
      beforeSend:function(){
	        	$('#directory').html('<center class="list-group-item"><a href="javascript:void(0);">获取内容中.......</a></center>');
	    	}
		});
}

function loadNovelText()
{

	$.ajax({
		   url:'./src/NovelText.php',
		   async:true,
		   success:function(data)
		   {

			    $('#directory').html('');
			    $('#directory').html(data);
			    /*
		        for(var i=0;i<data.length;i++)
		        {
		                 if(i==0)
		                 {
		                     
		                	 $('#directory').append('<center><a href="#" class="list-group-item active">小说名字</a></center>');
		                	 $('#directory').append('<center><a href="#bottom" class="list-group-item">前往第一章</a></center>');
		                 }		
		
		            	 $('#directory').append('<a href="javascript:void(0);" onclick="lookCharacter('+data[i]["link"]+');" class="list-group-item">'+data[i]["atext"]+'</a>');		            	  
		                 
		        }
		        $('#directory').append('<center><a href="#" name="bottom" class="list-group-item">返回最新章节</a></center>');
		        $('#directory').append('<center><a href="javascript:void(0);"  class="list-group-item active">关闭</a></center>');
		        */
	        },
         beforeSend:function(){
	        	$('#directory').html('<center class="list-group-item"><a href="javascript:void(0);">获取目录中.......</a></center>');
	    	}
		});
}