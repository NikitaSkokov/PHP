<?php
	function get_images($directory){
    	$directory = "./img";    // Папка с изображениями
    	$allowed_types=["jpg", "png", "gif"];  //разрешеные типы изображений
    	$file_parts = [];
    	  $ext="";
    	  $title="";
    	  $i=0;
    	//пробуем открыть папку
    	  $dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
    	while ($file = readdir($dir_handle)){    //поиск по файлам 
    		if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
    	  	$file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
    	 	$ext = strtolower(array_pop($file_parts));   //последний элеменет - это расширение
	
    	  	if(in_array($ext,$allowed_types)){
    	  		echo '<div class = "blok_img" >   			
    	            <a href="'.$directory.'/'.$file.'" target="_blank">
    	            	<img src="'.$directory.'/'.$file.'" title="'.$file.'" />
    	            </a>
    	            <input type="button" name="connect" value="Назад">
    	        	</div>';
    	 	$i++;
    	  	}
    	}
    	closedir($dir_handle);  //закрыть папку
	}
?>
 